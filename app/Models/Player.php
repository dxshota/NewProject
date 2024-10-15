<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use HasFactory;
    use SoftDeletes;

    // ソフトデリートを有効化するカラム
    protected $dates = ['deleted_at'];
    
    // プレイヤーが紐づく投稿（多対多）
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_player')->withTimestamps();
    }
    
    // プレイヤーが属するシーケンス（多対多）
    public function sequences()
    {
        return $this->belongsToMany(Sequence::class)->withTimestamps();
    }
}
