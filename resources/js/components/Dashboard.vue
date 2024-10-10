<template>
    <div>
        <h1>Dashboard</h1>
        <button @click="logout">Logout</button>
        <div v-if="user">
            <h2>Welcome, {{ user.firstname }}!</h2>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            user: null,
        };
    },
    created() {
        this.getUser();
    },
    methods: {
        getUser() {
            axios.get('/api/card/user')
                .then(response => {
                    this.user = response.data;
                })
                .catch(error => {
                    console.error(error.message);
                    /*this.$router.push('/login');*/
                });
        },
        logout() {
            axios.post('/api/card/logout')
                .then(response => {
                    localStorage.removeItem('user');

                    this.$router.push('/login');
                })
                .catch(error => {
                    console.error(error);
                });
        },
    },
};
</script>
