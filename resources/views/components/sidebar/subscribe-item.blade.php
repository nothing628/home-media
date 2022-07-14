<li>
    <a class="text-white inline-block overflow-hidden py-1.5 text-ellipsis whitespace-nowrap w-full" href="{{ $href }}">
        <img class="w-7 h-7 rounded-full mr-[14px] max-w-full" alt="" src="{{ $img }}">
        {{ $title }}
        @if ($notifyCount > 0)
            <span class="">{{ $notifyCount }}</span>
        @endif
    </a>
</li>
