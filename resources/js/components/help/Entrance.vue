<template>
    <div class="help-entrance-page">
        <v-container fluid>
            <v-row class="child-flex">
                <div class="toolbar">
                    <v-toolbar>
                        <router-link :to="{ path: '/help' }">
                            <v-btn icon>
                                <v-icon>fas fa-angle-left</v-icon>
                            </v-btn>
                        </router-link>
                        <div class="toolbar-title text-center">{{ $t('help', title) }}</div>
                    </v-toolbar>
                </div>
            </v-row>
        </v-container>
        <router-view />
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
