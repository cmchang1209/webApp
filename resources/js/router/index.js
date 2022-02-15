import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Home from '@/components/ExampleComponent'
import Entrance from '@/components/Index'

import HelpIndex from '@/components/help/Index'


export default new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            name: 'Home',
            component: Home
        }, {
            path: '/help',
            component: Entrance,
            children: [{
                path: '',
                name: 'index',
                component: HelpIndex
            }]
        },
        {
            path: "*",
            redirect: "/"
        }
    ]
})
