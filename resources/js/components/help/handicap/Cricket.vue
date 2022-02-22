<template>
    <div class="help-handicap-cricket-page">
        <v-container fluid>
            <div v-for="(item, key) in $store.state.langData.cont['help-handicap-cricket']" :key="'rule-'+key">
                <p class="font-weight-black">{{ item.title }}</p>
                <div class="divider"></div>
                <div class="pa-3">
                    <p class="text-justify font-weight-light" v-for="(contant, key1) in item.contants" :key="'contant-'+key+key1">
                        <small>{{ contant }}</small>
                    </p>
                    <v-simple-table dense>
                        <template v-slot:default>
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        {{ $t('help', 'RT') }}
                                    </th>
                                    <th class="text-center">
                                        {{ $t('help', 'PTS') }}
                                    </th>
                                    <th class="text-center">
                                        {{ $t('help', 'Mark') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in 13" :key="'handicap-cricket'+item">
                                    <td class="text-center">
                                        <div>{{ item -1 }}</div>
                                    </td>
                                    <td class="text-center">
                                        <div>{{ (item -1) * 18 }}</div>
                                    </td>
                                    <td class="text-left">
                                        <div class="pl-4" v-html="mark[item -1]"></div>
                                    </td>
                                </tr>
                            </tbody>
                        </template>
                    </v-simple-table>
                </div>
            </div>
        </v-container>
    </div>
</template>
<script>
export default {
    name: 'HelpHandicapCricketPage',
    data() {
        return {
            mark: [
                '',
                '18 <small>╱</small>',
                '18 <small>╳</small>',
                '18 <small>╳</small> 17 <small>╱</small>',
                '18 <small>╳</small> 17 <small>╳</small>',
                '18 <small>╳</small> 17 <small>╳</small> 16 <small>╱</small>',
                '18 <small>╳</small> 17 <small>╳</small> 16 <small>╳</small>',
                '18 <small>╳</small> 17 <small>╳</small> 16 <small>╳</small> 15 <small>╱</small>',
                '18 <small>╳</small> 17 <small>╳</small> 16 <small>╳</small> 15 <small>╳</small>',
                '18 <small>╳</small> 17 <small>╳</small> 16 <small>╳</small> 15 <small>╳</small>',
                '18 <small>╳</small> 17 <small>╳</small> 16 <small>╳</small> 15 <small>╳</small>',
                '18 <small>╳</small> 17 <small>╳</small> 16 <small>╳</small> 15 <small>╳</small>',
                '18 <small>╳</small> 17 <small>╳</small> 16 <small>╳</small> 15 <small>╳</small>'
            ]
        }
    },
}

</script>
