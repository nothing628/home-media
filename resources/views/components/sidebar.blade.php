<ul
    class="flex flex-col mb-0 list-none fixed py-0.5 z-[9] min-h-full w-[90px] from-[#07bf67] to-[#0cded5] bg-gradient-to-br md:w-[225px] md:h-full">
    <x-sidebar.menu-item title="Home" href="#" active>
        <i class="fas fa-fw fa-home"></i>
    </x-sidebar.menu-item>
    <x-sidebar.menu-item title="Channels" href="#">
        <i class="fas fa-fw fa-users"></i>
    </x-sidebar.menu-item>
    <x-sidebar.menu-item title="Upload Video" href="#">
        <i class="fas fa-fw fa-cloud-upload-alt"></i>
    </x-sidebar.menu-item>
    <x-sidebar.menu-item title="History" href="#">
        <i class="fas fa-fw fa-history"></i>
    </x-sidebar.menu-item>
    <x-sidebar.menu-item title="Categories" href="#">
        <i class="fas fa-fw fa-list-alt"></i>

        <x-slot:dropdown>
            <x-sidebar.dropdown-item href="">Movie</x-sidebar.dropdown-item>
            <x-sidebar.dropdown-item href="">Music</x-sidebar.dropdown-item>
            <x-sidebar.dropdown-item href="">Television</x-sidebar.dropdown-item>
        </x-slot:dropdown>
    </x-sidebar.menu-item>
    <li class="border-t border-t-[#07af57] py-[7px] px-[14px] mt-1.5 mb-4">
        <h6 class="text-white text-sm font-semibold mb-[15px] mt-[9px]">SUBSCRIPTIONS</h6>
        <ul>
            <x-sidebar.subscribe-item notify-count="0" img="{{ asset('images/login.png')}}" href="" title="Your Life"></x-sidebar.subscribe-item>
            <x-sidebar.subscribe-item notify-count="2" img="{{ asset('images/login.png')}}" href="" title="Unboxing"></x-sidebar.subscribe-item>
            <x-sidebar.subscribe-item notify-count="0" img="{{ asset('images/login.png')}}" href="" title="Product / Service"></x-sidebar.subscribe-item>
        </ul>
    </li>
</ul>
