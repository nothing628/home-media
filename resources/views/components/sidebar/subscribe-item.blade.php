<li>
    <a class="text-white inline-block overflow-hidden py-1.5 text-center text-ellipsis whitespace-nowrap w-full font-medium text-[10px] md:text-left md:text-[13px] md:font-normal" href="{{ $href }}">
        <img class="w-7 h-7 rounded-full mx-auto mt-auto mb-1 md:ml-0 md:mt-0 md:mb-0 md:mr-[14px] max-w-full list-item md:inline" alt="" src="{{ $img }}">
        {{ $title }}
        @if ($notifyCount > 0)
            <span class="float-right mt-[7px] px-1 py-[2.5px] leading-none absolute right-7 rounded-sm from-[#ffc107] to-[#fffc07] bg-gradient-to-br hidden md:inline-block text-[#212529] text-center text-[10px] font-bold whitespace-nowrap">{{ $notifyCount }}</span>
        @endif
    </a>
</li>
