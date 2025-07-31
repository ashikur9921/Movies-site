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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->string('type');
            $table->string('movie_image_link');
            $table->string('rating');
            $table->longText('description');
            $table->string('download_link');
            $table->string('watch_link')->nullable();
            $table->string('trailer')->nullable();
            $table->string('categori')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};