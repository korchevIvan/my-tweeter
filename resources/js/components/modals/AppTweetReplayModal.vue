<template>
    <div>
        <component
            v-if="tweet"
            :is="`app-tweet-variant-${tweet.type}`"
            class="mb-4"
            :tweet="tweet"
        />

        <app-tweet-reply-compose
            v-if="tweet"
            :tweet="tweet"
            @success="$emit('close')"
        />
    </div>
</template>

<script>

import AppTweetReplyCompose from "../compose/AppTweetReplyCompose";

export default {
    components: {AppTweetReplyCompose},
    props: {
        tweet: {
            required: true,
            type: Object
        }
    }
}

</script>
