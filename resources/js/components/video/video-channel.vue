<script setup lang="ts">
import { formatChannelSubscriberCount, formatVideoPublishAt } from '@/helper/video'

defineProps<{
    channelName: string,
    channelSubscriberCount: number,
    channelAvatar: string,
    isChannelVerified?: boolean,
    isSubsribed?: boolean,
    isNotified?: boolean,
    publishedAt: string,
}>()
</script>

<template>
    <div class="mb-[30px] p-4 bg-white rounded-sm shadow-md">
        <div class="float-right">
            <button
                class="border border-transparent rounded-sm from-[#ff253a] to-[#ff8453] bg-gradient-to-br leading-normal text-base text-white text-center inline-block px-3 py-1.5 mr-2"
                type="button">Subscribe <strong>{{ formatChannelSubscriberCount(channelSubscriberCount) }}</strong>
            </button>
            <button
                class="border border-[#ff253a] hover:border-transparent rounded-sm bg-transparent hover:from-[#ff253a] hover:to-[#ff8453] hover:bg-gradient-to-br leading-normal text-base text-[#ff253a] hover:text-white text-center inline-block px-3 py-1.5"
                type="button">
                <i class="fas fa-bell"></i>
            </button>
        </div>
        <img class="rounded-full float-left h-[38px] w-[38px] mr-[13px] max-w-full" :src="channelAvatar" alt="" />
        <p class="m-0 p-0">
            <a href="#"><strong>{{ channelName }}</strong></a>&nbsp;
            <span v-if="isChannelVerified"><i class="fas fa-check-circle text-[#4eda92]"></i></span>
        </p>
        <small>Published on {{ formatVideoPublishAt(publishedAt) }}</small>
    </div>
</template>
