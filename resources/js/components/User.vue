<template>

</template>

<script>
export default {
    data: function() {
        choice: "Choosing"
    },
    mounted: function() {
        this.$root.$on('rockEvent', 'rockHandle');
        this.$root.$on('paperEvent', 'paperHandle');
        this.$root.$on('scissorEvent', 'scissorHandle');
    },
    rockEvent: function() {
        this.choice = "Rock";
        this.$root.$emit('rockEvent');
    },
    paperEvent: function() {
        this.choice = "Paper";
        this.$root.$emit('rockEvent');
    },
    scissorEvent: function() {
        this.choice = "Scissor";
        this.$root.$emit('rockEvent');
    }
}
</script>
<style scoped>

</style>
