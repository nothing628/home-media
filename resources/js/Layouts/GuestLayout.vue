<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Header from '@/Components/Header.vue';
import Sidebar from '@/Components/SideBar.vue';
import PageContent from '@/Components/PageContent.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="">
        <Header></Header>
        <div class="flex">
            <Sidebar></Sidebar>
            <PageContent>
                <slot />
            </PageContent>
        </div>
    </div>
</template>
