import { createRouter, createWebHashHistory} from 'vue-router';
import logged from './auth';
import index from './public';

const router = createRouter({
    history: createWebHashHistory(),
    routes: [
        ...logged,
        ...index
    ]
});

export default router;
