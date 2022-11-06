<script setup lang="ts">
import { Duration } from 'luxon'
import { computed } from 'vue'

const props = defineProps({
    video: {
        type: Object
    },
})

const duration = computed(() => {
    const video = props.video
    const duration = video.duration

    if (duration) {
        const durationInstance = Duration.fromMillis(duration * 1000)

        return durationInstance.toFormat('mm:ss')
    }

    return ""
})
</script>

<template>
    <a :href="route('video.show', { 'video': video.id })">
        <div class="w-72 px-2 mb-4">
            <div class="w-full h-[153px] relative bg-gray-700 mb-2 bg-contain bg-no-repeat bg-center"
                :style="`background-image: url('${video.thumb_url}')`">
                <div class="absolute bottom-0 right-0 bg-black text-white text-xs px-1 py-1">{{duration}}</div>
            </div>
            <p class="mb-1 text-sm">{{ video.title }}</p>
            <p class="text-xs">{{ video.created }}</p>
        </div>
    </a>
</template>
