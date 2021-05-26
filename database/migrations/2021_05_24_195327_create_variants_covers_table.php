<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariantsCoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variants_covers', function (Blueprint $table) {
            $table->bigInteger('original_id')->unsigned();
            $table->bigInteger('variante_id')->unsigned();
            $table->foreign('original_id')->references('comic_id')->on('comics')->onDelete('cascade');
            $table->foreign('variante_id')->references('comic_id')->on('comics')->onDelete('cascade');
            $table->timestamps();
            $table->primary(['original_id', 'variante_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variants_covers');
    }
}
