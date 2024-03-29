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

class UpdateVideoDurationJob implements ShouldQueue
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
        $videoPublicPath = $video->public_path;
        $duration = $this->getDuration($videoPublicPath);

        $this->storeDuration($duration, $video);
    }

    public function getDuration($videoPath)
    {
        $duration = FFMpeg::fromDisk('local')
            ->open($videoPath)
            ->getDurationInSeconds();

        return $duration;
    }

    public function storeDuration($duration, Video $video)
    {
        $video->duration = $duration;
        $video->save();
    }
}
