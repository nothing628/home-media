@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-sm rounded-sm border border-[#dcdfdf] bg-transparent w-full py-[6px] px-3']) !!}>
