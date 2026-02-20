import { createRouter, createWebHashHistory} from 'vue-router';
import Page from '@/pages/Page.vue';
import Login from '@/pages/Acesso/Login.vue';
import Register from '@/pages/Acesso/Register.vue';

const routes = [
    { path: '/', name: 'page', component: Page },
    { path: '/login-sys', name: 'login-sys', component: Login },
    { path: '/register', name: 'register', component: Register },
];

const router = createRouter({
    history: createWebHashHistory(),
    routes
});

export default router;
