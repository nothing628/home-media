<script setup lang="ts">
import { useUploadStore } from '@/stores/upload'

const uploadStore = useUploadStore()

const upload = () => {
    uploadStore.openSelectDialog()
}
</script>

<template>
    <div class="flex flex-wrap -mx-[15px]">
        <div class="mx-auto text-center pt-12 pb-12 flex-shrink-0 flex-grow-0 w-full md:w-2/3">
            <h1 class="mb-2"><i class="fas fa-file-upload text-[200px] text-[#07bf67]"></i></h1>
            <h4 class="mt-12 mb-2 text-[#333] text-2xl font-medium">Select Video files to upload</h4>
            <p class="">or drag and drop video files</p>
            <div class="mt-6">
                <button @click="upload"
                    class="text-center text-[#07bf67] text-base leading-6 border border-[#07bf67] py-1.5 px-3">Upload
                    Video</button>
            </div>
        </div>
    </div>
</template>
