<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class GenerateVideoThumbnail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $path;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->generateThumbnail($this->path);
    }

    protected function generateThumbnail($path) {
        $fileinfo = pathinfo(storage_path($path));
        $fileoutput = $fileinfo['filename'] . ".jpg";
        $openner = FFMpeg::open($path);
        $durations = $openner->getDurationInSeconds();
        $screentime = intdiv($durations, 10);

        $screenshot = $openner->getFrameFromSeconds($screentime);
        $screenshot->export()->save("public/$fileoutput");
    }
}
