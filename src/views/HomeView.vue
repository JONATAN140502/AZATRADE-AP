<template>
   <div class="page-wrapper">
    <Header/>
    <Index/>
    <Footer/>
  </div>
</template>
<style>

</style>
<script>

import HelloWorld from '@/components/HelloWorld.vue'
import Header from '@/views/Header.vue'
import Footer from '@/views/Footer.vue'
import Index from '@/views/IndexVue.vue'
export default {
  name: 'HomeView',
  components: {
    HelloWorld,
    Header,
    Footer,
    Index
  }
}
</script>
