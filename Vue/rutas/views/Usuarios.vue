<template>
    <div class="container">
        <h1>Información de Usuario</h1>

        <router-link :to="{ name:'usuarios', params:{id : item} }" 
            v-for="(item,index) of ArregloUsuarios" :key="index">
            <button>{{ item }}</button>
        </router-link>
        <Usuario />
    </div>
</template>
<script>
import Usuario from '@/components/Usuario.vue';
export default {
    components:{
        Usuario
    },
    data(){
        return{
            ArregloUsuarios:['grover','carlos','luisa','karla']
        }
    }    
}
</script>

