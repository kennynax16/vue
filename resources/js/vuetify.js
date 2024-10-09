// plugins/vuetify.js
import { createVuetify } from 'vuetify';
import 'vuetify/styles';  // Важно импортировать стили Vuetify
import { aliases, mdi } from 'vuetify/iconsets/mdi';  // Импорт иконок, если нужно

export default createVuetify({
    theme: {
        defaultTheme: 'light', // Выбор темы (можно заменить на dark)
    },
    icons: {
        defaultSet: 'mdi',
        aliases,
        sets: {
            mdi,
        },
    },
});
