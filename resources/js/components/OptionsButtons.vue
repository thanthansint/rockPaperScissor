<template>
    <div>
        <button id="rock" @click="rockClick">Rock</button>
        <button @click="paperClick">Paper</button>
        <button @click="scissorClick">Scissor</button>
    </div>
</template>

<script>
export default {
    methods: {
        rockClick() {
            this.$root.$emit('rockEvent');
        },
        paperClick() {
             this.$root.$emit('paperEvent');
        },
        scissorClick() {
             this.$root.$emit('scissorEvent');
        }
    }
}
</script>
<style scoped>

</style>
