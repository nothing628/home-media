<script setup lang="ts">
defineProps<{
    active: boolean
}>()

const emits = defineEmits<{
    (event: 'click'): void
}>()
</script>

<template>
    <button role="button" @click="emits('click')" class="rounded-[50px] h-4 w-4 mx-0.5"
        :class="active ? 'from-[#ff516b] to-[#826cfd] bg-gradient-to-br' : 'bg-[#dcdcdc]'"><span></span></button>
</template>
