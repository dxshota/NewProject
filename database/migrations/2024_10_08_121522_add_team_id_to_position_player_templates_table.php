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
            if (!Schema::hasColumn('position_player_templates', 'team_id')) {
                $table->enum('team_id', ['1', '2'])->nullable(false);
            }
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
