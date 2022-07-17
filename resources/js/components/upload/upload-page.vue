<script setup lang="ts">
import { onMounted, watch } from 'vue'
import { RouterView, useRouter } from 'vue-router'
import { storeToRefs } from 'pinia'
import { useUploadStore } from "@/stores/upload"
import UploadHome from './upload-home.vue'
import UploadProcess from './upload-process.vue'

const router = useRouter()
const uploadStore = useUploadStore()
const { error_message, file_added } = storeToRefs(uploadStore)

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

watch(file_added, (before, after) => {
    if (after)
        router.push('/process')
})
</script>

<template>
    <div>
        <form id="dropzone">
            <input type="file" multiple name="files" class="hidden" />
        </form>
        <div v-if="error_message" class="">
            <p>{{ error_message }}</p>
        </div>
        <RouterView />
    </div>
</template>
