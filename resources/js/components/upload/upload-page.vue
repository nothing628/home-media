<script setup lang="ts">
import { onMounted, watch, ref } from 'vue'
import { storeToRefs } from 'pinia'
import { useUploadStore } from "@/stores/upload"
import UploadHome from './upload-home.vue'
import UploadProcess from './upload-process.vue'
import UploadSuccess from './upload-success.vue'

const currentPath = ref('/')
const uploadStore = useUploadStore()
const { error_message, is_file_added } = storeToRefs(uploadStore)

onMounted(() => {
    uploadStore.initDropzone('form#dropzone')
})

watch(is_file_added, (after, before) => {
    if (after)
        currentPath.value = '/process'
    else
        currentPath.value = '/'
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

        <UploadHome v-if="currentPath == '/'" />
        <UploadProcess v-if="currentPath == '/process'" />
        <UploadSuccess v-if="currentPath == '/success'" />
    </div>
</template>
