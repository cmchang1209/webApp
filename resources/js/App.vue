<template>
    <v-app>
        <!-- <router-view /> -->
        <!-- <v-overlay :value="overlay">
            <v-progress-circular indeterminate color="amber" :size="50"></v-progress-circular>
        </v-overlay> -->
    </v-app>
</template>
<script>
import { mapState } from 'vuex'
export default {
    name: 'App',
    props: ['text'],
    components: {},
    computed: mapState({
        overlay: state => state.gobalData.overlay
    }),
    created() {
        this.setLangCont(this.text)
        let vh = window.innerHeight * 0.01
        document.documentElement.style.setProperty('--vh', `${vh}px`)
    },
    methods: {}
}

</script>
<style lang="scss">
</style>
