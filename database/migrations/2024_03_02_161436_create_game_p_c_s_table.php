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
        Schema::create('game_p_c_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('total_gamepcs');
            $table->integer('available_gamepcs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_p_c_s');
    }
};
