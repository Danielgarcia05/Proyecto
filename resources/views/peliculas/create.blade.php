@extends("../layouts.plantilla_form")
@extends('layouts.app')

@section("cabecera")
    <img src="https://cdn.pixabay.com/photo/2013/07/13/14/03/film-162029_960_720.png" alt="Logo"/>
@endsection


@section("content")
<form class="myForm" method="post" action="/peliculas" enctype="multipart/form-data">
  <label for="titulos">Titulo </label>
  <input type="text" v-model="titulo">
  {{ csrf_field() }}
  <label for="duracion">Duración </label>
  <input type="text" name="duracion" required>
  {{ csrf_field() }}
  <label for="fecha">Fecha </label>
  <input type="text" name="fecha" required>
  {{ csrf_field() }}
  <label for="genero">Genero </label>
  <input type="text" name="genero" required>
  {{ csrf_field() }}
  <label for="idioma">Idioma </label>
  <input type="text" name="idioma" required>
  {{ csrf_field() }}
  <label for="calidad">Calidad </label>
  <input type="text" name="calidad" required>
  {{ csrf_field() }}
  <label for="subtitulos">Subtitulos </label>
  <input type="text" name="subtitulos" required>
  {{ csrf_field() }}
  <label for="sinopsis">Sinopsis</label>
  <textarea name="sinopsis" maxlength="400"></textarea>
  {{ csrf_field() }}
  <label for="img">Portada</label>
  <input type="file" name="file" required>
  {{ csrf_field() }}
<input type="submit" name="enviar" class="btn_enviar" value=" Enviar">
    <input type="reset" name="limpiar" class="btn_enviar" value=" Limpiar">
</form>

@if(count($errors)>0)
    <ul>
    @foreach($errors->all() as $error)

        <li>{{$error}}</li>

    @endforeach
    </ul>
@endif
        <script src="{{asset('js/app.js')}}"></script>
@endsection


@section("nav")

@endsection


@section("sites")

@endsection


@section("pie")

@endsection
