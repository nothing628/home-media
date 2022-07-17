<script setup lang="ts">
import { onMounted, watch } from 'vue'
import { RouterView, useRouter } from 'vue-router'
import { storeToRefs } from 'pinia'
import { useUploadStore } from "@/stores/upload"
import UploadHome from './upload-home.vue'
import UploadProcess from './upload-process.vue'

const router = useRouter()
const uploadStore = useUploadStore()
const { error_message, is_file_added } = storeToRefs(uploadStore)

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

watch(is_file_added, (after, before) => {
    if (after)
        router.replace('/process')
    else
        router.replace('/')
})
</script>

<template>
    <div>
        <form id="dropzone">
            <input type="file" name="files" class="hidden" accept="video/*" />
        </form>
        <div v-if="error_message" class="">
            <p>{{ error_message }}</p>
        </div>
        <RouterView />
    </div>
</template>
