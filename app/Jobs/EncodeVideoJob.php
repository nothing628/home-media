<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use FFMpeg\Format\Video\X264;
use FFMpeg\FFMpeg as FFMpegBin;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use App\Models\Video;

class EncodeVideoJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $timeout = 7200;

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

        $this->encodeVideo($videoPublicPath);
    }

    public function encodeVideo($videoPath)
    {
        $lowBitrate = (new X264)->setKiloBitrate(1000);
        $midBitrate = (new X264)->setKiloBitrate(3000);
        $highBitrate = (new X264)->setKiloBitrate(5000);

        $processOutput = FFMpeg::fromDisk('local')
            ->open($videoPath)
            ->exportForHLS()
            ->setSegmentLength(10)
            ->setKeyFrameInterval(48)
            ->addFormat($lowBitrate, function ($media) {
                $media->addFilter('scale=w=640:h=480');
            })
            ->addFormat($midBitrate, function ($media) {
                $media->addFilter('scale=w=1280:h=720');
            })
            ->addFormat($highBitrate, function ($media) {
                $media->addFilter('scale=w=1920:h=1080');
            })
            // ->useSegmentFilenameGenerator(function ($name,$format,$key, callable $segments, callable $playlists ) {
            //     $segments("{$name}-{$format->getKiloBitrate()}-{$key}-%03d.ts");
            //     $playlists("{$name}-{$format->getKiloBitrate()}-{$key}.m3u8");
            // })
            ->save('test.m3u8');

        $processOutput->all();
    }

    public function storeMasterPlaylist($masterPlaylistPath, Video $video)
    {
        $video->master_playlist_path = $masterPlaylistPath;
        $video->save();
    }
}
