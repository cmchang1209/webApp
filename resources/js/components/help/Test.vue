<template>
    <div class="help-test-page">
        <v-container fluid>
            <v-row no-gutters>
                <v-col cols="10" offset="1">
                    <a href="../images/test.png" download="test.png">
                        <v-btn block>
                            {{ $t('golbal', 'Download') }}
                        </v-btn>
                    </a>
                </v-col>
            </v-row>
            <v-row no-gutters>
                <v-col cols="12">
                    <img src="@/images/test.png" style="width: 100%;">
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
export default {
    name: 'HelpTestPage',
    components: {},
    data() {
        return {}
    },
}

</script>
