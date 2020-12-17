import Vue from 'vue';
import Vuetify from 'vuetify';

import 'vuetify/dist/vuetify.min.css';

Vue.use(Vuetify);

const colorScheme = () => {
    switch (window.dark) {
        case 'dark':
            return true;
        case 'light':
            return false;
        default:
            return window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
    }
};

const options = {
    theme: {
        dark: colorScheme()
    }
};

export default new Vuetify(options);
