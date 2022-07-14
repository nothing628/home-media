<li class="list-item relative">
    <dropdown-container href="{{ $href }}" title="{{ $title }}" :active="{{ isset($active) ? 'true' : 'false' }}">
        {{ $slot }}
        @if (isset($dropdown))
            <template #dropdown>
                {{ $dropdown }}
            </template>
        @endif
    </dropdown-container>
</li>
