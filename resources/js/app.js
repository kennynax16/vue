import { createApp } from 'vue';
import router from './router';


import AppComponent from './components/AppComponent.vue';


import vuetify from './plugins/vuetify';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import '@mdi/font/css/materialdesignicons.css';

import './bootstrap';

// Создаем экземпляр Vue и подключаем роутер
const app = createApp(AppComponent);


var appConfig = window.appConfig || {
    accountId: "1",
    isAdmin: "No",
};
app.config.globalProperties.$appConfig = appConfig;

app.use(router);
app.use(vuetify);

app.mount('#app');





