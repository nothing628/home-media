<x-guest-layout>
    <div class="max-w-6xl mx-auto">
        <video width="640" controls class="w-full mb-4">
            <source src="{{ $url }}" type="video/mp4">
            </source>
        </video>

        <video-title title="{{ $video->title }}" :views="20000"></video-title>
        <video-channel channel-name="Administrator" channel-avatar="{{ asset('images/login.png') }}"
            :channel-subscriber-count="1000000000" is-channel-verified published-at="{{ $video->updated_at->toISOString() }}">
        </video-channel>

        <h1 class="text-2xl font-bold">{{ $video->title }}</h1>
        <p class="text-sm text-gray-700">{{ $video->updated_at->diffForHumans() }}</p>
    </div>
</x-guest-layout>
