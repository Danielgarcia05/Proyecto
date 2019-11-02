 require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import Axios from 'axios';
import VueAxios from 'vue-axios';

Vue.use(VueAxios, axios);


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('peliculas', require('./components/PeliculasComponent.vue').default);
Vue.component('photo', require('./components/Photo.vue'));

const app = new Vue({
    el: '#app',
    created: function(){
        this.getKeeps();
    },
    data: {
        keeps: {}
      },
      methods: {
          getKeeps() {
              axios.get('/peli')
              .then(response =>{
                    this.keeps = response.data;
                    console.log(response.data);
              });
          }
      },
});