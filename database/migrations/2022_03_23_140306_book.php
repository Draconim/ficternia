<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('published')->default('draft');
            $table->string('cover')->nullable();
            $table->text('description');
            $table->foreignId('genre_id');
            $table->foreignId('subGenre_id');
            $table->integer('age_limit');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamp('last_updated')->nullable();
            $table->integer('views')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
