import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';

import { createApp } from 'vue';
import { createPinia } from 'pinia';
import router from '@/router/index';
//import '../css/theme.css';
import App from '@/App.vue';

const pinia = createPinia();
createApp(App)
.use(router)
.use(pinia)
.mount('#app');
