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
        Schema::create('album_genre', function (Blueprint $table) {
            $table->foreignId('album_id')->constrained('albums')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('genre_id')->constrained('genres')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unique(['album_id', 'genre_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('album_genre');
    }
};
