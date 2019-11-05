 require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import Axios from 'axios';
import VueAxios from 'vue-axios';

Vue.use(VueAxios, axios);


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('registro-component', require('./components/FormComponent.vue').default);
Vue.component('peliculas-component', require('./components/PeliculasComponent.vue').default);

const app = new Vue({
    el: '#app',
    created: function(){
        this.getKeeps();
    },
    data: {
        keeps: [],
        keep: {
            titulo: '',
        }
      },
      methods: {
          getKeeps() {
              axios.get('/peli')
              .then(response =>{
                    this.keeps = response.data;
                    console.log(response.data);
              });
          },
          deleteKeep: function(keep){
            var url = '/borrar/' + keep._id;
            axios.delete(url).then(response => {
                this.getKeeps();
            });
          },
          createKeep: function(){
              const peliculas ={
                keep:this.titulo,
              };
              axios.post('/agregar', peliculas)
              .then(response=>{
                  this.keeps.push(response.data)
                  this.keeps.titulo= '';
              });
          }
      }
});