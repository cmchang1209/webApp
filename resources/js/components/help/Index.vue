<template>
    <div class="help-index-page">
        <v-container class="pa-0">
        	<v-row no-gutters>
        		<v-col v-for="(list, key) in items" :key="key" cols="12" class="text-center list">
        			{{ list.name }}
        		</v-col>
        	</v-row>
        </v-container>
    </div>
</template>
<script>
export default {
	data() {
        return {
            items: [
                { name: 'One', path: 'Tab 1 Content' },
                { name: 'Two', path: 'Tab 2 Content' }
            ],
        }
    },
}

</script>