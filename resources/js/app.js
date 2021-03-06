/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue')

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import { mapActions } from 'vuex'

Vue.mixin({
    methods: {
        ...mapActions(['setLangCont', 'setOverlay']),
        $t(type, val) {
            let str = val
            if (this.$store.state.langData.cont[type] && this.$store.state.langData.cont[type][val]) {
                str = this.$store.state.langData.cont[type][val]
            }
            return str
        },
        ucfirst(str) {
            str = str.toLowerCase()
            var reg = /\b(\w)|\s(\w)/g //  \b判斷邊界\s判斷空格
            return str.replace(reg, function(m) {
                return m.toUpperCase()
            });
        }
    }
})

import router from '@/router'
import vuetify from '@/plugins/vuetify'
import store from '@/store'
import App from '@/App.vue'

const app = new Vue({
    el: '#app',
    components: { App },
    router,
    vuetify,
    store
})
