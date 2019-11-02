<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Pelicula extends Eloquent
{
    protected $fillable= ["titulo", "duracion", "fecha", "genero", "idioma", "calidad", "subtitulos", "sinopsis", "ruta_img"];
}
