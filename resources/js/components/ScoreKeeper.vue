<template>
<div>
    <h2>{{ computerChoice }}</h2>
    <h2>{{ userChoice }}</h2>
</div>
</template>

<script>
export default {
    data: function() {
        return {
            computerChoice: "something",
            userChoice: "something"
        }
    },
    mounted: function() {
        this.$root.$on('rockEvent', this.handleEvent);
        this.$root.$on('paperEvent', this.handleEvent);
        this.$root.$on('scissorEvent', this.handleEvent);
        this.$root.$on('gameEvent', this.handleEvent);
    },
    methods: {
        handleEvent: function() {

        }
    }


}
</script>
<style scoped>

</style>
