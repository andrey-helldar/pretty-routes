export default {
    namespaced: true,

    state: {
        headers: [
            { text: window.trans.priority, sortable: true, value: 'priority' },
            { text: window.trans.methods, sortable: true, value: 'methods' },
            { text: window.trans.domain, sortable: true, value: 'domain' },
            { text: window.trans.path, sortable: true, value: 'path' },
            { text: window.trans.name, sortable: true, value: 'name' },
            { text: window.trans.module, sortable: true, value: 'module' },
            { text: window.trans.action, sortable: true, value: 'action' },
            { text: window.trans.middlewares, sortable: true, value: 'middlewares' }
        ],

        badges: {
            GET: 'green darken-1',
            HEAD: 'grey darken-1',
            POST: 'blue darken-1',
            PUT: 'orange darken-1',
            PATCH: 'cyan lighten-1',
            DELETE: 'red darken-1',
            OPTIONS: 'lime darken-1'
        }
    },

    getters: {
        headers: state => state.headers,
        badges: state => state.badges
    }
};
