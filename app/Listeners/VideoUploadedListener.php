<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Jobs\EncodeVideoJob;
use App\Jobs\GenerateVideoThumbnailJob;
use App\Events\VideoUploaded;

class VideoUploadedListener implements ShouldQueue
{
    /**
     * The time (seconds) before the job should be processed.
     *
     * @var int
     */
    public $delay = 5;

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

        EncodeVideoJob::dispatch($video);
        GenerateVideoThumbnailJob::dispatch($video);
    }
}
