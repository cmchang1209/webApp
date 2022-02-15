<template>
  <v-app>
    <router-view />
  </v-app>
</template>
<script>

export default {
    name: 'App',
    props: ['text'],
    components: {
    },
    created() {
    	console.log(this.text)
    }
}

</script>
<style lang="scss">

</style>