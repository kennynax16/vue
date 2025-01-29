<template>
    <v-container class="mt-5">
        <v-card>
            <v-card-title>Регистрация</v-card-title>
            <v-card-text>
                <v-form @submit.prevent="register">
                    <v-text-field v-model="name" label="Имя" required></v-text-field>
                    <v-text-field v-model="email" label="Email" type="email" required></v-text-field>
                    <v-text-field v-model="password" label="Пароль" type="password" required></v-text-field>
                    <v-text-field v-model="password_confirmation" label="Подтвердите пароль" type="password" required></v-text-field>
                    <v-btn type="submit" color="primary" class="mt-3">Зарегистрироваться</v-btn>
                </v-form>
            </v-card-text>
        </v-card>
    </v-container>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
        };
    },
    methods: {
        async register() {
            try {
                const response = await axios.post('/api/register', {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation,
                });

                // Сохраняем токен в localStorage
                localStorage.setItem('authToken', response.data.token);

                // Перенаправляем на защищенную страницу
                this.$router.push('/dashboard');
            } catch (error) {
                console.error(error.response.data.message || 'Ошибка регистрации');
            }
        },
    },
};
</script>
