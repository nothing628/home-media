<script setup lang="ts">
import { ref, computed, useSlots, onMounted, onBeforeUnmount } from 'vue'
import SliderSelector from './selector.vue'

const props = defineProps({
    interval: {
        type: Number,
        default: 2000
    }
})
const container = ref()
const containerWidth = ref(0)
const totalPages = ref(1)
const currentPage = ref(1)
const handleSelect = (index: number) => {
    currentPage.value = index
}

const totalWidth = computed(() => containerWidth.value * totalPages.value)
const totalTranslateX = computed(() => containerWidth.value * (currentPage.value - 1) * -1)

const slots = useSlots()

const timerId = ref(null)
const moveNextPage = () => {
    let nextPage = currentPage.value + 1
    if (nextPage > totalPages.value) nextPage = 1

    currentPage.value = nextPage
}
const startTimer = () => {
    let id = setInterval(moveNextPage, props.interval)

    timerId.value = id
}
const stopTimer = () => {
    if (timerId.value) {
        clearTimeout(timerId.value)
        timerId.value = null
    }
}

onBeforeUnmount(stopTimer)
onMounted(() => {
    const defaultSlot = slots.default

    if (container.value) {
        containerWidth.value = container.value.clientWidth
    }

    if (typeof defaultSlot == 'function') {
        const childs = defaultSlot()

        totalPages.value = childs.length
        currentPage.value = 1
    }

    startTimer()
})
</script>

<template>
    <div class="block w-full z-10 relative">
        <div class="relative overflow-hidden" ref="container">
            <div class="relative" style="transition: all 1s ease 0s;" :style="{
                width: totalWidth + 'px',
                transform: `translate3d(${totalTranslateX}px, 0px, 0px)`
            }">
                <slot></slot>
            </div>
        </div>
        <div class="hidden"><button type="button" role="presentation" class="owl-prev"><span
                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                class="owl-next"><span aria-label="Next">›</span></button></div>

        <SliderSelector :count="totalPages" :current-position="currentPage" @select="handleSelect" />
    </div>
</template>
