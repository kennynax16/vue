import { createRouter, createWebHistory } from 'vue-router';


const routes = [
    {

        path: '/index/:id',  // Используем строку для пути
        component: () => import('./components/ShowComponent.vue'),
        name: 'show',

    },
    {

        path: '/index',  // Используем строку для пути
        component: () => import('./components/IndexComponent.vue'),
        name: 'index',

    },

    {
        path: '/tag',  // Используем строку для пути
        component: () => import('./components/TagComponent.vue'),
        name: 'tag',

    },
    {
        path: '/contacts',  // Используем строку для пути
        component: () => import('./components/ContactsComponent.vue'),
        name: 'contacts',

    },
    {
        path: '/about',  // Используем строку для пути
        component: () => import('./components/AboutComponent.vue'),
        name: 'about',

    }


];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
