<template>
    <div class="login-container">
        <h1>Вход</h1>
        <form @submit.prevent="login" class="login-form">
            <div class="form-group">
                <label for="email">Email:</label>
                <input
                    type="email"
                    id="email"
                    v-model="email"
                    required
                    placeholder="Введите ваш email"
                />
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input
                    type="password"
                    id="password"
                    v-model="password"
                    required
                    placeholder="Введите ваш пароль"
                />
            </div>
            <button type="submit" class="btn">Войти</button>
            <p v-if="errorMessage" class="error-message">{{ errorMessage }}</p>
        </form>
    </div>
</template>

<script>
import axios from "axios";
import { user, fetchUser } from '../../auth';


export default {
    name: "LoginComponent",
    data() {
        return {
            email: "",
            password: "",
            errorMessage: "", // Для отображения ошибок
        };
    },
    methods: {
        async login() {
            try {
                const response = await axios.post("/api/login", {
                    email: this.email,
                    password: this.password,
                });



                // Сохраняем токен в localStorage
                const token = response.data.token;
                localStorage.setItem("authToken", token);

                // Настраиваем Axios для использования токена в последующих запросах
                axios.defaults.headers.common["Authorization"] = `Bearer ${token}`;

                await fetchUser(); // Получаем данные пользователя после входа


                // Перенаправляем на защищённую страницу
                this.$router.push({ name: "dashboard" });
                /*window.location.reload(); // потом исправить хуйня вышла*/

            } catch (error) {
                console.error("Ошибка при входе:", error);

                // Обработка ошибок
                this.errorMessage =
                    error.response?.data?.message || "Произошла ошибка при входе";
            }
        },
    },
};
</script>

<style scoped>
.login-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    background-color: #f9f9f9;
}

.login-form {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 15px;
}

input {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn {
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

.error-message {
    margin-top: 10px;
    color: red;
    font-size: 14px;
}
</style>
