<?php

use Illuminate\Support\Facades\Route;

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

Route::group(["middleware"=> \App\Http\Middleware\Authenticate::class], function (){
    Route::get("/", [\App\Http\Controllers\HomeController::class, "home"]);
    Route::get('/profile/{id}', [\App\Http\Controllers\TweetController::class, "index"]);
    Route::post("/insert/tweet", [\App\Http\Controllers\TweetController::class, "insert"]);
    Route::get("/follow/{id}", [\App\Http\Controllers\FollowController::class, "follow"]);
    Route::get("/unfollow/{id}", [\App\Http\Controllers\FollowController::class, "unfollow"]);
    Route::get("/notifications", [\App\Http\Controllers\NotificationController::class, "index"]);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
