<template>
    <div class="help-sandbagging-page">
        <v-container fluid>
            <div class="mt-3">
                <div v-for="(item, key) in $store.state.langData.cont['help-sandbagging']" :key="'sandbagging-'+key">
                    <p class="font-weight-black">{{ item.title }}</p>
                    <div class="divider"></div>
                    <div class="pa-3">
                        <ol v-if="item.contants.ols">
                            <small>
                                <li v-for="(ol, key1) in item.contants.ols" :key="ol.title">
                                    <p class="mb-5">{{ ol.title }}</p>
                                    <ul v-if="ol.uls" class="no-list-style">
                                        <li class="mb-5" v-for="(ul, key3) in ol.uls" :key="ul.title">
                                            <p class="mb-1 blue--text text--darken-1">
                                                {{ ul.title }}
                                            </p>
                                            <div class="px-2">
                                                <p class="mb-1" v-for="(ulct, key4) in ul.contants" :key="'sandbagging-ulct-'+key1+key4">
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
            </div>
        </v-container>
    </div>
</template>
<script>
export default {
    name: 'HelpSandbaggingPage',
    components: {},
    data() {
        return {}
    },
}

</script>
