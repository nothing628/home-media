<nav
    class="sticky top-0 z-10 p-0 shadow-sm shadow-[#f2f2f2] bg-white flex items-center justify-start flex-row flex-nowrap">
    &nbsp;&nbsp;
    <button class="mr-2 py-1 px-2">
        <i class="fas fa-bars"></i>
    </button> &nbsp;&nbsp;

    <a class="inline-block py-[5px] mr-1 text-black text-xl whitespace-nowrap" href="{{ url('/') }}">
        MeTube
        <img class="" alt="" src="img/logo.png">
    </a>

    <x-navheader.searchbox></x-navheader.searchbox>
    <x-navheader.rightmenu></x-navheader.rightmenu>
</nav>
