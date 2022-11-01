<script setup lang="ts">
import DropdownContainer from '../../components/dropdown-container.vue';
import {ref, onBeforeMount, useSlots} from 'vue'

const hasDropdown = ref(false)
const slots = useSlots()

onBeforeMount(() => {
    const dropdownSlot = slots.dropdown

    if (dropdownSlot) {
        hasDropdown.value = true
    }
})

defineProps<{
    href?: string
    title?: string
    active?: boolean
}>()
</script>

<template>
    <li class="list-item relative">
        <DropdownContainer :href="href" :title="title" :active="active === true">
            <slot></slot>

            <template v-if="hasDropdown" #dropdown>
                <slot name="dropdown"></slot>
            </template>
        </DropdownContainer>
    </li>
</template>
