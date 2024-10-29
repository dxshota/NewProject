<?php //投稿関連コントローラクラス

namespace App\Http\Controllers;

use App\Models\Template;
use App\Models\Position_Player_Template;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest; //バリデーション


class Postcontroller extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }

    public function storeTemplate(Request $request)
    {
        // 保存ボタンバリデーション
        $request->validate([
            'title' => 'required|string|max:255',
            'positions' => 'required|array',
            'positions.*.player_id' => 'required',
            'positions.*.player_position_x' => 'required|numeric',
            'positions.*.player_position_y' => 'required|numeric',
        ]);

        // タイトルをtemplatesテーブルに保存
        $template = new Template();
        $template->title = $request->input('title');
        $template->save();

        // 選手座標をPosition_player_templatesテーブルに保存
        foreach ($request->input('positions') as $position) {
            $playerPosition = new Position_Player_Template();
            $playerPosition->template_id = $template->id;
            $playerPosition->player_id = $position['player_id'];
            $playerPosition->player_position_x = $position['player_position_x'];
            $playerPosition->player_position_y = $position['player_position_y'];
            $playerPosition->save();
        }

        return response()->json(['success' => true]);
    }
}
