import '@/scss/app.scss';

import Vue from 'vue';
import store from '@/js/plugins/store';
import vuetify from '@/js/plugins/vuetify';

import App from '@/vue/app.vue';

new Vue({
    store,
    vuetify,
    render: h => h(App)
}).$mount('#app');
