<script setup lang="ts">
import MenuItem from './Footer/MenuItem.vue';
</script>

<template>
    <footer class="ml-[90px] bg-[#e9ecef] py-[15px] text-center block sm:text-left md:ml-[225px] md:p-[15px]">
        <section class="py-5">
            <div class="max-w-full w-full px-[15px] mx-auto xl:max-w-[1200px]">
                <div class="flex flex-wrap -mx-[15px]">
                    <div class="relative w-full px-[15px] md:w-1/4 md:flex-grow-0 md:flex-shrink-0 md:basis-1/4">
                        <div class="mb-[51px]">
                            <a href="{{ url('/') }}">
                                <span class="text-[#171b20] text-lg">MeTube</span>
                                <img alt="" src="img/logo.png" class="max-w-full h-auto">
                            </a>
                        </div>
                        <p class="mb-4">Subang, Indonesia</p>
                        <p class="mt-[7px]">
                            <a href="#" class="text-[#171b20]">
                                <i class="fas fa-mobile fa-fw"></i> +62 896 9887 7110
                            </a>
                        </p>
                        <p class="mt-[7px]">
                            <a href="#" class="text-[#171b20]">
                                <i class="fas fa-envelope fa-fw"></i>
                                someone@gmail.com
                            </a>
                        </p>
                        <p class="mt-[7px]">
                            <a href="#" class="text-[#171b20]">
                                <i class="fas fa-globe fa-fw"></i>
                                www.ariasensei.com
                            </a>
                        </p>
                    </div>
                    <div class="relative w-full px-[15px] md:w-1/6 md:flex-grow-0 md:flex-shrink-0 md:basis-1/6">
                        <h6 class="text-[#333] text-base font-medium mb-6 leading-tight">Company</h6>
                        <ul>
                            <MenuItem href="#">About us</MenuItem>
                            <MenuItem href="#">FAQ</MenuItem>
                            <MenuItem href="#">Privacy</MenuItem>
                            <MenuItem href="#">Terms</MenuItem>
                        </ul>
                    </div>
                    <div class="relative w-full px-[15px] md:w-1/6 md:flex-grow-0 md:flex-shrink-0 md:basis-1/6">
                        <h6 class="text-[#333] text-base font-medium mb-6 leading-tight">Features</h6>
                        <ul>
                            <MenuItem href="#">Retention</MenuItem>
                            <MenuItem href="#">People</MenuItem>
                            <MenuItem href="#">Messages</MenuItem>
                            <MenuItem href="#">Infrastructure</MenuItem>
                            <MenuItem href="#">Platform</MenuItem>
                            <MenuItem href="#">Funnels</MenuItem>
                            <MenuItem href="#">Live</MenuItem>
                        </ul>
                    </div>
                    <div class="relative w-full px-[15px] md:w-1/6 md:flex-grow-0 md:flex-shrink-0 md:basis-1/6">
                        <h6 class="text-[#333] text-base font-medium mb-6 leading-tight">Solutions</h6>
                        <ul>
                            <MenuItem href="#">Entertainment</MenuItem>
                            <MenuItem href="#">Product</MenuItem>
                            <MenuItem href="#">Marketing</MenuItem>
                            <MenuItem href="#">Analytics</MenuItem>
                        </ul>
                    </div>
                    <div class="relative w-full px-[15px] md:w-1/4 md:flex-grow-0 md:flex-shrink-0 md:basis-1/4">
                        <h6 class="text-[#333] text-base font-medium mb-6 leading-tight">NEWSLETTER</h6>
                        <div class="relative flex flex-wrap items-stretch w-full">
                            <input type="text"
                                class="block flex-1 relative bg-[#eceff0] border border-[#dcdfdf] rounded-l-sm text-[#495057] text-[13px] w-full py-1.5 px-3"
                                placeholder="Email Address...">
                            <div class="-ml-[1px]">
                                <button
                                    class="inline-block rounded-r-sm border border-transparent from-[#ff516b] to-[#826cdf] bg-gradient-to-br text-white text-center text-base py-1.5 px-3"
                                    type="button"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                        <small>It is a long established fact that a reader will be distracted by..</small>
                        <h6 class="text-[#333] text-base font-medium mb-2 mt-6 leading-tight">DOWNLOAD APP</h6>
                        <div>
                            <a href="#"><img alt="" class="h-7 mt-[5px] py-[3px] px-1 rounded-[3px] bg-[#231f20]"
                                    src="images/google.png"></a>
                            <a href="#"><img alt="" class="h-7 mt-[5px] py-[3px] px-1 rounded-[3px] bg-[#231f20]"
                                    src="images/apple.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</template>
