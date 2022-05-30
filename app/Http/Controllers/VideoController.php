<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function showUploadPageView()
    {
        return view('upload');
    }

    public function showVideoPage()
    {
        //
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

        return redirect()->to('upload')->with('video', $video);
    }
}
