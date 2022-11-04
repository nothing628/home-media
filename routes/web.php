<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VideoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', [HomeController::class, 'showHomePageView'])->name('home');
Route::get('/video/{video}', [VideoController::class, 'showVideoPage'])->name('video.show');
Route::get('/videotest', [VideoController::class, 'testHls'])->name('video.test');
Route::get('/upload', [VideoController::class, 'showUploadPageView'])->name('upload');
Route::post('/upload', [VideoController::class, 'storeVideoUpload']);
Route::get('/dashboard', [DashboardController::class, 'showDashboardView'])
    ->middleware(['auth'])
    ->name('dashboard');

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
