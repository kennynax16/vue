<template>
    <v-app-bar app color="blue" flat>
        <v-toolbar-title class="d-flex align-center"></v-toolbar-title>
        <v-spacer></v-spacer>

        <template v-if="!user && isUserLoaded">
            <v-list-item>
                <router-link :to="{ name: 'register' }" class="text-decoration-none" style="color: white">
                    <v-btn icon>
                        <v-icon>mdi-account-plus</v-icon>
                    </v-btn>
                    Register
                </router-link>
            </v-list-item>

            <v-list-item>
                <router-link :to="{ name: 'login' }" class="text-decoration-none" style="color: white">
                    <v-btn icon>
                        <v-icon>mdi-login</v-icon>
                    </v-btn>
                    Login
                </router-link>
            </v-list-item>
        </template>

        <template v-if="user && isUserLoaded">
            <v-list-item>
                <router-link :to="{ name: 'dashboard' }" class="text-decoration-none" style="color: white">
                    <v-btn icon>
                        <v-icon>mdi-account-circle</v-icon>
                    </v-btn>
                    Личный кабинет
                </router-link>
            </v-list-item>

            <v-list-item>
                <router-link :to="{ name: 'login' }" @click="logout" class="text-decoration-none" style="color: white">
                    <v-btn icon>
                        <v-icon>mdi-logout</v-icon>
                    </v-btn>
                    Выход
                </router-link>
            </v-list-item>
        </template>
    </v-app-bar>
</template>

<script setup>
import { onMounted, ref, watch } from "vue";
import { useRouter } from "vue-router";
import { fetchUser, user } from "../../auth";

// Стейт для проверки загрузки данных пользователя
const isUserLoaded = ref(false);

// Инициализация роутера
const router = useRouter();

// Функция для логаута
const logout = () => {
    user.value = null; // Очистить данные о пользователе
    localStorage.removeItem("authToken"); // Удалить токен из localStorage
    router.push({ name: "login" }); // Редирект на страницу логина
};

// При монтировании компонента подгружаем данные пользователя
onMounted(async () => {
    await fetchUser(); // Получаем данные пользователя
    isUserLoaded.value = true; // Показываем сайдбар после загрузки
});

// Наблюдаем за изменениями состояния пользователя
watch(user, (newUser) => {
    if (newUser) {
        isUserLoaded.value = true;
    }
});

</script>

<style scoped>
.v-app-bar {
    display: flex !important;
    justify-content: flex-end !important; /* Позиционирование элементов на обе стороны */
}
</style>
