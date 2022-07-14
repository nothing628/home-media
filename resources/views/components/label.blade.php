@props(['value'])

<label {{ $attributes->merge(['class' => 'text-xs font-semibold mb-[5px]']) }}>
    {{ $value ?? $slot }}
</label>
