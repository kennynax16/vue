// src/auth.js
import { ref } from 'vue';
import axios from 'axios';


// Реактивная переменная пользователя
export const user = ref(null);


const token = localStorage.getItem("authToken");
if (token) {
    axios.defaults.headers.common["Authorization"] = `Bearer ${token}`;
}

// Функция получения текущего пользователя
export const fetchUser = async () => {
    try {
        const response = await axios.get('/api/protected');
        user.value = response.data; // Записываем данные пользователя
    } catch {
        user.value = null;
    }
};

// Функция для выхода из системы
export const logout = async () => {
    try {
        // Отправляем запрос на сервер для завершения сессии
        await axios.post('/logout');

        // Очистка данных пользователя и локального хранилища
        user.value = null;
        localStorage.removeItem('authToken'); // Удаляем токен из localStorage
        delete axios.defaults.headers.common["Authorization"]; // Удаляем заголовок авторизации
    } catch (error) {
        console.error("Ошибка при выходе:", error);
    }
};
