@extends("../layouts.plantilla_index")

@section("cabecera")
    <img src="https://cdn.pixabay.com/photo/2013/07/13/14/03/film-162029_960_720.png" alt="Logo"/>
    <h1>Las mejores peliculas a la mejor calidad.</h1>
@endsection


@section("contenido")

    <section id="barra">
      <article>1</article>
      <article>2</article>
      <article>3</article>
      <article>4</article>
      <article>5</article>
      <article>6</article>
      <article>7</article>
      <article>8</article>
      <article>9</article>
    </section>
    
    <section id="cont">
      <article id="portadas">
      @foreach($peliculas as $pelicula)
        <a href="{{route('peliculas.show', $pelicula->id)}}"> 
          <img src="/images/{{ $pelicula->ruta_img }}" width="250px" alt="">        
        </a>
        @endforeach
      </article>
    </section>
    
    @foreach($peliculas as $pelicula)
    <section id="content">
      <article> <a href=" {{route('peliculas.edit', $pelicula->id)}} ">{{$pelicula->titulo}}</a> </article>
      <article>{{$pelicula->duracion}}</article>
      <article>{{$pelicula->fecha}}</article>
      <article>{{$pelicula->genero}}</article>
      <article>{{$pelicula->idioma}}</article>
      <article>{{$pelicula->calidad}}</article>
      <article>{{$pelicula->subtitulos}}</article>
      <article>{{$pelicula->sinopsis}}</article>
      <article>
        <img src="/images/{{ $pelicula->ruta_img }}" width="150px" alt="">
      </article>
    </section>
    @endforeach
@endsection


@section("nav")

@endsection


@section("sites")

@endsection


@section("pie")

@endsection
