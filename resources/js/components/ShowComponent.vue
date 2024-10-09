<template>
    <div class="custom-container">
        <v-card class="main-card  bordered-card strong-shadow mb-5 mt-5 " style="border-radius: 30px;">
            <!-- Заголовок карточки -->
            <v-card-title class="text-center bordered-text strong-shadow mb-3 pa-3">
                <h2 v-if="product">
                    {{
                        product.name
                    }}
                </h2>
            </v-card-title>
            <!-- Картинка -->
            <div class="image-container mb-5">
                <v-img v-if="product" max-width="100%"
                       :src="`${product.urlPhoto}`"></v-img>
            </div>
            <!-- Текст описания -->
            <v-card-text v-if="product" class="bordered-text custom-width strong-shadow text-center">
                {{ product.description }}
            </v-card-text>
        </v-card>
        <v-card class="main-card bordered-card strong-shadow mb-5" style="border-radius: 30px;">
            <div class="button-container pa-3 mb-5">
                <button @click="showNameInput = !showNameInput"
                        :class="showNameInput ? 'btn-false strong-shadow py-2 px-5' : 'btn strong-shadow py-2 px-5' "
                >Изменить название
                </button>
                <button @click="showPhotoInput = !showPhotoInput"
                        :class="showPhotoInput ? 'btn-false strong-shadow py-2 px-5' : 'btn strong-shadow py-2 px-5' "
                >Изменить картинку
                </button>
                <button @click="showDescriptionInput = !showDescriptionInput"
                        :class="showDescriptionInput ? 'btn-false strong-shadow py-2 px-5' : 'btn strong-shadow py-2 px-5' "
                >Изменить название
                </button>
            </div>
            <!-- Поля ввода -->
            <v-text-field
                v-if="showNameInput"
                v-model="name"
                class="custom-input"
                label="Введите новое название"
                outlined
            ></v-text-field>

            <v-text-field
                v-if="showDescriptionInput"
                v-model="description"
                class="custom-input "
                label="Введите новое описание"
                outlined
            ></v-text-field>

            <!-- Инпут для загрузки файла -->

            <v-file-input v-model="imageFile" v-if="showPhotoInput" prepend-icon="mdi mdi-ab-testing"
                          append-icon="mdi mdi-ab-testing"
                          base-color="info"
                          style="width: 100%" label="File input"
            ></v-file-input>
            <v-btn v-if="showNameInput || showDescriptionInput || showPhotoInput"
                   @click.prevent="UpdateProduct(product.id)"
                   color="primary" style="width: 95%" class="mt-4 mb-3">
                Сохранить
            </v-btn>


        </v-card>
    </div>
</template>
<script>

export default {
    name: "ShowComponent",

    data() {
        return {
            product: null, // Здесь будут данные о товаре
            name: '', // Для нового названия
            description: '', // Для нового описания
            imageFile: null,
            /* urlPhoto: null, // Для загрузки файла*/
            showNameInput: false, // Для отображения поля ввода названия
            showDescriptionInput: false, // Для отображения поля ввода описания
            showPhotoInput: false, // Для отображения поля ввода картинки
        };
    },

    mounted() {
        this.getProduct() //для вывода конкретной карточки
    },
    methods: {
        getProduct() {
            axios.get(`/api/card/get/${this.$route.params.id}`) // Запрос к API для получения данных
                .then(res => {
                    this.product = res.data; // Сохраняем данные о товаре
                    this.name = this.product.name; // Заполнение поля названия
                    this.description = this.product.description; // Заполнение поля описания
                })
                .catch(error => {
                    console.error('Ошибка при получении данных о товаре:', error);

                });
        },

        UpdateProduct(id) {
            console.log("Name:", this.name);
            console.log("Description:", this.description);
            console.log("Image File:", this.imageFile);

            const formData = new FormData();
            formData.append('name', this.name);
            formData.append('description', this.description);

            if (this.imageFile) {
                formData.append('file', this.imageFile);
            }

            /*console.log('=============================')
            console.log(formData)*/

            axios.put(`/api/card/put/${id}`, formData, {
                headers: {
                    'Content-Type': 'multipart/form-data', // Указываем заголовок
                }
            })
                .then(res => {
                    alert('Данные успешно обновлены!');
                    console.log('=============================')
                    console.log(res)
                    this.getProduct(); // Обновляем информацию о продукте после успешного обновления
                })
                .catch(error => {
                    if (error.response && error.response.status === 422) {
                        console.error("Validation errors:", error.response.data.errors);
                    } else {
                        console.error("An error occurred:", error.message);
                    }
                });
        }

    }
}

</script>

<style scoped>
.custom-container {
    margin: 0 auto !important;
    width: 70% !important;
}

/* Основная карточка */
.main-card {
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    flex-direction: column !important;
    padding: 20px;
}

/* Изображение */
.image-container {
    width: 95%;

}

img {
    width: 95% !important;
    border-radius: 40px !important;
}

/* Текст внутри карточки */
.bordered-text {
    width: 95% !important;
    border-radius: 15px !important;

    /*padding: 10px !important; !* Отступы внутри рамки *!*/
}


/* Сильная тень */
.strong-shadow {
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5) !important; /* Настройка сильной тени */
}

/* Центрирование текста */
.text-center {
    text-align: center;
}


.button-container {
    display: flex; /* Устанавливает Flexbox */
    justify-content: space-between; /* Разделяет кнопки на равное расстояние */
    width: 100%; /* Контейнер займет всю ширину */
    /*  padding: 10px; !* Отступы внутри контейнера *!*/
}

.btn {
    /*   padding: 10px 20px; !* Отступы внутри кнопок *!*/
    background-color: white; /* Цвет фона кнопок */

    border-radius: 20px; /* Скругляем углы */
    cursor: pointer; /* Иконка указателя при наведении */
}


.btn-false {
    /*   padding: 10px 20px; !* Отступы внутри кнопок *!*/
    background-color: green; /* Цвет фона кнопок */
    color: white;

    border-radius: 20px; /* Скругляем углы */
    cursor: pointer; /* Иконка указателя при наведении */
}

.custom-input {
    width: 95%;
}
</style>
