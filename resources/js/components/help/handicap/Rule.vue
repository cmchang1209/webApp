<template>
    <div class="help-handicap-rule-page">
        <v-container fluid>
            <div v-for="(item, key) in $store.state.langData.cont['help-handicap-rule']" :key="'rule-'+key">
                <p class="font-weight-black">{{ item.title }}</p>
                <div class="divider"></div>
                <div class="pa-3">
                    <p class="text-justify font-weight-light" v-for="(contant, key1) in item.contants" :key="'contant-'+key+key1">
                        <small>{{ contant }}</small>
                    </p>
                    <ol v-if="item.ols">
                        <small>
                            <li v-for="(ol, key2) in item.ols" :key="ol.title">
                                <p class="mb-1">{{ ol.title }}</p>
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
    name: 'HelpHandicapRulePage',
    data() {
        return {}
    },
}

</script>
