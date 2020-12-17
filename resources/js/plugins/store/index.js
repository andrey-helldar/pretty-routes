import Vue from 'vue';
import Vuex from 'vuex';

import loader from '@/js/plugins/store/modules/loader';
import table from '@/js/plugins/store/modules/table';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        loader,
        table
    }
});
