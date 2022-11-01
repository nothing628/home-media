<script setup lang="ts">
import { Head } from '@inertiajs/inertia-vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';

defineProps<{
    videos: any[]
}>()
</script>

<template>
    <Head title="Dashboard" />
    <GuestLayout>
        <div class="flex flex-wrap justify-evenly">
            <x-video-thumb v-for="video in videos" :key="video.id" :video="video"></x-video-thumb>
        </div>

        <div class="flex justify-center py-4 mt-2">
            <a
                class="flex items-center justify-center cursor-pointer border border-r-0 border-gray-200 bg-white hover:bg-gray-50 w-12 h-12 rounded-l-md">1</a>
            <a
                class="flex items-center justify-center cursor-pointer border border-r-0 border-gray-200 bg-white hover:bg-gray-50 w-12 h-12">2</a>
            <a
                class="flex items-center justify-center cursor-pointer border border-r-0 border-gray-200 bg-white hover:bg-gray-50 w-12 h-12">3</a>
            <a
                class="flex items-center justify-center cursor-pointer border border-r-0 border-gray-200 bg-white hover:bg-gray-50 w-12 h-12">4</a>
            <a
                class="flex items-center justify-center cursor-pointer border border-r-0 border-gray-200 bg-white hover:bg-gray-50 w-12 h-12">5</a>
            <a
                class="flex items-center justify-center cursor-pointer border border-r-0 border-gray-200 bg-white hover:bg-gray-50 w-12 h-12">6</a>
            <a
                class="flex items-center justify-center cursor-pointer border border-gray-200 bg-white hover:bg-gray-50 w-12 h-12 rounded-r-md">7</a>
        </div>
    </GuestLayout>
</template>
