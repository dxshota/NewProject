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
        Schema::create('position_player_templates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('template_id')->constrained()->onDelete('cascade'); //リレーションtemplate
            $table->string('player_name');
            $table->integer('player_position_x');
            $table->integer('player_position_y');
            $table->enum('player_role', ['FW', 'CF', 'ST', 'WG', 'MF', 'CMF', 'DMF', 'OMF', 'SH', 'IH', 'ANC', 'DF', 'CB', 'SB', 'WB', 'GK']);
            $table->integer('player_number');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('position_player_templates');
    }
};
