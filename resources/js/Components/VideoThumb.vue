<script setup lang="ts">
defineProps({
    video: {
        type: Object
    },
})
</script>

<template>
    <a :href="route('video.show', {'video': video.id})">
        <div class="w-72 px-2 mb-4">
            <div class="w-full h-[153px] relative bg-gray-700 mb-2 bg-contain bg-no-repeat bg-center"
                :style="`background-image: url('${video.thumb_path}')`">
                <div class="absolute bottom-0 right-0 bg-black text-white text-xs px-1 py-1">05:00</div>
            </div>
            <p class="mb-1 text-sm">{{ video.title }}</p>
            <p class="text-xs">{{ video.updated_at }}</p>
        </div>
    </a>
</template>
