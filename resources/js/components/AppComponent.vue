<template>

    <v-app>
        <!-- Navigation Drawer -->
        <v-navigation-drawer app permanent width="300" color="white">
            <!-- Верхняя часть меню -->
            <v-list-item>
                <v-list-item-content class="d-flex align-center">
                    <v-icon left>mdi-account-group</v-icon>
                    <v-list-item-content class="d-flex flex-column ml-5 mt-2 mb-3">
                        <v-list-item-title class="title">Магазин на Kaspi.kz</v-list-item-title>
                        <v-list-item-subtitle class="subtitle">Эко-система</v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item-content>
            </v-list-item>
            <v-divider></v-divider>


            <!-- Элементы бокового меню -->
            <v-list dense>
                <v-list-item link>
                    <v-list-item-content>
                        <v-list-item-title class="d-flex align-center">
                            <router-link :to="{ name: 'about' }"   class="d-flex align-center  text-black text-decoration-none">
                            <v-icon  class="mr-7" left>mdi-cog</v-icon>
                            Возможности приложения
                            </router-link>
                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-divider></v-divider>

                <v-list-item link>
                    <v-list-item-content>
                        <v-list-item-title class="d-flex align-center">
                            <router-link :to="{ name: 'index' }"   active-class="active-link"  class="d-flex align-center  text-black text-decoration-none">
                                <v-icon class="mr-7" left>mdi-bag-checked</v-icon>
                                INDEX
                            </router-link>
                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-divider></v-divider>
                <v-list-item-subtitle class="mt-4 mb-3">Настройки</v-list-item-subtitle>
                <v-list-item link>

                    <v-list-item-content>
                        <v-list-item-title class="d-flex align-center ">
                            <router-link :to="{ name: 'tag' }"   class="d-flex align-center  text-black text-decoration-none">
                                <v-icon   class="mr-8" left>mdi-cable-data</v-icon>
                                TAG
                            </router-link>

                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link>

                    <v-list-item-content>
                        <v-list-item-title class="d-flex align-center">
                            <router-link :to="{ name: 'contacts' }"   class="d-flex align-center  text-black text-decoration-none">
                                <v-icon class="mr-8" left>mdi-check-circle</v-icon>
                                CONTACTS
                            </router-link>

                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link>

                    <v-list-item-content>
                        <v-list-item-title parent-icon="mdi-cart" class="d-flex align-center">
                            <v-icon class="mr-8" left>mdi-cart</v-icon>
                            #
                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link>

                    <v-list-item-content>
                        <v-list-item-title class="d-flex align-center">
                            <v-icon class="mr-8" left>mdi-file-document</v-icon>
                            #
                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link>

                    <v-list-item-content>
                        <v-list-item-title class="d-flex align-center">
                            <v-icon class="mr-8" left>mdi-package-variant</v-icon>
                            #
                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link>

                    <v-list-item-content>
                        <v-list-item-title class="d-flex align-center">
                            <v-icon class="mr-8" left>mdi-download</v-icon>
                            #
                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link>

                    <v-list-item-content>
                        <v-list-item-title class="d-flex align-center">
                            <v-icon class="mr-8" left>mdi-apps-box</v-icon>
                            #
                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>

            <v-divider></v-divider>

            <!-- Выбрать магазин -->
            <v-list-item link>

                <v-list-item-content>
                    <v-list-item-title class="d-flex align-center">
                        <v-icon class="mr-8" left>mdi-store</v-icon>
                        #
                    </v-list-item-title>
                </v-list-item-content>
            </v-list-item>
        </v-navigation-drawer>

        <v-main>
            <router-view></router-view>
        </v-main>
    </v-app>


</template>

<script>
export default {
    name: "AppComponent"
}
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
