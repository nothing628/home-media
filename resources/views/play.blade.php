<x-guest-layout>
    <div>
        <video width="640" controls class="w-full mb-4">
            <source src="{{$url}}" type="video/mp4"></source>
        </video>

        <h1 class="text-2xl font-bold">{{$video->title}}</h1>
        <p class="text-sm text-gray-700">{{$video->updated_at->diffForHumans()}}</p>
    </div>
</x-guest-layout>
