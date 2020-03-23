<template>
    <div>

    </div>
</template>

<script>
export default {
    data: function(){
        return {
            computerChoice: ""
        }
    },
    mounted: function(){
        this.$root.$on('gameEvent', this.gamePlay);
    },
    methods: {
        gamePlay: function() {
                axios.get("/game-play")
                .then(
                    response => { this.computerChoice = response.data.computerChoice;                   
                    this.$root.$emit('computerEvent', this.computerChoice);
                    })
                .catch(error => {
                    this.computerChoice = "Error";
                });

            },


    }
}
</script>
<style scoped>

</style>
