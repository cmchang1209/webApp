<template>
    <v-app>
        <router-view />
    </v-app>
</template>
<script>
export default {
    name: 'App',
    props: ['text'],
    components: {},
    created() {
        this.setLangCont(this.text)
    },
    methods: {
    }
}

</script>
<style lang="scss">
</style>
