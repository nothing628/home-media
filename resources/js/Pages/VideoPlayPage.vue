<script setup lang="ts">
import { Head } from '@inertiajs/inertia-vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import VideoThumb from '@/Components/VideoThumb.vue';

defineProps<{
    video: any,
    url: string
}>()
</script>

<template>

    <Head title="Dashboard" />
    <GuestLayout>
        <div class="max-w-6xl mx-auto">
            <video width="640" controls class="w-full mb-4">
                <source :src="url" type="video/mp4" />
            </video>

            <video-title :title="video.title" :views="20000"></video-title>
            <video-channel channel-name="Administrator" channel-avatar="/images/login.png"
                :channel-subscriber-count="1000000000" is-channel-verified
                :published-at="video.updated_at">
            </video-channel>
            <video-description description="Lorem ipsum" :tags="['test']"></video-description>
        </div>
    </GuestLayout>
</template>
