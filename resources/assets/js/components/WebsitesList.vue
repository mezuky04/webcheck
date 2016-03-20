<template>
    <h4 class="grey-text light center">{{ title }}</h4>
    <div class="collection">
        <a v-for="website in websites" href="#" class="collection-item blue-text">
            {{ website.name }}
            <span class="secondary-content blue-text"><i class="material-icons left">visibility</i>{{ website.checks }}</span>
        </a>
    </div>
</template>

<script>
    export default {

        props: ['type'],

        data: function() {
            return {
                title: '',
                websites: []
            }
        },

        created: function() {

            if (this.type === 'most-checked') {
                this.getMostCheckedWebsites();
            }
        },

        methods: {
            getMostCheckedWebsites: function() {

                var vm = this;

                this.$http.get('/api/get-most-checked-websites').then(function(response) {
                    vm.title = 'Most checked websites';
                    vm.websites = response.data;
                }, function(error) {

                });

            }
        }
    }
</script>