<template>
    <v-col justify="center" align="center" cols="12" sm="6" md="4" class="pa-2">
        <v-card class=" mx-2 my-2 d-flex flex-column  custom-rounded-shadow-card " width="20rem">
            <v-card-title class="custom-title">{{ item.name }}</v-card-title>
            <v-divider
                :thickness="4"
                class="castom_opacity-100 "
            ></v-divider>
            <v-img class="custom-img" :src="`${item.urlPhoto}`"></v-img>
            <v-card-actions class="text-center ">
                <button  @click="editProduct(item.id)" class="btn btn-dark btn-lg" style="width: 100%">
                    Изменить
                </button>
            </v-card-actions>
        </v-card>
    </v-col>
</template>

<script>
import router from "../router";
import {th} from "vuetify/locale";


export default {
    name: 'CardComponent',

    data() {
        return {
            card: null,
        }
    },

    props: [
        'item'
    ],


    methods: {
        editProduct(id) {
            this.$router.push({ name: 'show', params: {  id: id} }); // Переход к компоненту редактирования
        },
    }
}
</script>

<style>

</style>
