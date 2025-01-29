<template>
    <!-- Header -->
    <v-app-bar app color="blue" flat>
        <v-toolbar-title class="d-flex align-center">
            <!-- Ваш контент -->
        </v-toolbar-title>
        <v-spacer></v-spacer>
        <v-list-item>
            <router-link :to="{ name: 'register' }" class="text-decoration-none">
                <v-btn icon>
                    <v-icon>mdi-account-plus</v-icon>
                </v-btn>
                Register
            </router-link>
        </v-list-item>
        <v-list-item>
            <router-link :to="{ name: 'login' }" class="text-decoration-none">
                <v-btn icon>
                    <v-icon>mdi-login</v-icon>
                </v-btn>
                Login
            </router-link>
        </v-list-item>
    </v-app-bar>
</template>



<script setup>

</script>



<style scoped>
.v-app-bar {
    display: flex!important;
    justify-content: flex-end!important; /* Позиционирование элементов на обе стороны */
}

</style>
