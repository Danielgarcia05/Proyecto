<style>
body{
  background: #e2e2e2;
}
.contenedor-form{
  margin-top: 20px;
}
#pageHeader {
  background: url('https://pngimage.net/wp-content/uploads/2018/05/cinta-pelicula-png-6.png');
  background-repeat: repeat, no-repeat;
  background-size: 220px;
  color: #fff;
  height: 7%;
  text-align: center;
}
#pageHeader img{
  float: left;
  padding-left: 50px;
  margin-top: 5px;
  width: 7%;
} 
#pageHeader h1 {
  padding-top: 10px;
  height: 100%;
  background: rgba(47,105,151, 0.6);
}
@media screen and (max-width: 950px) {
  #app{
    margin: 0 auto;
    width: 90%;
  }
  #pageHeader {
    height: 5%;
    widows: 100%;
    background: rgba(47,105,151, 0.6);
    color: #fff;
    font-size: 2em;
    text-align: center;
  }
  #pageHeader img{
    float: left;
    padding-left: 50px;
    margin-top: 5px;
    width: 15%;
  } 
  #pageHeader h1 {
    padding-top: 10px;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
  }
}
form{
    width: 50%;
    padding: 20px;
    margin: 0 auto;
    border-radius: 20px;
    background: rgba(47,105,151, 0.6);
}
form > input{
    width: 40%;
    background: transparent;
    display: block;
    margin: 20 auto;
    border: 1px solid #ccc;
}
form > textarea{
    width: 40%;
    background: transparent;
    display: block;
    margin: 20 auto;
    border: 1px solid #ccc;
}
form > button{
    width: 40%;
    background: #fff;
    display: block;
    color: #2F6997;
    margin: 20 auto;
    border-radius: 10px;
}
form > button:hover{
    width: 55%;
    background: transparent;
    display: block;
    color: #ccc;
    margin: 20 auto;
    transition: .5s;
    border-radius: 10px;
}
form > input[type=text]:focus {
    width: 50%;
    transition: .5s;
    background-color: transparent;
}
form > textarea:focus{
    width: 50%;
    transition: .5s;
    background-color: transparent;
}
::placeholder {
    color: #fff;
    opacity: 1; /* Firefox */
}
.title{
    text-align: center;
}
.table-responsive {
    background: #ccc;
    min-height: .01%;
    overflow-x: auto;
    text-align: center;
}
thead > tr > th{
    color: #ffffff;
    font-size: 2em;
    width: auto;
}
.titulo h2{
    text-align: center;
    color: #fff;
    font-size: 2.5em;
    background: rgba(47,105,151, 0.6);
}
.edit_icon{
    width: 50px;
}
#barra {
  display: grid;
  text-align: center;
  grid-template-columns: repeat(11, 1fr);
  grid-gap: 1px;
  margin: 15px;
}
#barra article{
  background: #2f6997;
  color: #fff;
  font-size: 1.5em;
}
#datos{
  display: grid;
  text-align: center;
  grid-template-columns: repeat(11, 1fr);
  grid-gap: 1px;
  margin: 15px;
}
#datos article{
  background: #fff;
}
#datos article p, a{
    margin-top: 50%;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .inner-grid{
    widows: 90%;
  }
  .pageHeader{
    width: 100%;
    height: 7%;
    background: #2f6997;
    font-size: 2em;
    color: #fff;
    text-align: center;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
}

#pageFooter {
  background: url('https://pngimage.net/wp-content/uploads/2018/05/cinta-pelicula-png-6.png');
  background-repeat: repeat, no-repeat;
  background-size: 220px;
  color: #fff;
  height: 7%;
  font-size: 1em;
  text-align: center;
  bottom: 0px;
}
#pageFooter img{
  float: left;
  padding-left: 50px;
  margin-top: 5px;
  width: 7%;
} 
#pageFooter h1 {
  padding-top: 10px;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}
.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}
.icon-bar{
  margin: 5px;
}
.facebook {
  background: #3B5998;
  color: white;
}
.icon-bar > .facebook:hover{
  background: transparent !important;
  border-radius: 50%;
  border: 1px solid #3B5998;
  color: #3B5998;
  transition: .5s;
}
.twitter {
  background: #55ACEE;
  color: #fff;
}
.icon-bar > .twitter:hover{
  background: transparent !important;
  border-radius: 50%;
  border: 1px solid #55ACEE;
  color: #55ACEE;
  transition: .5s;
}
.google {
  background: #dd4b39;
  color: #fff;
}
.icon-bar > .google:hover{
  background: transparent !important;
  border-radius: 50%;
  border: 1px solid #dd4b39;
  color: #dd4b39;
  transition: .5s;
}
.youtube {
  background: #bb0000;
  color: white;
}
.sinopsis{
  text-align: justify;
  padding: 10px;
}
.icon-bar > .youtube:hover{
  background: transparent !important;
  border-radius: 50%;
  border: 1px solid #bb0000;
  color: #bb0000;
  transition: .5s;
}
.insta {
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
}
.icon-bar > .insta:hover{
  background: transparent !important;
  border-radius: 50%;
  border: 1px solid #d6249f;
  color: #d6249f;
  transition: .5s;
}
</style>

<template>
    <div class="contenedor-form">
        <div class="titulo">
            <h2>Agregar Pelicula</h2>
        </div>
        <hr>
        <form @submit="agregar" class="agregar" enctype="multipart/form-data">
            <input type="text" name="titulo" placeholder="Titulo:" required v-model="peli.titulo">
            <input type="text" name="duracion" placeholder="Duración:" required v-model="peli.duracion">
            <input type="text" name="fecha" placeholder="Fecha:" required v-model="peli.fecha">
            <input type="text" name="genero" placeholder="Genero:" required v-model="peli.genero">
            <input type="text" name="idioma" placeholder="Idioma:" required v-model="peli.idioma">
            <input type="text" name="calidad" placeholder="Calidad:" required v-model="peli.calidad">
            <input type="text" name="subtitulos" placeholder="Subtitulos:" required v-model="peli.subtitulos">
            <textarea name="sinopsis" placeholder="Sinopsis:" required v-model="peli.sinopsis" ></textarea>
            <input type="text" name="portada" placeholder="Url portada:" required v-model="peli.ruta_img">
            <input type="text" name="url" placeholder="Url:" required v-model="peli.url">
            <button type="submit">Agregar</button>
        </form>
        <br>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                pelis:[],
                peli:{
                    titulo:'',
                    duracion:'',
                    fecha: '',
                    genero: '',
                    idioma: '',
                    calidad: '',
                    subtitulos: '',
                    sinopsis: '',
                    ruta_img: '',
                    url: ''
                }
            }  
        },
        methods: {
            agregar(){
                
                //console.log(this.nota.nombre, this.nota.dexcripcion);
                const peliculas={
                    titulo:this.peli.titulo,
                    duracion:this.peli.duracion,
                    fecha:this.peli.fecha,
                    genero:this.peli.genero,
                    idioma:this.peli.idioma,
                    calidad:this.peli.calidad,
                    subtitulos:this.peli.subtitulos,
                    sinopsis:this.peli.sinopsis,
                    ruta_img:this.peli.ruta_img,
                    url:this.peli.url,
                } ;                            
                axios.post('/agregar', peliculas).then(res=>{
                    this.pelis.push(res.data);
                    return this.peli.titulo='';
                }) 
            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
