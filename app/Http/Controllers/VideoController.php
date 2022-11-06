<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VideoProcessor\Base;
use App\Models\Video;
use App\Events\VideoUploaded;
use Inertia\Inertia;

class VideoController extends Controller
{
    public function showUploadPageView()
    {
        return Inertia::render('Upload');
    }

    public function testHls()
    {
        return Inertia::render('VideoTest');
    }

    public function showVideoPage(Video $video)
    {
        return Inertia::render("VideoPlayPage", ['video' => $video, 'url' => $video->media_playlist_url]);
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
        $videoModel = $this->getOrCreateVideoModel($data['dzuuid']);

        try {
            $chunkFilename = $data['dzuuid'];
            $chunkFileDestination = storage_path('app/public/' . $chunkFilename);

            $this->appendFile($file->getPathname(), $chunkFileDestination, $data['dzchunkbyteoffset']);

            if ($isLastChunk) {
                $originalName = $file->getClientOriginalName();
                $originalPathinfo = pathinfo($originalName);
                $fileExt = $originalPathinfo['extension'];
                $filename = $file->getFilename() . "." . $fileExt;
                $fileRelative = 'app/public/' . $filename;
                $filepath = storage_path($fileRelative);

                // move chunk file destination to real file name
                $this->renameFile($chunkFileDestination, $filepath);
                $videoModel->filepath = $filepath;
                $videoModel->status = Base::VIDEO_COMPLETE;
                $videoModel->save();

                return response()->json([
                    'success' => true,
                    'filename' => $fileRelative,
                    'video' => $videoModel
                ]);
            }
        } catch (\Exception $ex) {
            return response()->json(['message' => $ex->getMessage()], 400);
        }

        return response()->json([
            'success' => true,
            'video' => $videoModel
        ]);
    }

    protected function getOrCreateVideoModel($uploadId)
    {
        $video = $this->getVideoModel($uploadId);

        if ($video) return $video;

        $video = $this->createVideoModel($uploadId);

        return $video;
    }

    protected function getVideoModel($uploadId)
    {
        return Video::where('upload_id', $uploadId)
            ->first();
    }

    protected function createVideoModel($uploadId)
    {
        $video = new Video();
        $video->title = '';
        $video->upload_id = $uploadId;
        $video->status = Base::VIDEO_UPLOADING;
        $video->save();

        return $video;
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

    public function storeVideoUpload(Video $video, Request $request)
    {
        $allData = $request->only(['title', 'description']);

        $video->title = $allData['title'];
        $video->description = $allData['description'];
        $video->save();

        VideoUploaded::dispatch($video);

        return response()->json([
            'video' => $video
        ]);
    }
}
