<li class="list-item relative">
    <a class="block text-white text-sm text-center font-semibold py-2 px-[14px] w-[90px] md:w-[225px] md:text-left xl:px-3 xl:py-[14px] {{ isset($active) ? 'bg-white/20' : '' }}"
        href="{{ $href }}">
        {{ $slot }}
        <span class="block text-[11px] m-0 md:inline md:text-[13px] md:ml-[11px]">{{ $title }}</span>
        @if (isset($dropdown))
        <i class="fas fa-fw fa-angle-down float-right text-center hidden md:block w-4"></i>
        @endif
    </a>

    @if (isset($dropdown))
        <div class="absolute md:static left-[90px] top-0 block float-none mx-0 md:mx-4 py-2 bg-white border border-black/10 rounded-sm min-w-[10rem]">
            {{ $dropdown }}
        </div>
    @endif
</li>
