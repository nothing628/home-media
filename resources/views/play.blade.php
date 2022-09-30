@extends('layouts.guest')

@section('content')
    <div class="max-w-6xl mx-auto">
        <video width="640" controls class="w-full mb-4">
            <source src="{{ $url }}" type="video/mp4">
            </source>
        </video>

        <video-title title="{{ $video->title }}" :views="20000"></video-title>
        <video-channel channel-name="Administrator" channel-avatar="{{ asset('images/login.png') }}"
            :channel-subscriber-count="1000000000" is-channel-verified
            published-at="{{ $video->updated_at->toISOString() }}">
        </video-channel>
        <video-description description="Lorem ipsum" :tags="['test']"></video-description>
    </div>
@endsection

@section('footer')
    <x-footer.mini-footer></x-footer.mini-footer>
@endsection
