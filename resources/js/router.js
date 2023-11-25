
import { createWebHistory,createRouter } from "vue-router";

import Dashboards from './components/Page/Dashboard/Index.vue'
import Usuarios from './components/Page/Usuarios/Index.vue'
import Clientes from './components/Page/Clientes/Index.vue'
import Categorias from './components/Page/Categorias/Index.vue'
const routes =[

    {
        path: '/',
        name: 'Dashboards',
        component:Dashboards
    },
    {
        path: '/usuarios',
        name: 'usuarios',
        component:Usuarios
    },
    {
        path: '/clientes',
        name: 'clientes',
        component:Clientes
    },
    {
        path: '/categorias',
        name: 'categorias',
        component:Categorias
    },



];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
