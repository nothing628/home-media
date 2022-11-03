<script setup lang="ts">
import { Head } from '@inertiajs/inertia-vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import VideoTitle from '@/components/video/video-title.vue';
import VideoDescription from '@/components/video/video-description.vue';
import VideoChannel from '@/components/video/video-channel.vue'

defineProps<{
    video: any,
    url: string
}>()
</script>

<template>

    <Head title="Dashboard" />
    <GuestLayout>
        <div class="max-w-6xl mx-auto">
            <video width="640" controls class="w-full mb-4 max-h-[600px]">
                <source :src="url" type="video/mp4" />
            </video>

            <VideoTitle :title="video.title" :views="20000"></VideoTitle>
            <VideoChannel channel-name="Administrator" channel-avatar="/images/login.png"
                :channel-subscriber-count="1000000000" is-channel-verified
                :published-at="video.updated_at">
            </VideoChannel>
            <VideoDescription description="Lorem ipsum" :tags="['test']"></VideoDescription>
        </div>
    </GuestLayout>
</template>
