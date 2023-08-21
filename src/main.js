import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router'; // Importa VueRouter desde la biblioteca
import router from './router'; // Importa tu configuración de rutas desde './router'
import store from './store';

Vue.use(VueRouter);

// Importar estilos globales y otros archivos JavaScript

import 'jquery';
import '@/assets/js/jquery.slim.min.js';
import '@/assets/css/global.css';

//import 'bootstrap';

import '@/assets/js/plugins.min.js';
import '@/assets/js/bootstrap.min.js';
import '@/assets/js/jquery-numerator.min.js';
import '@/assets/js/jquery.appear.min.js';
import '@/assets/js/nouislider.min.js';
import '@/assets/js/popper.min.js';
import '@/assets/js/azatrade_main.js';
import '@/assets/js/all.min.js';
import '@/assets/js/main.js';

import HomeViewVue from './views/HomeView.vue';
import ImportacionesVue from './views/Importaciones/Importaciones.vue';
import PrincipalVue from './views/Principal/Principal.vue';

Vue.config.productionTip = false;

new Vue({
  router, // Utiliza la instancia de router importada
  store,
  render: h => h(App)
}).$mount('#app');
