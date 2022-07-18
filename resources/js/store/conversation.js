import actions from "./tweet/actions"
import mutations from "./tweet/mutations"

export default {
    namespaced: true,

    state: {
        tweets: []
    },

    actions,

    getters: {
        tweet(state) {
            return id => state.tweets.find(t => t.id == id)
        }
    },

    mutations
}
