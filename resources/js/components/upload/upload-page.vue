<script setup lang="ts">
import { onMounted } from 'vue'
import { RouterView, useRouter } from 'vue-router'
import { storeToRefs } from 'pinia'
import { useUploadStore } from "@/stores/upload"
import UploadHome from './upload-home.vue'
import UploadProcess from './upload-process.vue'

const router = useRouter()
const uploadStore = useUploadStore()
const { } = storeToRefs(uploadStore)

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

onMounted(() => {
    uploadStore.initDropzone('form#dropzone')
})
</script>

<template>
    <div>
        <form id="dropzone">
            <input type="file" multiple name="files" class="hidden" />
        </form>
        <RouterView />
    </div>
</template>
