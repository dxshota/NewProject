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
        Schema::create('player_sequence', function (Blueprint $table) {
            $table->foreignId('player_id')->constrained('players')->onDelete('cascade'); // Foreign Key
            $table->foreignId('sequence_id')->constrained('sequences')->onDelete('cascade'); // Foreign Key
            $table->timestamps();
            $table->primary(['player_id', 'sequence_id']);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_sequence');
    }
};
