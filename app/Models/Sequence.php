<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sequence extends Model
{
    use HasFactory;

    // シーケンスが属する投稿（多対1）
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // シーケンスに属するプレイヤー（多対多）
    public function players()
    {
        return $this->belongsToMany(Player::class)->withTimestamps();
    }
}
