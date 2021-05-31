<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConstrainsComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->foreign('serie_id')->references('serie_id')->on('series')->onDelete('cascade');
            $table->foreign('guionista_id')->references('creator_id')->on('creators')->onDelete('cascade');
            $table->foreign('dibujante_id')->references('creator_id')->on('creators')->onDelete('cascade');
            $table->foreign('artistaPortada_id')->references('creator_id')->on('creators')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->dropForeign('comics_serie_id_foreign');
            $table->dropForeign('comics_guionista_id_foreign');
            $table->dropForeign('comics_dibujante_id_foreign');
            $table->dropForeign('comics_artistaPortada_id_foreign');
        });
    }
}
