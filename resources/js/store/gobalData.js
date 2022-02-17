export default {
    state: {
        overlay: false
    },
    getters: {

    },
    mutations: {
        setOverlay(state, val) {
            state.overlay = !state.overlay
        }
    },
    actions: {
        setOverlay: ({ commit }, val) => {
            commit('setOverlay')
        }
    }
}