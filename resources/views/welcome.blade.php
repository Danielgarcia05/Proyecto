 @extends('layouts.app')


@section('content')
   <div id="app">
   <article id="inner-grid">
      <hr>
      <section id="barra">
         <article>Titulo</article>
         <article>Duración</article>
         <article>Fecha</article>
         <article>Genero</article>
         <article>Idioma</article>
         <article>Calidad</article>
         <article>Subtitulos</article>
         <article>Sinopsis</article>
         <article>Portada</article>
         <article>Url</article>
         <article>Eliminar</article>
      </section>


      <section id="datos" v-for="keep in keeps">
         <article>
            <p>@{{ keep.titulo }}</p>
         </article>
         <article>
            <p>@{{ keep.duracion }}</p>
         </article>
         <article>
            <p>@{{ keep.fecha }}</p>
         </article>
         <article>
            <p>@{{ keep.genero }}</p>
         </article>
         <article>
            <p>@{{ keep.idioma }}</p>
         </article>
         <article>
            <p>@{{ keep.calidad }}</p>
         </article>
         <article>
            <p>@{{ keep.subtitulos }}</p>
         </article>
         <article class="sinopsis">
            <p>@{{ keep.sinopsis }}</p>
         </article>
         <article> 
            <p><img :src=" keep.ruta_img" width="150px" alt=""></p>
         </article>
         <article>
            <p>
               <a :href=" keep.url ">
               @{{ keep.url }}
               </a>
            </p>
         </article>
         <article>
            <p>
               <a href="#" v-on:click.prevent="deleteKeep(keep)">
                  <img src="https://image.flaticon.com/icons/png/512/61/61848.png" class="edit_icon" alt="">
               </a>
            </p>
         </article>
      </section>
      <registro-component></registro-component>
   </article>
   </div>
 @endsection
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"> </script>
