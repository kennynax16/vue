<template>
    <v-sheet class="pa-12" rounded>
        <v-card class="mx-auto px-6 py-8" max-width="400">
            <h1 class="text-h5 text-center mb-4">Register</h1>
            <v-form @submit.prevent="register">
                <v-text-field
                    v-model="firstname"
                    label="First Name"
                    outlined
                ></v-text-field>

                <v-text-field
                    v-model="lastname"
                    label="Last Name"
                    outlined
                ></v-text-field>

                <v-text-field
                    v-model="email"
                    label="Email"
                    outlined
                ></v-text-field>

                <v-text-field
                    v-model="password"
                    label="Password"
                    type="password"
                    outlined
                ></v-text-field>

                <v-btn
                    color="success"
                    size="large"
                    type="submit"
                    class="mt-4"
                >
                    Register
                </v-btn>
            </v-form>
        </v-card>
    </v-sheet>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            firstname: '',
            lastname: '',
            email: '',
            password: '',
        };
    },
    methods: {
        register() {
            axios.post('/api/card/register', {
                firstname: this.firstname,
                lastname: this.lastname,
                email: this.email,
                password: this.password,
            })
                .then(response => {
                    alert(response.data.message);
                    this.$router.push('/login');
                })
                .catch(error => {
                    console.error(error);
                });
        },
    },
};
</script>
