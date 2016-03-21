<template>

    <div class="col s12 offset-s0 m6 offset-m3 l6 offset-l3">
        <br>
        <div class="card-panel">
            <div class="row center">
                <h4 class="light-blue-text light truncate">{{ website.website.name }}</h4><br>
                <div v-bind:class="{ 'online': website.online, 'offline': !website.online}"></div>
                <div class="grey-text lighten-1">
                    <br>
                    <h5 class="green-text lighten-1 light" v-show="website.online">This website is online.</h5>
                    <h5 class="red-text lighten-1 light" v-show="!website.online">This website is offline.</h5>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {

    props: ['website'],

    data: function() {
        return {};
    }
}
</script>