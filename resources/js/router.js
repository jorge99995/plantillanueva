
import { createWebHistory,createRouter } from "vue-router";

import Dashboards from './components/Page/Dashboard/Index.vue'
import Usuarios from './components/Page/Usuarios/Index.vue'

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


];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
