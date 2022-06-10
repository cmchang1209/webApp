import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Home from '@/components/ExampleComponent'
import Entrance from '@/components/Index'

import HelpIndex from '@/components/help/Index'
import HelpEntrance from '@/components/help/Entrance'
import HelpSeries from '@/components/help/Series'
import HelpHandicap from '@/components/help/Handicap'
import HelpSandbagging from '@/components/help/Sandbagging'

import HelpTest from '@/components/help/Test'


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
                name: 'helpIndex',
                component: HelpIndex
            }, {
                path: '',
                component: HelpEntrance,
                children: [{
                    path: 'rating',
                    name: 'rating',
                    component: HelpSeries
                }, {
                    path: 'handicap',
                    name: 'handicap',
                    component: HelpHandicap
                }, {
                    path: 'sandbagging',
                    name: 'sandbagging',
                    component: HelpSandbagging
                }, {
                    path: 'test',
                    name: 'test',
                    component: HelpTest
                }]
            }]
        },
        {
            path: "*",
            redirect: "/"
        }
    ]
})
