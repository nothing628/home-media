<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use App\Models\Video;

class GenerateVideoThumbnailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $video;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Video $video)
    {
        $this->video = $video;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $video = $this->video;
        $video_public_path = $video->public_path;
        $video_thumb_path = $this->generateThumbnail($video_public_path);

        $video->thumb_path = $video_thumb_path;
        $video->save();
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
