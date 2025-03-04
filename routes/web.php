<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;

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
    return view('index');
});

Route::get('/welcome', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/log', function () {
    return view('login');
});

Route::get('/', [PageController::class, "index"]);
Route::get('/about', [PageController::class, "about"]);
Route::get('/blog', [PageController::class, "blog"]);
Route::get('/staff', [PageController::class, "staff"]);
Route::get('/location', [PageController::class, "Location"]);

Route::get('/register', [RegisterController::class, "index"]);
Route::POST('/register', [RegisterController::class, "create"]);

// Route::get('/', 'App\Http\Controllers\PageController@index');
// Route::get('/', 'PageController@index'); Doesn't work

/*  Note to self : Never paste a video of 100mb or more to project.
    Also, don't let project be bigger than 100mb.
    if pull request fails, rollback git and don't commit more changes
    or turn off system so as not to overwrite the error and cause 
    change to be irreversible. 
*/

