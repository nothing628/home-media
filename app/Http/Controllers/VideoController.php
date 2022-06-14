<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Events\VideoUploaded;

class VideoController extends Controller
{
    public function showUploadPageView()
    {
        return view('upload');
    }

    public function showVideoPage(Video $video)
    {
        $public_path = basename($video->filepath);
        $public_url = asset('storage/' . $public_path);
        return view('play', ['video' => $video, 'url' => $public_url]);
    }

    protected function storeVideoFile($file)
    {
        if (is_null($file)) {
            return null;
        }

        $extension = $file->extension();
        $name = $file->getFilename();
        $path = storage_path('app/public');
        $file->move($path, $name . '.' . $extension);

        return $path . "/" . $name . "." . $extension;
    }

    public function storeVideoUpload(Request $request)
    {
        $allData = $request->only(['title']);
        $videoFile = $request->file('file');
        $videoFilePath = $this->storeVideoFile($videoFile);

        $video = new Video();
        $video->title = $allData['title'];
        $video->filepath = $videoFilePath;
        $video->save();

        VideoUploaded::dispatch($video);

        return view('upload-success');
    }
}
