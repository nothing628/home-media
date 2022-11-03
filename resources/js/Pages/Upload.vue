<script setup lang="ts">
import { Head } from '@inertiajs/inertia-vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import UploadPage from '../components/upload/upload-page.vue';
</script>

<template>
    <Head title="Video Upload" />
    <GuestLayout>
        <UploadPage />
    </GuestLayout>
</template>
