<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, "index"]);
Route::get('/about', [PageController::class, "about"]);
Route::get('/blog', [PageController::class, "blog"]);
Route::get('/staff', [PageController::class, "staff"]);
Route::get('/Location', [PageController::class, "Location"]);

// Route::get('/', 'App\Http\Controllers\PageController@index');
// Route::get('/', 'PageController@index'); Doesn't work
