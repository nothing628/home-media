<script setup lang="ts">
import PageFooter from './PageFooter.vue';
</script>

<template>
    <div class="overflow-x-hidden w-full">
        <div
            class="pl-[108px] pr-[15px] pb-[15px] pt-4 md:pl-[243px] xl:py-[30px] xl:pl-[255px] xl:pr-[30px] w-full mx-auto">
            <slot></slot>
        </div>

        <slot name="footer">
            <PageFooter />
        </slot>
    </div>
</template>
