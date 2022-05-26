<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHomePageView()
    {
        return view('home');
    }

    public function showUploadPageView()
    {
        return view('upload');
    }
}
