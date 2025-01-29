<template>

   <v-app>
     <HeaderComponent></HeaderComponent>
       <SidebarComponent></SidebarComponent>
        <v-main>
            <router-view></router-view>
        </v-main>
    </v-app>


</template>

<script>
import HeaderComponent from "./layout/HeaderComponent.vue";
import SidebarComponent from "./layout/SidebarComponent.vue";



export default {
    name: "AppComponent",
    components: {SidebarComponent, HeaderComponent},


};



</script>

<style scoped>

.title {
    font-weight: bold;
    font-size: 18px;
}

.active-link {
    color: red; /* Цвет текста для активной ссылки */
    font-weight: bold; /* Жирный шрифт для активной ссылки */
    text-decoration: underline; /* Подчеркивание для активной ссылки */
}

</style>
