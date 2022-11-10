<script setup lang="ts">
import Header from '@/Components/Header.vue';
import Sidebar from '@/Components/SideBar.vue';
import PageContent from '@/Components/PageContent.vue';
import PageFooter from '@/Components/PageFooter.vue';
</script>

<template>
    <div class="">
        <Header></Header>
        <div class="flex">
            <Sidebar></Sidebar>
            <div class="overflow-x-hidden w-full">
                <PageContent>
                    <slot />
                </PageContent>

                <slot name="footer">
                    <PageFooter />
                </slot>
            </div>
        </div>
    </div>
</template>
