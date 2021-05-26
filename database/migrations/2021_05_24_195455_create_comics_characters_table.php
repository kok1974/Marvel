<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics_characters', function (Blueprint $table) {
            $table->bigInteger('comic_id')->unsigned();
            $table->bigInteger('personaje_id')->unsigned();
            $table->foreign('comic_id')->references('comic_id')->on('comics')->onDelete('cascade');
            $table->foreign('personaje_id')->references('personaje_id')->on('characters')->onDelete('cascade');
            $table->primary(['comic_id', 'personaje_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics_characters');
    }
}
