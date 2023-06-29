<?php

use App\Http\Controllers\Admin\ComicsController;
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
    return view('home');
});

Route::get('/comics', [ComicsController::class, 'index'])->name('comics');



Route::group(['prefix' => ''], function () {
    Route::get('/characters', function () {
        return view('other.characters');
    })->name('characters');

    Route::get('/movies', function () {
        return view('other.movies');
    })->name('movies');

    Route::get('/tv', function () {
        return view('other.tv');
    })->name('tv');

    Route::get('/games', function () {
        return view('other.games');
    })->name('games');

    Route::get('/collectibles', function () {
        return view('other.collectibles');
    })->name('collectibles');

    Route::get('/videos', function () {
        return view('other.videos');
    })->name('videos');

    Route::get('/fans', function () {
        return view('other.fans');
    })->name('fans');

    Route::get('/news', function () {
        return view('other.news');
    })->name('news');

    Route::get('/shop', function () {
        return view('other.shop');
    })->name('shop');
});
