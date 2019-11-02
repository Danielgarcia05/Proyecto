@extends("../layouts.plantilla_lista")

@section("cabecera")
    <img src="https://cdn.pixabay.com/photo/2013/07/13/14/03/film-162029_960_720.png" alt="Logo"/>
    <h1>Las mejores peliculas a la mejor calidad.</h1>
@endsection


@section("contenido")

    <section id="title">
        <h1>
            {{$pelicula->titulo}}
        </h1>
    </section>

    <section id="content">
      <article>
        <img src="/images/{{ $pelicula->ruta_img }}" alt="">
      </article>
    </section>

    <section id="desc">
    <ul>
        <li> <strong>Duración: </strong> {{$pelicula->duracion}}</li>
        <li> <strong>Fecha: </strong> {{$pelicula->fecha}}</li>
        <li> <strong>Genero: </strong> {{$pelicula->genero}}</li>
        <li> <strong>Idioma: </strong> {{$pelicula->idioma}}</li>
        <li> <strong>Calidad: </strong> {{$pelicula->calidad}}</li>
        <li> <strong>Subtitulos: </strong> {{$pelicula->subtitulos}}</li>
        <li> <strong>Sinopsis: </strong> {{$pelicula->sinopsis}}</li>
        <li> <strong>Url: </strong> <a href="{{$pelicula->url}}"> {{$pelicula->url}}</a> </li>
    </ul>
    </section>

@endsection


@section("nav")

@endsection


@section("sites")

@endsection


@section("pie")

@endsection
