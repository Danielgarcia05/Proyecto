@extends("../layouts.plantilla_form")

@section("cabecera")
    <img src="https://cdn.pixabay.com/photo/2013/07/13/14/03/film-162029_960_720.png" alt="Logo"/>
    <h1>Las mejores peliculas a la mejor calidad.</h1>
@endsection


@section("contenido")
<section class="titulo">
    <h1>Editar Pelicula</h1>
</section>
<form class="myForm" method="post" action="/peliculas/{{$pelicula->id}}">
<input type="hidden" name="_method" value="PUT">

  <label for="titulo">Titulo </label>
  <input type="text" name="titulo" required value="{{$pelicula->titulo}}" >
  {{ csrf_field() }}
  <label for="duracion">Duración </label>
  <input type="text" name="duracion" required value="{{$pelicula->duracion}}">
  {{ csrf_field() }}
  <label for="fecha">Fecha </label>
  <input type="text" name="fecha" required value="{{$pelicula->fecha}}">
  {{ csrf_field() }}
  <label for="genero">Genero </label>
  <input type="text" name="genero" required value="{{$pelicula->genero}}">
  {{ csrf_field() }}
  <label for="idioma">Idioma </label>
  <input type="text" name="idioma" required value="{{$pelicula->idioma}}">
  {{ csrf_field() }}
  <label for="calidad">Calidad </label>
  <input type="text" name="calidad" required value="{{$pelicula->calidad}}">
  {{ csrf_field() }}
  <label for="subtitulos">Subtitulos </label>
  <input type="text" name="subtitulos" required  value="{{$pelicula->subtitulos}}">
  {{ csrf_field() }}
  <label for="sinopsis">Sinopsis</label>
  <textarea name="sinopsis" maxlength="400">{{$pelicula->sinopsis}}</textarea>
  {{ csrf_field() }}
<input type="submit" name="enviar" class="btn_enviar" value=" Enviar">
    <input type="reset" name="limpiar" class="btn_enviar" value=" Limpiar">

</form>

<form class="myForm" method="post" action="/peliculas/{{$pelicula->id}}">
{{ csrf_field() }}
  <input type="hidden" name="_method" value="DELETE">
  <input type="submit" value="Borrar">
</form>
@endsection


@section("nav")

@endsection


@section("sites")

@endsection


@section("pie")

@endsection
