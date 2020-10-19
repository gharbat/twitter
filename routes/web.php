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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", [\App\Http\Controllers\AuthController::class, "login"]);
Route::post("/login", [\App\Http\Controllers\AuthController::class, "loginAction"]);


Route::get("/signup", [\App\Http\Controllers\AuthController::class, "signup"]);
Route::post("/signup", [\App\Http\Controllers\AuthController::class, "signupAction"]);