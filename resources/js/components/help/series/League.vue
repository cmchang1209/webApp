<template>
    <div class="help-series-league-page">
        <v-container fluid>
            <div v-for="(item, key) in $store.state.langData.cont['help-series-league']" :key="'league-'+key">
                <p class="font-weight-black">{{ item.title }}</p>
                <div class="divider"></div>
                <div class="pa-3">
                    <p class="text-justify font-weight-light" v-for="(contant, key1) in item.contants" :key="'contant-'+key+key1">
                        <small>{{ contant }}</small>
                    </p>
                    <ul v-if="item.uls" class="no-list-style">
                        <li v-for="(ul, key3) in item.uls" :key="ul.title">
                            <p class="mb-1">
                                <small class="blue--text text--darken-1">{{ ul.title }}</small>
                            </p>
                            <div class="px-2">
                                <p class="mb-1" v-for="(ulct, key4) in ul.contants" :key="'league-ulct-'+key3+key4">
                                    <small>{{ ulct }}</small>
                                </p>
                            </div>
                            <template v-if="ul.exs">
                                <v-card v-for="(exs, key5) in ul.exs" outlined class="my-5 ex" :key="'league-ex-'+key3+key5">
                                    <v-card-title class="text-body-2 justify-center">
                                        {{ $t('help', 'Example') }}
                                    </v-card-title>
                                    <v-card-text class="pt-4">
                                        <p v-for="ex in exs" :key="ex" class="mb-0 text-center">
                                            <small v-html="ex"></small>
                                        </p>
                                    </v-card-text>
                                </v-card>
                            </template>
                        </li>
                    </ul>
                </div>
            </div>
        </v-container>
    </div>
</template>
<script>
export default {
    name: 'HelpSeriesLeaguePage',
    data() {
        return {}
    },
}

</script>
