<template>
    <v-navigation-drawer
        floating
        permanent
    >

        <v-list
            density="compact"
            nav
        >

            <v-list-item prepend-icon="mdi-view-dashboard" title="Магазин на Kaspi.kz"></v-list-item>
            <v-divider
                :thickness="1"
                class="border-opacity-100"
                color="gray"
                inset
            ></v-divider>
            <v-list-item prepend-icon="mdi-view-dashboard" @click.prevent
                         class="no-hover" :to="{ name: 'tag' }" link title="Возможности приложения"
                         value="home"></v-list-item>
            <v-divider
                :thickness="1"
                class="border-opacity-100"
                color="gray"
                inset
            ></v-divider>
            <v-list-item prepend-icon="mdi-view-dashboard" :to="{ name: 'tag' }" link title="THYNDERBOTKZ"
                         value="home"></v-list-item>
            <v-divider
                :thickness="1"
                class="border-opacity-100"
                color="gray"
                inset
            ></v-divider>
            <v-list-item prepend-icon="mdi-view-dashboard" :to="{ name: 'tag' }" link title="tag"
                         value="home"></v-list-item>
            <v-list-item prepend-icon="mdi-forum" :to="{ name: 'index' }" link title="main" value="main"></v-list-item>
            <v-list-item prepend-icon="mdi-forum" :to="{ name: 'contacts' }" link title="contacts"
                         value="contacts"></v-list-item>
            <v-list-item prepend-icon="mdi-forum" title="setting" value="setting"></v-list-item>

        </v-list>
    </v-navigation-drawer>
    <!--        <div class="sidebar">
            <h2 class="mdi mdi-account-group">Магазин на Kaspi.kz</h2>
            <v-divider
                :thickness="1"
                class="border-opacity-100"
                color="gray"
                inset
            ></v-divider>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <router-link class="nav-link" :to="{ name: 'tag' }" title="Возможности приложения">
                        <i class="mdi mdi-view-dashboard"></i> &lt;!&ndash; Иконка &ndash;&gt;
                        Возможности приложения
                    </router-link>
                </li>
                <v-divider
                    :thickness="1"
                    class="border-opacity-100"
                    color="gray"
                    inset
                ></v-divider>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{ name: 'tag' }" title="Дашборд">
                        <i class="mdi mdi-view-dashboard"></i> &lt;!&ndash; Иконка &ndash;&gt;
                        THUNDERBOTKZ
                    </router-link>
                </li>
                <v-divider
                    :thickness="1"
                    class="border-opacity-100"
                    color="gray"
                    inset
                ></v-divider>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{ name: 'tag' }" title="Дашборд">
                        <i class="mdi mdi-view-dashboard"></i> &lt;!&ndash; Иконка &ndash;&gt;
                        Дашборд
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{ name: 'index' }" title="О нас">
                        <i class="mdi mdi-information"></i> &lt;!&ndash; Иконка &ndash;&gt;
                        О нас
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{ name: 'contacts' }" title="Услуги">
                        <i class="mdi mdi-briefcase"></i> &lt;!&ndash; Иконка &ndash;&gt;
                        Услуги
                    </router-link>
                </li>
            </ul>
        </div>-->
    <v-app>
        <!-- Navigation Drawer -->
        <v-navigation-drawer
            app
            permanent
            width="250"
            color="grey lighten-4"
        >
            <!-- Верхняя часть меню -->
            <v-list-item>
                <v-list-item-content>
                    <v-list-item-title class="title">Магазин на Kaspi.kz</v-list-item-title>
                    <v-list-item-subtitle>Эко-система</v-list-item-subtitle>
                </v-list-item-content>
            </v-list-item>

            <v-divider></v-divider>

            <!-- Элементы бокового меню -->
            <v-list dense>
                <v-list-item link>
                    <v-list-item-icon>
                        <v-icon>mdi-apps</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Возможности приложения</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link>
                    <v-list-item-icon>
                        <v-icon>mdi-lightning-bolt</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>THUNDERBOTKZ</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link>
                    <v-list-item-icon>
                        <v-icon>mdi-cable-data</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Подключение</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link>
                    <v-list-item-icon>
                        <v-icon>mdi-check-circle</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Статусы</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link>
                    <v-list-item-icon>
                        <v-icon>mdi-cart</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Заказы</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link>
                    <v-list-item-icon>
                        <v-icon>mdi-file-document</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Документы</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link>
                    <v-list-item-icon>
                        <v-icon>mdi-package-variant</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Товары</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link>
                    <v-list-item-icon>
                        <v-icon>mdi-download</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Выгрузки</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item link>
                    <v-list-item-icon>
                        <v-icon>mdi-apps-box</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Приложения</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>

            <v-divider></v-divider>

            <!-- Выбрать магазин -->
            <v-list-item link>
                <v-list-item-icon>
                    <v-icon>mdi-store</v-icon>
                </v-list-item-icon>
                <v-list-item-content>
                    <v-list-item-title>Выбрать магазин</v-list-item-title>
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
    name: "SidebarComponent"
}
</script>

<style scoped>
body {
    overflow-x: hidden; /* Скрыть горизонтальную прокрутку */
}

.sidebar {
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    background-color: #f8f9fa;
    padding: 15px;
}

.main-content {
    margin-left: 250px; /* Отступ для основного контента */
    padding: 15px;
}
</style>
