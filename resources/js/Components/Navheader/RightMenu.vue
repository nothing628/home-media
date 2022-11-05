<template>
    <ul class="ml-auto md:ml-0 mr-[7px] flex-row flex pl-0 list-none">
        <li class="mx-1">
            <a class="text-black/50 block relative py-[22px] px-[5px] xl:py-[17px] xl:px-[13px] text-[0px] xl:text-sm leading-[0px]"
                :href="route('upload')">
                <i class="fas fa-plus-circle fa-fw text-xs leading-3"></i>
                Upload Video
            </a>
        </li>
        <li class="mx-1">
            <a class="text-black/50 block relative py-[22px] px-[5px] leading-[0px]" href="#" id="alertsDropdown"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw text-xs leading-3"></i>
                <span
                    class="absolute rounded-[3px] top-[11px] px-[3.5px] py-[2.3px] right-0 font-bold leading-[9px] text-[9px] text-white from-[#ff253a] to-[#ff8453] bg-gradient-to-br">9+</span>
            </a>
            <div class="hidden" aria-labelledby="alertsDropdown">
                <a class="" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
                <a class="" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another
                    action</a>
                <div class=""></div>
                <a class="" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else
                    here</a>
            </div>
        </li>
        <li class="mx-1">
            <a class="text-black/50 block relative py-[22px] px-[5px] leading-[0px]" href="#" id="messagesDropdown"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw text-xs leading-3"></i>
                <span
                    class="absolute rounded-[3px] top-[11px] px-[3.5px] py-[2.3px] right-0 font-bold leading-[9px] text-[9px] text-white from-[#4eda92] to-[#56e0cb] bg-gradient-to-br">7</span>
            </a>
            <div class="hidden" aria-labelledby="messagesDropdown">
                <a class="" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
                <a class="" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another
                    action</a>
                <div class=""></div>
                <a class="" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else
                    here</a>
            </div>
        </li>
        <li class="relative">
            <a class="text-black/50 text-[0px] xl:text-sm block whitespace-nowrap leading-normal py-[22px] px-[5px] lg:py-[22px] lg:px-[5px] xl:py-[17px] xl:px-[13px]"
                href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <img class="w-[30px] h-[30px] rounded-full -mt-[9px] mr-0.5 -mb-[6px] ml-0 inline" alt="Avatar"
                    src="images/login.png">
                Osahan
            </a>
            <div class="hidden" aria-labelledby="userDropdown">
                <a class="" href="account.html"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My
                    Account</a>
                <a class="" href="subscriptions.html"><i class="fas fa-fw fa-video"></i> &nbsp;
                    Subscriptions</a>
                <a class="" href="settings.html"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                <div class=""></div>
                <a class="" href="#" data-toggle="modal" data-target="#logoutModal"><i
                        class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
            </div>
        </li>
    </ul>
</template>
