import { createRouter, createWebHashHistory} from 'vue-router';
import Page from '@/pages/Page.vue';

const routes = [
    { path: '/', name: 'page', component: Page },
];

const router = createRouter({
    history: createWebHashHistory(),
    routes
});

export default router;
