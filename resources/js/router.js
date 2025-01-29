import { createRouter, createWebHistory } from 'vue-router';
import axios from 'axios';

const routes = [
    {
        path: '/index/:id',
        component: () => import('./components/Card/ShowComponent.vue'),
        name: 'show',
        meta: { requiresAuth: true },
    },
    {
        path: '/index',
        component: () => import('./components/Card/IndexComponent.vue'),
        name: 'index',
        meta: { requiresAuth: true },
    },
    {
        path: '/tag',
        component: () => import('./components/TagComponent.vue'),
        name: 'tag',
        meta: { requiresAuth: true },
    },
    {
        path: '/contacts',
        component: () => import('./components/ContactsComponent.vue'),
        name: 'contacts',
    },
    {
        path: '/about',
        component: () => import('./components/AboutComponent.vue'),
        name: 'about',
    },
    {
        path: '/register',
        component: () => import('./components/pages/RegisterComponent.vue'),
        name: 'register',
    },
    {
        path: '/login',
        component: () => import('./components/pages/LoginComponent.vue'),
        name: 'login',
    },
    {
        path: '/dashboard',
        component: () => import('./components/pages/Dashboard.vue'),
        name: 'dashboard',
        meta: { requiresAuth: true },
    },
    {
        path: '/sidebar',
        component: () => import('./components/layout/SidebarComponent.vue'),
        name: 'sidebar',
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach(async (to, from, next) => {
    if (to.meta.requiresAuth) {
        const token = localStorage.getItem('authToken');

        if (!token) {
            next({ name: 'login' }); // Если токена нет, перенаправляем на страницу логина
            return;
        }

        try {
            // Проверяем авторизацию на бэкенде
            await axios.get('/api/protected', {
                headers: {
                    Authorization: `Bearer ${token}`,
                },
            });
            next(); // Переходим на защищённый маршрут
        } catch (error) {
            console.error('Unauthorized:', error);
           // localStorage.removeItem('authToken'); // Удаляем токен
            next({ name: 'login' }); // Перенаправляем на логин
        }
    } else {
        next(); // Если маршрут не защищён, продолжаем
    }
});

export default router;

