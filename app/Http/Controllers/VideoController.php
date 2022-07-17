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

    public function handleUploadChunk(Request $request)
    {
        $data  = $request->only([
            'dzuuid',
            'dzchunkindex',
            'dztotalfilesize',
            'dzchunksize',
            'dztotalchunkcount',
            'dzchunkbyteoffset',
        ]);
        $isLastChunk = $data['dzchunkindex'] + 1 == $data['dztotalchunkcount'];
        $file = $request->file('file');

        try {
            $chunkFilename = $data['dzuuid'];
            $chunkFileDestination = storage_path('app/public/' . $chunkFilename);

            $this->appendFile($file->getPathname(), $chunkFileDestination, $data['dzchunkbyteoffset']);

            if ($isLastChunk) {
                $filename = $file->getClientOriginalName();
                $filepath = storage_path('app/public/' . $filename);

                // move chunk file destination to real file name
                $this->renameFile($chunkFileDestination, $filepath);
            }
        } catch (\Exception $ex) {
            return response()->json(['message' => $ex->getMessage()], 400);
        }

        return response()->json([
            'success' => true
        ]);
    }

    protected function renameFile($sourceFile, $destinationFile)
    {
        $isSuccess = rename($sourceFile, $destinationFile);

        if (!$isSuccess) {
            throw new \Exception("Failed to rename uploaded file to real name");
        }
    }

    protected function appendFile($sourceFile, $destinationFile, $offset)
    {
        $destinationHandle = fopen($destinationFile, 'a+b');
        $sourceHandle = fopen($sourceFile, 'rb');
        $sourceSize = filesize($sourceFile);
        $sourceData = fread($sourceHandle, $sourceSize);

        fseek($destinationHandle, $offset);
        fwrite($destinationHandle, $sourceData, $sourceSize);

        fclose($sourceHandle);
        fclose($destinationHandle);
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
