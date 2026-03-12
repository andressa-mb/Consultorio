import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';

import { createApp } from 'vue';
import { createPinia } from 'pinia';
import router from '@/router/index';
import AppRoot from '@/App.vue';

const pinia = createPinia();

createApp(AppRoot)
.use(pinia)
.use(router)
.mount('#app')

