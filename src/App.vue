<template>
  <div id="app">
    <HOME/>
   <!-- <nav>
      <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link>
    </nav>
    <router-view/>  -->
  
  </div>
</template>
<script>
import HelloWorld from '@/components/HelloWorld.vue'
import HOME from '@/views/HomeView.vue'
export default {
  name: 'HomeView',
  components: {
    HelloWorld,
    HOME
  },
  methods:{
   
  }
}
</script>
<style>
</style>
