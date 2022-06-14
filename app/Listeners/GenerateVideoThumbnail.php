<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use App\Events\VideoUploaded;

class GenerateVideoThumbnail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(VideoUploaded $event)
    {
        $video = $event->video;
        $video_public_path = $video->public_path;
        $video_thumb_path = $this->generateThumbnail($video_public_path);
    }

    protected function generateThumbnail($path)
    {
        $fileinfo = pathinfo(storage_path($path));
        $fileoutput = $fileinfo['filename'] . ".jpg";
        $output = "public/$fileoutput";
        $openner = FFMpeg::open($path);
        $durations = $openner->getDurationInSeconds();
        $screentime = intdiv($durations, 10);

        $screenshot = $openner->getFrameFromSeconds($screentime);
        $screenshot->export()->save($output);

        return $output;
    }
}
