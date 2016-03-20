var Vue = require('vue');

Vue.use(require('vue-resource'));

import WebsitesList from './components/WebsitesList.vue';
import CheckBar from './components/CheckBar.vue';

new Vue({

    el: '#checker',

    components: { WebsitesList, CheckBar },

    data: function() {
        return {};
    },

    ready: function() {
        //
    }
});