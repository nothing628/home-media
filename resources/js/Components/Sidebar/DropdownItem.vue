<script setup lang="ts">
defineProps({
    href: {
        type: String
    }
})
</script>

<template>
    <a class="block w-full py-1.5 px-[14px] text-xs text-black/50 font-normal clear-both whitespace-nowrap"
        :href="href">
        <slot></slot>
    </a>
</template>
