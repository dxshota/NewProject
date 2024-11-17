<?php //投稿関連コントローラクラス

namespace App\Http\Controllers;

use App\Models\Template; //テンプレートのフォーメーション名
use App\Models\Position_Player_Template as PpTemplate; //テンプレートの座標データ
use Illuminate\Http\Request;
use App\Models\Post; //投稿題名
use App\Models\Player; //投稿データ

use App\Http\Requests\PostRequest; //バリデーション
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class PostController extends Controller //C
{
    //ユーザーが最後にアクセスした「戦術（tactics）」ページへリダイレクト
    //setSessionPostId を使ってセッションに保存された「最後の投稿ID」を利用
    public function redirectToLastTactics()
    {
        $postId = session('last_post_id'); //ユーザーが最後にアクセスした投稿のIDを保持
        $post = Post::find($postId); //取得した投稿IDを使って、データベースからその投稿を検索
            if(is_null($postId)){
                $post = Post::where('user_id', Auth::id())->first(); //最後の投稿IDがない場合、現在ログインしているユーザーの最初の投稿をデータベースから取得
                if($post){
                    $postId = $post->id; //投稿が見つかった場合、その投稿のIDを $postId に設定
                }else{
                    return redirect()->route('posts.list'); //ユーザーの投稿が見つからない場合は、posts.list ルート（投稿一覧ページ）にリダイレクト
                }
            }
        return redirect()->route('tactics.index', ['post' => $post]); //投稿が存在する場合（セッションやデータベースから取得したもの）、tactics.index ルートにリダイレクト
    }

    //セッションに「最後にアクセスした投稿ID」を記録し、投稿情報を取得して、適切なビューに渡す
    //特定の投稿にアクセスした際の処理を行い、アクセスした投稿のIDをセッションに保存
    public function index(Post $post)
    {
        Session::put('last_post_id', $post->id); //セッションに現在アクセスしている投稿のIDを last_post_id として保存
        $players = $post->players; //players は投稿に関連するプレイヤー情報のコレクション
        
            //dd($players);
            //dd($posts);
        if($players->count()==0){
            return view('posts.create'); //プレイヤーが存在しない場合新しい投稿を作成するためのフォームページ表示
        }else{
            return view('posts.index')->with(['players' => $players]); //プレイヤーが存在する場合
        }
    }
    
    //[戦術]を押すと新規作成画面を表示
    public function create()
    {
        return view('posts.create'); // 新規作成画面を表示
    }    
    
    //すべての投稿を一覧表示
    public function list()
    {
        $posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(8); //Post モデルに紐づく user 関連データを同時に取得
        return view('posts.post', compact('posts')); //投稿の一覧を表示
    }

    //特定のフォーメーションに対応するポジション（位置）データをデータベースから取得
    public function getFormationPositions($formationId)
    {
        $positions = PpTemplate::where('template_id', $formationId)->get(); //ポジションデータを取得
        return response()->json($positions);
    }

    //投稿作成画面でテンプレートを選択する機能
    public function callTemplate()
    {
        // templatesテーブルからデータを取得
        $formations = Template::orderBy('id', 'asc')->pluck('formation_template_name', 'id');

        // データをindex.blade.phpに渡す
        return view('posts.create', compact('formations'));
    }

    //投稿データを保存する
    public function savePostData(Request $request) 
    {
        //バリデーション
        $request->validate([
            'title' => 'required|string',
            'positions' => 'required|array'
        ]);

        // 認証ユーザーによる投稿データの保存を防ぐ
        $userId = auth()->id();
        if (!$userId) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        //posts テーブルにタイトルを保存
        $post = new Post();
        $post->title = $request->input('title');
        $post->user_id = $userId; // 認証ユーザーのIDを設定
        $post->save();

        //players テーブルに各選手のデータを保存
        $playerIds = [];
        foreach ($request->input('positions') as $position) {
            $player = new Player();
            $player->team_id = $position['team_id'];
            $player->player_position_x = $position['player_position_x'];
            $player->player_position_y = $position['player_position_y'];
            $player->player_number = $position['player_number']; // Nullable
            $player->player_name = $position['player_name'];      // Nullable
            $player->save();

            $playerIds[] = $player->id;  // リレーションのためにplayer_idを保存
        }

        //リレーションテーブルにpost_idとplayer_idを保存
        $post->players()->attach($playerIds);

        return response()->json(['success' => true]);
    }

    //投稿データ呼び出し
    public function getPostPlayers($postId)
    {
        $post = Post::with('players')->find($postId);
            if (!$post) {
                return response()->json(['error' => 'Post not found'], 404);
            }

        $players = $post->players->map(function($player) {
            return [
                'player_number' => $player->player_number,
                'player_name' => $player->player_name,
                'player_position_x' => $player->player_position_x,
                'player_position_y' => $player->player_position_y
            ];
        });

        return response()->json(['players' => $players]);
    }

    //セッションに「最後にアクセスした投稿ID」を保存
    private function setSessionPostId($postId=null){
        $initPostId = Post::where('user_id', Auth::id())->first(); //現在のユーザー（Auth::id()で取得）に紐づく最初の投稿をデータベースから取得
            if($postId){
                session(['last_post_id' => $postId]); //$postId がある場合、セッションに 'last_post_id' としてそのIDを保存
            }else{
                session(['last_post_id' => $initPostId]); //$postId がない場合、最初の投稿のIDをセッションに保存
            }
    }
    
    //テンプレート追加（開発用）
    // public function saveTemplate(Request $request)
    // {
    //     // 保存ボタンバリデーション
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'positions' => 'required|array',
    //         'positions.*.player_id' => 'required',
    //         'positions.*.player_position_x' => 'required|numeric',
    //         'positions.*.player_position_y' => 'required|numeric',
    //     ]);

    //     // タイトルをtemplatesテーブルに保存
    //     $template = new Template();
    //     $template->formation_template_name = $request->title;
    //     $template->save();

    //     // 選手座標をPosition_player_templatesテーブルに保存
    //     foreach ($request->positions as $position) {
    //         $playerPosition = new PpTemplate();
    //         $playerPosition->template_id = $template->id;
    //         $playerPosition->team_id = $position['team_id'];
    //         $playerPosition->player_position_x = $position['player_position_x'];
    //         $playerPosition->player_position_y = $position['player_position_y'];
    //         $playerPosition->save();
    //     }

    //     return response()->json(['success' => true]);
    // }
    
}
