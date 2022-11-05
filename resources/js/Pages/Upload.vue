<script setup lang="ts">
import { Head } from '@inertiajs/inertia-vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import UploadPage from '../components/upload/upload-page.vue';
import MiniFooter from '../Components/Footer/MiniFooter.vue';
</script>

<template>
    <Head title="Video Upload" />
    <GuestLayout>
        <UploadPage />

        <template #footer>
            <MiniFooter />
        </template>
    </GuestLayout>
</template>
