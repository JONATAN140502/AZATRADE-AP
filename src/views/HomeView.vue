<style>
@import "../assets/css/global.css";
</style>
<template>
  <div class="page-wrapper">
    <Header/>
    <div class="main home">
      <div class="container d-flex">
        <Lateral />
        <div class="col-md-9">
       <Principal />
        </div>
        <div class="sidebar-overlay"></div>
        <div class="sidebar-toggle custom-sidebar-toggle"></div>
      </div>
    </div>
    <Footer />
  </div>
</template>

<script>
//import '../js/jquery-3.7.0.min.js'; // Importa jQuery

import Header from '../views/Header.vue'
import Footer from '../views/Footer.vue'
import Lateral from '../views/Lateral.vue'
import Principal from '../views/Principal/Principal.vue'
import Importaciones from '../views/Importaciones/Importaciones.vue'
export default {
  name: 'HomeView',
  components: {
    Header,
    Footer,
    Lateral,
    Principal,
    Importaciones
   

  },
  data() {
    return {
     
    }
  },
  methods: {
   
  }
  
}

</script>
