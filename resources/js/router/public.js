import Index from '@/pages/Index.vue';
import Login from '@/pages/Acesso/Login.vue';
import Register from '@/pages/Acesso/Register.vue';

export default [
    { path: '/', name: 'index', component: Index },
    { path: '/login-sys', name: 'login-sys', component: Login },
    { path: '/register', name: 'register', component: Register },
];
