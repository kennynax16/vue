<template>
    <v-container>
        <v-row>
            <card-component v-for="item in card" :item="item"></card-component>
        </v-row>
    </v-container>
</template>


<script>
import CardComponent from "./CardComponent.vue";
import ShowComponent from "./ShowComponent.vue";

import axios from "axios";

export default {
    name: "IndexComponent",

    components: {
        CardComponent,
        ShowComponent

    },

    data() {
        return {
            card: null,

        }
    },

    mounted() {
        this.getProduct()
    },
    methods: {
        getProduct() {
            axios.get('/api/card/get')
                .then(res => {
                    this.card = res.data
                })
        },
    }

}
</script>

<style scoped>

</style>
