<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo')->unique()->required();
            $table->string('duracion')->required();
            $table->string('fecha')->required();
            $table->string('genero')->required();
            $table->string('idioma')->required();
            $table->string('calidad')->required();
            $table->string('subtitulos')->required();
            $table->string('sinopsis')->required();
            $table->string('ruta_img');
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
        Schema::dropIfExists('peliculas');
    }
}
