<script setup lang="ts">
import { Head } from '@inertiajs/inertia-vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { ref, onMounted } from 'vue'
import Hls from 'hls.js'

const video = ref()
const loadMedia = () => {
    const videoSrc = "http://localhost/storage/master.m3u8"

    if (video.value && Hls.isSupported()) {
        const hls = new Hls()
        hls.loadSource(videoSrc)
        hls.attachMedia(video.value)

        hls.once(Hls.Events.LEVEL_LOADED, () => {
            video.value.play()
        })
    }

}

onMounted(loadMedia)
</script>

<template>

    <Head title="Dashboard" />
    <GuestLayout>
        <div>This is video test</div>
        <video ref="video"></video>
    </GuestLayout>
</template>
