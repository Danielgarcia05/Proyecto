<template>
    <div>
        <div>
            <h1>Peliculas</h1>
        </div>
        <div>

         <table>
            <thead>
               <tr>
                  <th> Id </th>
                  <th> Titulo </th>
                  <th> Duración </th>
               </tr>
               <tr>
                  <th> &nbsp; </th>
               </tr>
            </thead>
            <tbody>
               <tr v-for="keep in keeps" :key="keep.id">
                  <td>
                  @{{ keep._id }}
                  </td>
                  <td>
                  @{{ keep.titulo }}
                  </td>
                  <td>
                  @{{ keep.duracion }}
                  </td>
                  <td>
                  @{{ keep.fecha }}
                  </td>
                  <td>
                  @{{ keep.genero }}
                  </td>
                  <td>
                  @{{ keep.idioma }}
                  </td>
                  <td>
                  @{{ keep.calidad }}
                  </td>
                  <td>
                  @{{ keep.subtitulos }}
                  </td>
                  <td>
                  @{{ keep.sinopsis }}
                  </td>
                  <td>
                     <img :src="'../images/' + 'keep.ruta_img'" width="150px" alt="">
                     
                     <!--<img src="`public/images/${keep.ruta_img}`" width="150px" alt="">-->
                  </td>
                  <td>
                     <a href="">@{{ keep.url }}</a>
                  </td>
                  <td><a href="#">Editar</a></td>
                  <td><a href="#" v-on:click.prevent="deleteKeep(keep)">Eliminar</a></td>
               </tr>
            </tbody>
         </table>
        </div>
    </div>
</template>