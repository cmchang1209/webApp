<template>
    <div class="help-handicap-count-up-page">
        <v-container fluid>
            <div v-for="(item, key) in $store.state.langData.cont['help-handicap-count-up']" :key="'rule-'+key">
                <p class="font-weight-black">{{ item.title }}</p>
                <div class="divider"></div>
                <div class="pa-3">
                	<p class="text-justify font-weight-light" v-for="(contant, key1) in item.contants" :key="'contant-'+key+key1">
                        <small>{{ contant }}</small>
                    </p>
                </div>
            </div>
        </v-container>
    </div>
</template>
<script>
export default {
    name: 'HelpHandicapCountUpPage',
    data() {
        return {}
    },
}

</script>
