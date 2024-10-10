
    <template>
        <v-sheet class="pa-12" rounded>
            <v-card class="mx-auto px-6 py-8" max-width="400">
                <h1 class="text-h5 text-center mb-4">Login</h1>
                <v-form @submit.prevent="login">
                    <v-text-field
                        v-model="email"
                        label="Email"
                        outlined
                        required
                    ></v-text-field>

                    <v-text-field
                        v-model="password"
                        label="Password"
                        type="password"
                        outlined
                        required
                    ></v-text-field>

                    <v-btn
                        color="primary"
                        size="large"
                        type="submit"
                        class="mt-4"
                    >
                        Login
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
            email: '',
            password: '',
        };
    },
    methods: {
        login() {
            axios.post('/api/login', {
                email: this.email,
                password: this.password,
            })
                .then(response => {
                    localStorage.setItem('user', JSON.stringify(response.data));
                    this.$router.push('/dashboard');
                })
                .catch(error => {
                    console.error(error);
                });
        },
    },
};
</script>
