<?php //投稿関連コントローラクラス

namespace App\Http\Controllers;

use App\Models\Template; //テンプレートのフォーメーション名
use App\Models\Position_Player_Template as PpTemplate; //テンプレートの座標データ
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Player;
use App\Http\Requests\PostRequest; //バリデーション


class Postcontroller extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    //テンプレート選手座標適用関数
    public function getFormationPositions($formationId)
    {
        $positions = PpTemplate::where('template_id', $formationId)->get(); //Templatesにリレーションを設定してるPosition_Player_Templateテーブルのtemplate_idを取得
        return response()->json($positions);
    }

    //テンプレート画面表示用関数
    public function callTemplate()
    {
        // templatesテーブルからデータを取得
        $formations = Template::orderBy('id', 'asc')->pluck('formation_template_name', 'id');

        // データをビューに渡す
        return view('posts.index', compact('formations'));
    }

    //投稿データ保存関数
    public function savePostData(Request $request) 
    {
        $request->validate([
            'title' => 'required|string',
            'positions' => 'required|array'
        ]);

        // 認証ユーザーがいるか確認
        $userId = auth()->id();
        if (!$userId) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        // 1. posts テーブルにタイトルを保存
        $post = new Post();
        $post->title = $request->input('title');
        $post->user_id = $userId; // 認証ユーザーのIDを設定
        $post->save();

        // 2. players テーブルに各選手のデータを保存
        $playerIds = [];
        foreach ($request->input('positions') as $position) {
            $player = new Player();
            $player->team_id = $position['team_id'];
            $player->player_position_x = $position['player_position_x'];
            $player->player_position_y = $position['player_position_y'];
            $player->player_number = $position['player_number'] ?? null; // Nullable
            $player->player_name = $position['player_name']?? null;      // Nullable
            $player->save();

            $playerIds[] = $player->id;  // リレーションのためにplayer_idを保存
        }

        // 3. リレーションテーブルにpost_idとplayer_idを保存
        $post->players()->attach($playerIds);

        return response()->json(['success' => true]);
    }

    /*
    public function saveTemplate(Request $request)
    {
        // 保存ボタンバリデーション
        /*$request->validate([
            'title' => 'required|string|max:255',
            'positions' => 'required|array',
            'positions.*.player_id' => 'required',
            'positions.*.player_position_x' => 'required|numeric',
            'positions.*.player_position_y' => 'required|numeric',
        ]);

        // タイトルをtemplatesテーブルに保存
        $template = new Template();
        $template->formation_template_name = $request->title;
        $template->save();

        // 選手座標をPosition_player_templatesテーブルに保存
        foreach ($request->positions as $position) {
            $playerPosition = new PpTemplate();
            $playerPosition->template_id = $template->id;
            $playerPosition->team_id = $position['team_id'];
            $playerPosition->player_position_x = $position['player_position_x'];
            $playerPosition->player_position_y = $position['player_position_y'];
            $playerPosition->save();
        }

        return response()->json(['success' => true]);
    }
    */
}
