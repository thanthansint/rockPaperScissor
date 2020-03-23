<template>
<div class="container">
    <div class="row">
        <div class="col-sm-2"><br><br>
            <h4 class="text-primary font-weight-bold text-center">User</h4>
        </div>
        <div class="col-sm-2"><br><br>
            <h4 class="text-primary font-weight-bold text-center">Computer</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1" id="icon-setting"><br><br>
            <i v-if="userChoice=='Scissor'" class="fas fa-hand-scissors fa-3x"></i>
            <i v-if="userChoice=='Paper'" class="fas fa-hand-paper fa-3x"></i>
            <i v-if="userChoice=='Rock'" class="fas fa-hand-rock fa-3x"></i>
        </div>
        <div class="col-sm-2" id="icon-setting"><br><br>
            <i v-if="computerChoice=='Scissor'" class="fas fa-hand-scissors fa-3x"></i>
            <i v-if="computerChoice=='Paper'" class="fas fa-hand-paper fa-3x"></i>
            <i v-if="computerChoice=='Rock'" class="fas fa-hand-rock fa-3x"></i>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2"><br><br>
            <h5 class="text-success font-weight-bold text-center">{{ userChoice }}</h5>
        </div>
        <div class="col-sm-2"><br><br>
            <h5 class="text-success font-weight-bold text-center">{{ computerChoice }}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2"><br><br>
            <h5 class="text-danger font-weight-bold text-center">{{ userScore }}</h5>
        </div>
        <div class="col-sm-2"><br><br>
            <h5 class="text-danger font-weight-bold text-center">{{ computerScore }}</h5>
        </div>
    </div>
    <br><br>
    <h2 v-if="userScore == 10" class="text-primary font-weight-bold" id="icon-setting">{{ winner }}</h2>
    <h2 v-if="computerScore == 10" class="text-danger font-weight-bold" id="icon-setting">{{ winner }}</h2>
</div>
</template>

<script>
export default {
    data: function() {
        return {
            computerChoice: "",
            userChoice: "",
            computerScore: 0,
            userScore: 0,
            winner: ""
        }
    },
    mounted: function() {
        this.$root.$on('rockNewEvent', this.handleEvent);
        this.$root.$on('paperNewEvent', this.handleEvent);
        this.$root.$on('scissorNewEvent', this.handleEvent);
        this.$root.$on('computerEvent', this.computerHandle);
    },
    methods: {
        handleEvent: function(type1) {
            this.userChoice = type1;
            this.$root.$emit('gameEvent');
        },
        computerHandle: function(type2) {
            this.computerChoice = type2;
            if (this.userScore < 10 && this.computerScore < 10) {
                if (this.userChoice == "Rock"){
                if (this.computerChoice == "Paper") {
                    this.computerScore +=1;
                } else if (this.computerChoice == "Scissor"){
                    this.userScore +=1;
                }
            }
            if (this.userChoice == "Paper")
                if (this.computerChoice == "Scissor") {
                    this.computerScore +=1;
                }else if (this.computerChoice == "Rock"){
                    this.userScore +=1;
                }
            if (this.userChoice == "Scissor")
                if (this.computerChoice == "Rock") {
                    this.computerScore +=1;
                }else if (this.computerChoice == "Paper"){
                    this.userScore +=1;
                }
            } else if (this.userScore==10) {
                this.winner = "CONGRATULATIONS! You are WINNER!";
            } else if (this.computerScore==10) {
                this.winner = "Sorry! You lose!";
            }
        }
    }
}
</script>
<style scoped>
#icon-setting {
    margin-left: 5vw;
}
</style>
