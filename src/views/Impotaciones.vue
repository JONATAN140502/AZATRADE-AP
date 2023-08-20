<template>
    <div class="page-wrapper">
      <Header/>
      <div class="main home">
        <div class="container d-flex">
          <Lateral />
          <div class="col-md-9">
           <Importaciones/>
          
          <div class="sidebar-overlay"></div>
          <div class="sidebar-toggle custom-sidebar-toggle"></div>
        </div>
      </div>
      <Footer />
    </div>
    </div>
  </template>
  
  <script>
  import Header from '../views/Header.vue'
  import Footer from '../views/Footer.vue'
  import Lateral from '../views/Lateral.vue'
  // import Principal from '../components/Principal.vue'
  import Importaciones from '../views/Importaciones/Importaciones.vue'
  export default {
    name: 'HomeView',
    components: {
      Header,
      Footer,
      Lateral,
      Importaciones
     
  
    },
    beforeRouteLeave(to, from, next) {
      // hacer algo antes de navegar
      // por ejemplo: guardar cambios
  
      next() 
    },
    data() {
      return {
       
      }
    },
    methods: {
     
    }
  }
  </script>
 