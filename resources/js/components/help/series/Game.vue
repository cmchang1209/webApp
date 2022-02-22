<template>
    <div class="help-series-game-page">
        <v-container fluid>
            <div v-for="(item, key) in $store.state.langData.cont['help-series-game']" :key="'game-'+key">
                <p class="font-weight-black">{{ item.title }}</p>
                <div class="divider"></div>
                <div class="pa-3">
                    <ol v-if="item.contants.ols">
                        <small>
                            <li v-for="(ol, key1) in item.contants.ols" :key="ol.title">
                                <p class="mb-1">{{ ol.title }}</p>
                                <p class="mb-1" v-for="(ct, key2) in ol.contants" :key="'game-ct-'+key1+key2">{{ ct }}</p>
                                <ul v-if="ol.uls" class="no-list-style">
                                    <li v-for="(ul, key3) in ol.uls" :key="ul.title">
                                        <p class="mb-1 blue--text text--darken-1">
                                            {{ ul.title }}
                                        </p>
                                        <div class="px-2">
                                            <p class="mb-1" v-for="(ulct, key4) in ul.contants" :key="'game-ulct-'+key1+key4">
                                                {{ ulct }}
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </small>
                    </ol>
                </div>
            </div>
        </v-container>
    </div>
</template>
<script>
export default {
    name: 'HelpSeriesGamePage',
    data() {
        return {}
    },
}

</script>
