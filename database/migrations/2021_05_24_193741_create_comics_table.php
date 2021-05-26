<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id('comic_id');
            $table->bigInteger('serie_id')->unsigned();
            $table->string('titulo', 70);
            $table->integer('numero')->unsigned()->default(0);
            $table->text('descripcion')->nullable();
            $table->string('formato', 70)->nullable();
            $table->string('imagen', 255)->nullable();
            $table->string('mime', 6)->nullable();
            $table->bigInteger('guionista_id')->unsigned();
            $table->bigInteger('dibujante_id')->unsigned();
            $table->bigInteger('artistaPortada_id')->unsigned()->nullable();
            $table->enum('variantesPortada', array('n', 'o','v'))->default('n');
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
        Schema::dropIfExists('comics');
    }
}
