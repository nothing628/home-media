<li>
    <a class="text-white inline-block overflow-hidden py-1.5 text-ellipsis whitespace-nowrap w-full" href="{{ $href }}">
        <img class="w-7 h-7 rounded-full mr-[14px] max-w-full inline" alt="" src="{{ $img }}">
        {{ $title }}
        @if ($notifyCount > 0)
            <span class="float-right mt-[7px] px-1 py-[2.5px] leading-none absolute right-7 rounded-sm from-[#ffc107] to-[#fffc07] bg-gradient-to-br inline-block text-[#212529] text-center text-[10px] font-bold whitespace-nowrap">{{ $notifyCount }}</span>
        @endif
    </a>
</li>
