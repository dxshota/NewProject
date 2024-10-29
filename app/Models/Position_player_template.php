<?php

namespace App\Models;
use App\Http\Controllers\Postcontroller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Template;

class Position_player_template extends Model
{
    use HasFactory;
    use SoftDeletes;

    // ソフトデリートを有効化するカラム
    protected $dates = ['deleted_at'];
    
    protected $fillable = ['template_id', 'player_id', 'player_position_x', 'player_position_y'];

    // プレイヤー配置が紐づくテンプレート（多対1）
    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}
