<template>
  <div class="container">    
    <HelloWorld msg="Bienvenido a tu App Vue.js con rutas"/>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'home',
  components: {
    HelloWorld
  }
}
</script>
