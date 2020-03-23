<template>
    <div class="container"><br><br>
        <button id="button-setting" class="btn btn-success rounded-circle" @click="rockClick">Rock</button>
        <button id="button-setting" class="btn btn-warning rounded-circle" @click="paperClick">Paper</button>
        <button id="button-setting" class="btn btn-primary rounded-circle" @click="scissorClick">Scissor</button>
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
#button-setting {
    width: 7vw;
    height: 8vh;
    margin: 0 15px;
}
</style>
