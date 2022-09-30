<script setup lang="ts">
import { formatViewsCount } from '@/helper/video'

defineProps<{
    title: string,
    views: number,
}>()
</script>

<template>
    <div class="mb-[30px] p-4 bg-white rounded-sm shadow-md">
        <h2 class="text-lg text-[#333333] font-medium leading-tight mb-2"><a class="text-[#333333]">{{ title }}</a></h2>
        <p><i class="fas fa-eye"></i> {{ formatViewsCount(views) }} views</p>
    </div>
</template>
