<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('classification', ['action', 'drama', 'thriller', 'comedy', 'horror']);
            $table->date('release_date');
            $table->text('review');
            $table->integer('season')->nullable();
            $table->string('image_path');
            $table->enum('type', ['movie', 'series']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
