<template>
    <v-navigation-drawer v-if="isUserLoaded && user" app permanent width="300">
        <v-list>
            <v-list-item>
                <v-icon left>mdi-account-group</v-icon>
                <v-list-item-title>Магазин на Kaspi.kz</v-list-item-title>
                <v-list-item-subtitle>Эко-система</v-list-item-subtitle>
            </v-list-item>

            <v-divider></v-divider>

            <v-list-item :to="{ name: 'about' }" link>
                <v-icon class="mr-7" left>mdi-cog</v-icon>
                <v-list-item-title>Возможности приложения</v-list-item-title>
            </v-list-item>

            <v-divider></v-divider>

            <v-list-item :to="{ name: 'index' }" link>
                <v-icon class="mr-7" left>mdi-bag-checked</v-icon>
                <v-list-item-title>INDEX</v-list-item-title>
            </v-list-item>

            <v-divider></v-divider>

            <v-list-subheader>Настройки</v-list-subheader>

            <v-list-item :to="{ name: 'tag' }" link>
                <v-icon class="mr-8" left>mdi-cable-data</v-icon>
                <v-list-item-title>TAG</v-list-item-title>
            </v-list-item>

            <v-list-item :to="{ name: 'contacts' }" link>
                <v-icon class="mr-8" left>mdi-check-circle</v-icon>
                <v-list-item-title>CONTACTS</v-list-item-title>
            </v-list-item>

            <v-divider></v-divider>

            <v-list-item link>
                <v-icon class="mr-8" left>mdi-store</v-icon>
                <v-list-item-title>Выбрать магазин</v-list-item-title>
            </v-list-item>
        </v-list>
    </v-navigation-drawer>
</template>


<script>
import { user, fetchUser } from '../../auth';

import { onMounted, watch, ref } from 'vue';


export default {
    name: "SidebarComponent",
    setup() {

        const isUserLoaded = ref(false);
        // При монтировании компонента подгружаем данные пользователя
        onMounted(async () => {
            await fetchUser(); // Получаем данные пользователя
            isUserLoaded.value = true; // Показываем сайдбар после загрузки
        });

        watch(user, (newUser) => {
            if (newUser) {
                isUserLoaded.value = true;
            }
        });

        return {
            user,
            isUserLoaded
        };
    },

};
</script>

<style scoped>
body {
    overflow-x: hidden; /* Скрыть горизонтальную прокрутку */
}

.sidebar {
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    background-color: #f8f9fa;
    padding: 15px;
}

.main-content {
    margin-left: 250px; /* Отступ для основного контента */
    padding: 15px;
}
</style>
