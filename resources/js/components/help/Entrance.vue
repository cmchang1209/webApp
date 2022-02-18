<template>
    <div class="help-entrance-page">
        <v-container fluid class="toolbar">
            <v-row class="child-flex">
                <v-toolbar>
                    <router-link :to="{ path: '/help' }">
                        <v-btn icon>
                            <v-icon>fas fa-angle-left</v-icon>
                        </v-btn>
                    </router-link>
                    <div class="toolbar-title text-center">{{ $t('help', title) }}</div>
                </v-toolbar>
            </v-row>
        </v-container>
        <div class="has-toolbar-container">
            <router-view />
        </div>
    </div>
</template>
<script>
export default {
    name: 'HelpEntrancePage',
    props: [],
    components: {},
    data() {
        return {
            title: ''
        }
    },
    created() {
        this.title = this.ucfirst(this.$route.name)
    },
    methods: {}
}

</script>
