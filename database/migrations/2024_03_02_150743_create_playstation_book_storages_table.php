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
        Schema::create('playstation_book_storages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('total_playstations');
            $table->integer('available_playstations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playstation_book_storages');
    }
};
