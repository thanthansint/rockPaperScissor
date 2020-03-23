<template>
    <div>

    </div>
</template>

<script>
export default {
    data: function() {
        return {
            choice: ""
        }

    },
    mounted: function() {
        this.$root.$on('rockEvent', this.rockHandle);
        this.$root.$on('paperEvent', this.paperHandle);
        this.$root.$on('scissorEvent', this.scissorHandle);
    },
    methods: {
        rockHandle: function() {
            this.choice = "Rock";
            this.$root.$emit('rockNewEvent', this.choice);
    },
        paperHandle: function() {
            this.choice = "Paper";
            this.$root.$emit('paperNewEvent', this.choice);
    },
        scissorHandle: function() {
            this.choice = "Scissor";
            this.$root.$emit('scissorNewEvent', this.choice);
    }
    }

}
</script>
<style scoped>

</style>
