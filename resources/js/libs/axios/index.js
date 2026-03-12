import axios from 'axios';

const api = axios.create({});

api.defaults.withCredentials = true;
api.defaults.withXSRFToken = true;
api.defaults.timeout = 0;

api.get('/sanctum/csrf-cookie')
    .then(() => console.log('CSRF cookie has been set'))
    .catch(error => console.error('CSRF cookie error: ', error));

export default api;
