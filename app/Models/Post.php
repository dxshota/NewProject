<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\Template\Template;

class Post extends Model
{
    use HasFactory;

    // 投稿に紐づくユーザー（多対1）
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    // テンプレートに紐づくユーザー（1対1）
    public function templates()
    {
        return $this->belongsTo(Template::class);
    }

    // 投稿に紐づくプレイヤー（多対多）
    public function players()
    {
        return $this->belongsToMany(Player::class, 'post_player')->withTimestamps();
    }
    
    // 投稿に紐づくシーケンス（1対多）
    public function sequences()
    {
        return $this->hasMany(Sequence::class);
    }
}
