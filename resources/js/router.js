
import { createWebHistory,createRouter } from "vue-router";
import Login from './components/Page/Autenticacion/Login.vue';

const routes =[

    {
        path: '/',
        name: 'login',
        component:Login
    },
    

];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;