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

    public function storeVideoUpload(Request $request)
    {
        $allData = $request->only(['title']);
        $videoFile = $request->file('file');

        if ($videoFile) {
            $extension = $videoFile->extension();
            $name = $videoFile->getFilename();
            $videoFile->move(storage_path('uploads'), $name . '.' . $extension);
        }

        $video = new Video();
        $video->title = $allData['title'];
        $video->save();

        return redirect()->to('upload')->with('video', $video);
    }
}
