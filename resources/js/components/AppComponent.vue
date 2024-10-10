<template>

<!--    <v-app>
        &lt;!&ndash; Navigation Drawer &ndash;&gt;
        <v-navigation-drawer app permanent width="300" color="white">
            &lt;!&ndash; Верхняя часть меню &ndash;&gt;
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


            &lt;!&ndash; Элементы бокового меню &ndash;&gt;
            <v-list dense>
                <v-list-item  :to="{ name: 'about' }" link>
                    <v-list-item-content>
                        <v-list-item-title class="d-flex align-center">

                            <v-icon  class="mr-7" left>mdi-cog</v-icon>
                            Возможности приложения

                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-divider></v-divider>

                <v-list-item :to="{ name: 'index' }" link>
                    <v-list-item-content>
                        <v-list-item-title class="d-flex align-center">

                                <v-icon class="mr-7" left>mdi-bag-checked</v-icon>
                                INDEX

                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-divider></v-divider>
                <v-list-item-subtitle class="mt-4 mb-3">Настройки</v-list-item-subtitle>
                <v-list-item :to="{ name: 'tag' }" link>

                    <v-list-item-content>
                        <v-list-item-title class="d-flex align-center ">

                                <v-icon   class="mr-8" left>mdi-cable-data</v-icon>
                                TAG


                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item  :to="{ name: 'contacts' }" link>

                    <v-list-item-content>
                        <v-list-item-title class="d-flex align-center">

                                <v-icon class="mr-8" left>mdi-check-circle</v-icon>
                                CONTACTS


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

            &lt;!&ndash; Выбрать магазин &ndash;&gt;
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
    </v-app>-->
<router-view></router-view>

</template>

<script>
export default {
    name: "AppComponent",


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
