<template>
    <div class="help-index-page">
        <v-container class="pa-0">
            <v-row no-gutters>
                <v-col v-for="(list, key) in items" :key="key" cols="12" class="text-center list">
                    <router-link :to="{ name: list.name.toLowerCase() }">
                        {{ $t('help', list.name) }}
                    </router-link>
                    <v-divider></v-divider>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
export default {
    data() {
        return {
            items: [
                { name: 'Series' },
                { name: 'Handicap' }
            ],
        }
    },
}

</script>
