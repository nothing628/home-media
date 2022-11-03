<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function showHomePageView()
    {
        $videos = Video::all();

        return Inertia::render("HomePage", [
            'videos' => $videos
        ]);
    }
}
