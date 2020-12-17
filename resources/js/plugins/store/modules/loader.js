export default {
    namespaced: true,

    state: {
        status: false
    },

    getters: {
        isLoading: state => state.status
    },

    mutations: {
        loading: state => state.status = true,
        loaded: state => state.status = false
    }
};
