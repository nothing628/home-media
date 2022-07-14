<script setup lang="ts">
import { RouterView, useRouter } from 'vue-router'
import UploadHome from './upload-home.vue'
import UploadProcess from './upload-process.vue'

const router = useRouter()

router.addRoute({
    path: '/',
    component: UploadHome,
    name: "upload-home"
})
router.addRoute({
    path: '/process',
    component: UploadProcess,
    name: 'upload-process'
})
router.push('/')

</script>

<template>
    <RouterView />
</template>
