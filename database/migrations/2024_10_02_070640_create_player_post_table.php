<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('player_post', function (Blueprint $table) { //中間テーブル
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade'); // Foreign Key
            $table->foreignId('player_id')->constrained('players')->onDelete('cascade'); // Foreign Key
            $table->timestamp('timestamp')->nullable();
            $table->primary(['post_id', 'player_id']);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_post');
    }
};
