<template>
    <div class="help-handicap-page">
        <v-container fluid class="pa-0">
            <v-tabs v-model="tab" center-active show-arrows grow>
                <v-tab v-for="item in items" :key="item.tab">
                    {{ $t('help', item.tab) }}
                </v-tab>
            </v-tabs>
            <v-tabs-items v-model="tab" touchless>
                <v-tab-item v-for="item in items" :key="item.tab">
                    <handicap-rule v-if="item.tab === 'Rule'" />
                    <handicap-game v-else-if="item.tab === '01Game'" />
                    <handicap-cricket v-else-if="item.tab === 'Cricket'" />
                    <handicap-count-up v-else />
                </v-tab-item>
            </v-tabs-items>
        </v-container>
    </div>
</template>
<script>
import Rule from '@/components/help/handicap/Rule'
import Game from '@/components/help/handicap/01Game'
import Cricket from '@/components/help/handicap/Cricket'
import CountUp from '@/components/help/handicap/CountUp'
export default {
	name: 'HelpHandicapPage',
	components: {
		'handicap-rule': Rule,
		'handicap-game': Game,
		'handicap-cricket': Cricket,
		'handicap-count-up': CountUp
	},
    data() {
        return {
            tab: null,
            items: [
                { tab: 'Rule' },
                { tab: '01Game' },
                { tab: 'Cricket' },
                { tab: 'CountUp' }
            ],
        }
    },
}

</script>
