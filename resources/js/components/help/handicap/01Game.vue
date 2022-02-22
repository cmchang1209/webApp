<template>
    <div class="help-handicap-01Game-page">
        <v-container fluid>
            <div v-for="(item, key) in $store.state.langData.cont['help-handicap-01Game']" :key="'rule-'+key">
                <p class="font-weight-black">{{ item.title }}</p>
                <div class="divider"></div>
                <div class="pa-3">
                    <p class="text-justify font-weight-light" v-for="(contant, key1) in item.contants" :key="'contant-'+key+key1">
                        <small>{{ contant }}</small>
                    </p>
                    <!-- <v-simple-table dense>
                        <template v-slot:default>
                            <thead>
                                <tr>
                                    <th v-for="th in tb1.ths" :key="th" class="text-center">{{ th }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in tb1.items" :key="Object.keys(item)[0]">
                                    <td class="text-center pa-0" style="width: 50%;">
                                        <div class="d-flex justify-center align-center">{{ Object.keys(item)[0] }}</div>
                                    </td>
                                    <td class="text-center pa-0">
                                        <div class="d-flex justify-center align-center">{{ Object.values(item)[0] }}</div>
                                    </td>
                                </tr>
                            </tbody>
                        </template>
                    </v-simple-table> -->
                    <p class="text-center mt-3">
                        <small>{{ $t('help', 'Example') }}（ 501 ）</small>
                    </p>
                    <v-simple-table dense>
                        <template v-slot:default>
                            <thead>
                                <tr>
                                    <th><div class="pl-4">1</div></th>
                                    <th colspan="4"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 40%;">
                                        <div class="pl-4">1</div>
                                    </td>
                                    <td class="text-center">
                                        <div>501</div>
                                    </td>
                                    <td class="text-center">
                                        <div>VS</div>
                                    </td>
                                    <td class="text-center">
                                        <div>481</div>
                                    </td>
                                    <td class="text-center">
                                        <div>20</div>
                                    </td>
                                </tr>
                            </tbody>
                        </template>
                    </v-simple-table>
                    <!-- <v-simple-table dense>
                        <template v-slot:default>
                            <thead>
                                <tr>
                                    <th>{{ $t('help', 'Rt difference') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in 12" :key="'ex-'+item">
                                    <td class="pl-0 pr-" style="width: 35%;">
                                        <div class="d-flex align-center pl-4 first">
                                            {{ item }}
                                        </div>
                                    </td>
                                    <td class="pa-0">
                                        <div class="d-flex justify-center align-center">
                                            501
                                        </div>
                                    </td>
                                    <td class="text-center pa-0">
                                        <div class="d-flex justify-center align-center">
                                            501
                                        </div>
                                    </td>
                                    <td class="text-center pa-0">
                                        <div class="d-flex justify-center align-center">
                                            VS
                                        </div>
                                    </td>
                                    <td class="text-center pa-0">
                                        <div class="d-flex justify-center align-center">
                                            {{ 501 - item * 20 }}
                                        </div>
                                    </td>
                                    <td class="text-center pa-0">
                                        <div class="d-flex justify-center align-center">
                                            {{ item * 20 }}
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </template>
                    </v-simple-table> -->
                </div>
            </div>
        </v-container>
    </div>
</template>
<script>
export default {
    name: 'HelpHandicap01GamePage',
    data() {
        return {
            tb1: {
                ths: [
                    this.$t('golbal', 'Game'),
                    this.$t('help', 'Handicap per step')
                ],
                items: [
                    { 301: 12 },
                    { 401: 16 },
                    { 501: 20 },
                    { 701: 28 },
                    { 901: 36 },
                    { 1001: 40 },
                    { 1101: 44 }
                ]
            }
        }
    },
}

</script>
