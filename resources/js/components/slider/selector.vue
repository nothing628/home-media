<script setup lang="ts">
import SliderSelectorButton from './selector-button.vue'

defineProps<{
    count: number,
    currentPosition: number
}>()

const emits = defineEmits<{
    (event: 'select', index: number): void
}>()

const handleButtonClick = (index: number) => {
    emits('select', index)
}
</script>

<template>
    <div class="text-center">
        <SliderSelectorButton v-for="i in count" :key="i" :active="i == currentPosition"
            @click="handleButtonClick(i)" />
    </div>
</template>
