<template>

    <v-container>
        <v-row>
            <card-component v-for="item in cards" :item="item"></card-component>
            <v-btn @click="getProduct(prevPage)" :disabled="!prevPage">Назад</v-btn>
            <v-btn @click="getProduct(nextPage)" :disabled="!nextPage">Вперёд</v-btn>




        </v-row>
    </v-container>
</template>


<script>
import CardComponent from "./CardComponent.vue";
import ShowComponent from "./ShowComponent.vue";

import axios from "axios";
import SidebarComponent from "../layout/SidebarComponent.vue";

export default {
    name: "IndexComponent",

    components: {
        SidebarComponent,
        CardComponent,
        ShowComponent

    },

    data() {
        return {
            cards: null,
            nextPage: null,  // Ссылка на следующую страницу
            prevPage: null   // Ссылка на предыдущую страницу

        }
    },

    mounted() {
        this.getProduct()
    },
    methods: {
        getProduct(url = "/api/card/get") {
            axios.get(url).then(res => {
                this.cards = res.data.data; // Данные карточек
                this.nextPage = res.data.next_page_url; // Ссылка на следующую страницу
                this.prevPage = res.data.prev_page_url; // Ссылка на предыдущую страницу
            }).catch(error => {
                console.error("Ошибка загрузки данных:", error);
            });
        }
    }

}
</script>

<style scoped>

</style>
