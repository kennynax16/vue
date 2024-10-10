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

    },
    {
        path: '/register',  // Используем строку для пути
        component: () => import('./components/RegisterComponent.vue'),
        name: 'register',

    },
    {
        path: '/login',  // Используем строку для пути
        component: () => import('./components/LoginComponent.vue'),
        name: 'login',

    },

    {
        path: '/dashboard',  // Используем строку для пути
        component: () => import('./components/Dashboard.vue'),
        name: 'dashboard',

    }


];

const router = createRouter({
    history: createWebHistory(),
    routes,
});


router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth && !localStorage.getItem('user')) {
        next({ path: '/login' });
    } else {
        next();
    }
});
export default router;
