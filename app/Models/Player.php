<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

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
