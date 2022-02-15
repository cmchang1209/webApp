<template>
    <v-app>
        <router-view />
    </v-app>
</template>
<script>
import { mapState, mapGetters, mapActions } from 'vuex'
export default {
    name: 'App',
    props: ['text'],
    components: {},
    created() {
        this.setLangCont(this.text)
    },
    methods: {
        ...mapActions(['setLangCont'])
    },
}

</script>
<style lang="scss">
</style>
