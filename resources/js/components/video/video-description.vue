<script setup lang="ts">
defineProps<{
    description: string
    tags?: string[]
}>()
</script>

<template>
    <div class="mb-[30px] p-4 bg-white rounded-sm shadow-md">
        <h6 class="text-sm font-semibold text-[#333333] leading-tight mb-2">About :</h6>
        <p class="mt-0 mb-4">{{ description }}</p>
        <h6 class="text-sm font-semibold text-[#333333] leading-tight mb-2">Tags :</h6>
        <p class="mt-0 mb-0">
            <span v-for="tag in tags" :key="tag">
                <a class="bg-[#cccccc] rounded-sm text-white inline-block py-[4px] px-[9px] mr-1" href="#">
                    {{ tag }}
                </a>
            </span>
        </p>
    </div>
</template>
