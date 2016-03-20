<template>
    <div class="row website-url">
        <div class="input-field col s12 m8 l8 offset-m2 offset-l2">
            <input id="website-url" class="validate" required v-model="website" type="text" @keyup.enter="checkWebsite">
            <label for="website-url">{{ placeholder }}</label>
            <div v-show="error" class="card-panel red lighten-1 white-text">{{ error }}</div>
        </div>
        <status v-if="website_response && !error" :website="website_response"></status>
    </div>
</template>

<script>
    import Status from '../components/Status.vue';

    export default {

        components: {
            status: Status
        },

        data: function() {
            return {
                placeholder: 'Website url',
                website: '',
                website_response: false,
                error: false
            }
        },

        methods: {
            checkWebsite: function() {

                var postData = {
                    website: this.$get('website'),
                    _token: $('#token').attr('token')
                };

                var vm = this;
                this.$http.post('/api/check-website', postData).then(function(response) {
                    vm.error = false;
                    vm.website_response = response.data;
                }, function(error) {
                    vm.error = error.data.website;
                });
            }
        }
    }
</script>