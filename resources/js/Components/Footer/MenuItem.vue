<script setup lang="ts">
defineProps<{
    href?: string
}>()
</script>

<template>
    <li>
        <a class="text-[#666] leading-6" :href="href">
            <slot></slot>
        </a>
    </li>
</template>
