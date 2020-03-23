<template>
    <div>
        <User/>
        <Computer/>
        <OptionsButtons/>
        <ScoreKeeper/>
    </div>
</template>

<script>
import User from './User.vue'
import Computer from './Computer.vue'
import OptionsButtons from './OptionsButtons.vue'
import ScoreKeeper from './ScoreKeeper.vue'

    export default {
         name: "Root",
        components: {
            User,
            Computer,
            OptionsButtons,
            ScoreKeeper
        }
    }
</script>
