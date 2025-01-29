<template>
    <div class="custom-container">
        <v-card class="main-card bordered-card strong-shadow mb-5 mt-5" style="border-radius: 30px;">
            <v-card-title class="text-center bordered-text strong-shadow mb-3 pa-3">
                <h2 v-if="product">{{ product.name }}</h2>
            </v-card-title>
            <div class="image-container mb-5">
                <v-img v-if="product" max-width="100%" :src="`${product.urlPhoto}`"></v-img>
            </div>
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
                >Изменить описание
                </button>
            </div>

            <v-form ref="form" v-model="formValid">
                <v-text-field
                    v-if="showNameInput"
                    v-model="name"
                    class="custom-input "
                    label="Новое название"
                    outlined
                ></v-text-field>
                <v-textarea
                    v-if="showDescriptionInput"
                    v-model="description"
                    class="custom-input text-center"
                    label="Новое описание"
                    outlined
                ></v-textarea>
                <v-file-input
                    v-if="showPhotoInput"
                    v-model="imageFile"
                    label="Выберите изображение"
                    outlined
                ></v-file-input>
                <v-btn
                    :disabled="!formValid"
                    @click="updateProduct"
                    color="primary"
                    style="width: 100%"
                    class="mt-4"
                >
                    Сохранить изменения
                </v-btn>
            </v-form>
        </v-card>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "ShowComponent",
    data() {
        return {
            product: null,
            name: "",
            description: "",
            imageFile: null,
            formValid: true,
            showNameInput: false, // Для отображения поля ввода названия
            showDescriptionInput: false, // Для отображения поля ввода описания
            showPhotoInput: false, // Для отображения поля ввода картинки
        };
    },
    mounted() {
        this.getProduct();
    },
    methods: {
        async getProduct() {
            try {
                const { data } = await axios.get(`/api/card/get/${this.$route.params.id}`);
                this.product = data;
                this.name = data.name;
                this.description = data.description;
            } catch (error) {
                console.error("Ошибка при получении данных о продукте:", error);
            }
        },
        async updateProduct() {
            try {
                const formData = new FormData();
                formData.append("name", this.name);
                formData.append("description", this.description);
                if (this.imageFile) {
                    formData.append("urlPhoto", this.imageFile);
                }

                const response = await axios.post(`/api/card/update/${this.product.id}`, formData, {
                    headers: { "Content-Type": "multipart/form-data" },
                });

                this.product = response.data.card;
                alert("Продукт успешно обновлен!");
            } catch (error) {
                console.error("Ошибка при обновлении продукта:", error);
            }
        },
    },
};
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

    width: 95%!important; /* Контролирует ширину поля ввода */
    padding-bottom: 15px!important; /* Отступ снизу для лучшего оформления */

}
.v-form {
    width: 95%!important;

}




</style>
