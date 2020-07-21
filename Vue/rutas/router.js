import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import About from './views/About.vue'
import Contacto from './views/Contacto.vue'
import Usuarios from './views/Usuarios.vue'
import Login from './views/Login.vue'
import Signup from './views/Signup.vue'
import Productos from './views/productos/Index.vue'
import Detalle from './views/productos/Detalle.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    { path: '/', name: 'home',component: Home },
    { path: '/about', name: 'about', component: About //() => import(/* webpackChunkName: "about" */ './views/About.vue') 
    },
    { path: '/contacto', name: 'contacto', component: Contacto },
    { path: '/usuarios/:id', name: 'usuarios', component: Usuarios },
    { path: '/login', name: 'login', component: Login },
    { path: '/signup', name: 'signup', component: Signup },
    { path: '/registrarse', redirect: '/signup' },
    { path: '/productos', name: 'productos', component: Productos },
    { path: '/producto-detalle/:id', name: 'producto', component: Detalle }
  ]
})
