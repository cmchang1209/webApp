<template>
    <div class="help-series-page">
        <v-container fluid>
            <v-tabs v-model="tab" center-active show-arrows grow>
                <v-tab v-for="item in items" :key="item.tab">
                    {{ $t('help', item.tab) }}
                </v-tab>
            </v-tabs>
            <v-tabs-items v-model="tab">
                <v-tab-item v-for="item in items" :key="item.tab">
                    <series-table v-if="item.tab === 'seriesTable'" />
                    <series-introduce v-else-if="item.tab === 'introduce'" />
                    <series-game v-else-if="item.tab === 'game'" />
                    <series-league v-else />
                </v-tab-item>
            </v-tabs-items>
        </v-container>
    </div>
</template>
<script>
import Table from '@/components/help/series/Table'
import Introduce from '@/components/help/series/Introduce'
import Game from '@/components/help/series/Game'
import League from '@/components/help/series/League'
export default {
	name: 'HelpSeriesPage',
	components: {
		'series-table': Table,
		'series-introduce': Introduce,
		'series-game': Game,
		'series-league': League
	},
    data() {
        return {
            tab: null,
            items: [
                { tab: 'seriesTable' },
                { tab: 'introduce' },
                { tab: 'game' },
                { tab: 'league' }
            ],
        }
    },
}

</script>
