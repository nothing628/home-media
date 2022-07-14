<script setup lang="ts">
import { ref, useSlots, onMounted } from 'vue'

defineProps({
    active: {
        type: Boolean,
        default: false
    },
    href: { type: String, required: true },
    title: { type: String, required: true }
})

const isOpen = ref(false)
const hasDropdown = ref(false)
const slots = useSlots()

const menuClick = () => {
    isOpen.value = !isOpen.value
}

onMounted(() => {
    const dropdownSlot = slots.dropdown

    if (dropdownSlot) {
        hasDropdown.value = true
    }
})
</script>

<template>
    <a class="block text-white text-sm text-center font-semibold py-2 px-[14px] w-[90px] md:w-[225px] md:text-left xl:px-3 xl:py-[14px]"
        :class="active ? 'bg-white/20' : ''" :href="hasDropdown ? '#' : href" @click="menuClick">
        <slot></slot>
        <span class="block text-[11px] m-0 md:inline md:text-[13px] md:ml-[11px]">{{ title }}</span>

        <i v-if="hasDropdown && isOpen" class="fas fa-fw fa-angle-down float-right text-center hidden md:block w-4"></i>
        <i v-if="hasDropdown && !isOpen" class="fas fa-fw fa-angle-right float-right text-center hidden md:block w-4"></i>
    </a>

    <div :class="(hasDropdown && isOpen) ? 'block' : 'hidden'"
        class="absolute md:static left-[90px] top-0 float-none mx-0 md:mx-4 py-2 bg-white border border-black/10 rounded-sm min-w-[10rem]">
        <slot name="dropdown"></slot>
    </div>
</template>
