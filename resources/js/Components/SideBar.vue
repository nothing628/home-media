<script setup lang="ts">
import MenuItem from './Sidebar/MenuItem.vue';
import DropdownItem from './Sidebar/DropdownItem.vue';
import SubscribeItem from './Sidebar/SubscribeItem.vue';

</script>

<template>
    <ul
        class="flex flex-col mb-0 list-none fixed py-0.5 z-[9] min-h-full w-[90px] from-[#07bf67] to-[#0cded5] bg-gradient-to-br md:w-[225px] md:h-full">
        <MenuItem title="Home" href="#" active>
            <i class="fas fa-fw fa-home"></i>
        </MenuItem>
        <MenuItem title="Channels" href="#">
            <i class="fas fa-fw fa-users"></i>
        </MenuItem>
        <MenuItem title="Upload Video" href="#">
            <i class="fas fa-fw fa-cloud-upload-alt"></i>
        </MenuItem>
        <MenuItem title="History" href="#">
            <i class="fas fa-fw fa-history"></i>
        </MenuItem>
        <MenuItem title="Categories" href="#">
            <i class="fas fa-fw fa-list-alt"></i>

            <template #dropdown>
                <DropdownItem href="">Movie</DropdownItem>
                <DropdownItem href="">Music</DropdownItem>
                <DropdownItem href="">Television</DropdownItem>
            </template>
        </MenuItem>
        <li class="border-t border-t-[#07af57] py-[7px] px-[14px] mt-1.5 mb-4">
            <h6 class="text-white text-sm font-semibold mb-[15px] mt-[9px]">SUBSCRIPTIONS</h6>
            <ul>
                <SubscribeItem :notify-count="0" img="images/login.png" href=""
                    title="Your Life"></SubscribeItem>
                <SubscribeItem :notify-count="2" img="images/login.png" href=""
                    title="Unboxing"></SubscribeItem>
                <SubscribeItem :notify-count="0" img="images/login.png" href=""
                    title="Product / Service"></SubscribeItem>
            </ul>
        </li>
    </ul>
</template>
