<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class HomeController extends Controller
{
    public function showHomePageView()
    {
        $videos = Video::all();

        return view('home', ['videos' => $videos]);
    }
}
