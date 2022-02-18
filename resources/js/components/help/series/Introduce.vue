<template>
    <div class="help-series-introduce-page">
        <v-container fluid>
            <div v-for="(item, key) in $store.state.langData.cont['help-introduce']" :key="'introduce-'+key">
                <p class="font-weight-black">{{ item.title }}</p>
                <div class="divider"></div>
                <div class="pa-3">
                    <p class="text-justify font-weight-light" v-for="(contant, key1) in item.contants" :key="'contant-'+key+key1">
                        <small>{{ contant }}</small>
                    </p>
                    <template v-if="key === 1">
                        <v-row no-gutters align="center" justify="center">
                            <v-col cols="6" class="type-item">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td rowspan="6">
                                                <small>
                                                    {{ $t('help', 'Game') }}
                                                </small>
                                            </td>
                                            <td rowspan="6">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0,0,30,158">
                                                    <path d="m5 82.5 h10 v-70.5 h10"></path>
                                                    <path d="m15 82.5 v70.5 h10"></path>
                                                </svg>
                                            </td>
                                            <td>
                                                <small class="text-dark-blue">
                                                    {{ $t('help', '01Game') }}
                                                </small>
                                            </td>
                                        </tr>
                                        <tr v-for="item in game" :key="item">
                                            <td>
                                                <small class="text-dark-blue">
                                                    {{ $t('help', item) }}
                                                </small>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </v-col>
                            <v-col cols="6" class="type-item">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td rowspan="6">
                                                <small>
                                                    {{ $t('help', 'League') }}
                                                </small>
                                            </td>
                                            <td rowspan="6">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0,0,30,158">
                                                    <path d="m5 82.5 h10 v-62.5 h10"></path>
                                                    <path d="m15 82.5 v62.5 h10"></path>
                                                </svg>
                                            </td>
                                            <td>
                                                <small class="text-dark-blue">
                                                    {{ $t('help', 'Individual league level') }}
                                                </small>
                                            </td>
                                        </tr>
                                        <tr v-for="item in league" :key="item">
                                            <td>
                                                <small class="text-dark-blue">
                                                    {{ $t('help', item) }}
                                                </small>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </v-col>
                        </v-row>
                        <v-card outlined class="mt-5">
                            <v-toolbar dense flat>
                                <v-toolbar-title class="text-body-2">
                                    <v-icon class="mr-3" color="lime" small>far fa-circle</v-icon>
                                    {{ $t('help', 'Included in series calculation') }}
                                </v-toolbar-title>
                            </v-toolbar>
                             <v-card-text>
                                 <p v-for="(calculation, key2) in item.calculations[0]" :key="'calculation-'+key2" class="mb-0">
                                     <small>{{ calculation }}</small>
                                 </p>
                             </v-card-text>
                        </v-card>
                        <v-card outlined class="mt-5">
                            <v-toolbar dense flat>
                                <v-toolbar-title class="text-body-2">
                                    <v-icon class="mr-3" color="pink" small>fas fa-times</v-icon>
                                    {{ $t('help', 'Not included in series calculation') }}
                                </v-toolbar-title>
                            </v-toolbar>
                             <v-card-text>
                                 <p v-for="(calculation, key3) in item.calculations[1]" :key="'no-calculation-'+key3" class="mb-0">
                                     <small>{{ calculation }}</small>
                                 </p>
                             </v-card-text>
                        </v-card>
                    </template>
                </div>
            </div>
        </v-container>
    </div>
</template>
<script>
export default {
    name: 'HelpSeriesIntroducePage',
    data() {
        return {
            game: ['Cricket', 'CountUp', 'Consistency', 'PRO 501', 'Online battle'],
            league: ['Team league level', 'Individual season level', 'Team Season Level']
        }
    },
    created() {}
}

</script>
