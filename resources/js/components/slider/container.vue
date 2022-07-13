<script setup lang="ts">
import { ref } from 'vue'
import SliderSelector from './selector.vue'

const totalPages = ref(3)
const currentPage = ref(1)
const handleSelect = (index: number) => {
    currentPage.value = index
}
</script>

<template>
    <div class="block w-full z-10 relative">
        <div class="relative overflow-hidden">
            <div class="relative"
                style="transform: translate3d(0px, 0px, 0px); transition: all 1s ease 0s; width: 3255px;">
                <slot></slot>
            </div>
        </div>
        <div class="hidden"><button type="button" role="presentation" class="owl-prev"><span
                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                class="owl-next"><span aria-label="Next">›</span></button></div>

        <SliderSelector :count="totalPages" :current-position="currentPage" @select="handleSelect" />
    </div>
</template>
