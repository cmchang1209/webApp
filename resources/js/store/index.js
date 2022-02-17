import Vue from 'vue'
import Vuex from 'vuex'
import langData from './langData.js'
import gobalData from './gobalData.js'
Vue.use(Vuex)

export default new Vuex.Store({
    // 可以设置多个模块
    modules: {
    	langData,
    	gobalData
    }
})