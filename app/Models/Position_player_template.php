<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Template;

class Position_player_template extends Model
{
    use HasFactory;

    // プレイヤー配置が紐づくテンプレート（多対1）
    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}
