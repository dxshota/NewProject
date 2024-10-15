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
        Schema::table('position_player_templates', function (Blueprint $table) {
            // player_position_x と player_position_y のカラムを decimal 型に変更 (小数点2桁)
            $table->decimal('player_position_x', 8, 2)->change();
            $table->decimal('player_position_y', 8, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('position_player_templates', function (Blueprint $table) {
            //
        });
    }
};
