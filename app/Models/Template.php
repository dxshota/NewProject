<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Template extends Model
{
    use HasFactory;
    use SoftDeletes;

    // ソフトデリートを有効化するカラム
    protected $dates = ['deleted_at'];
    
    public function posts()
    {
        return $this->hasOne(Post::class); //postとのリレーション
    }

    // テンプレートに紐づくプレイヤー配置（1対多）
    public function playerPositions()
    {
        return $this->hasMany(Position_player_template::class);
    }
}
