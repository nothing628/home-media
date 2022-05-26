<x-guest-layout>
    <form method="post" enctype="multipart/form-data">
        <h1 class="text-3xl mb-4">Upload New Video</h1>

        <div class="w-full mb-4">
            <label class="font-bold text-sm mb-2 inline-block w-full" for="title">Title :</label>
            <input class="border border-gray-400 text-slate-700 h-8 w-full px-2 rounded-md text-base outline-0" type="text" name="title" id="title" />
        </div>

        <div class="w-full mb-4">
            <label class="font-bold text-sm mb-2 inline-block w-full" for="file">Video :</label>
            <input accept="video/mp4" type="file" name="file" id="file" />
        </div>
        <div class="w-full mb-4">
            <button class="bg-green-600 text-white px-4 py-3 border border-green-600 rounded-md">Upload <i class="fas fa-cloud-upload"></i></button>
        </div>
    </form>
</x-guest-layout>
