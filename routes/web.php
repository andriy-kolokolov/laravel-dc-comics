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
| contains the "web" middleware group. Now only-nav.blade.php something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/comics', [ComicsController::class, 'index'])->name('comics');

Route::get('comics', [ComicsController::class, 'index'])->name('comics.index'); // Index

// Additional routes for CRUD operations:
Route::get('comics/create', [ComicsController::class, 'create'])->name('comics.create'); // Create
Route::post('comics', [ComicsController::class, 'store'])->name('comics.store'); // Store
Route::get('comics/{id}', [ComicsController::class, 'show'])->name('comics.show'); // Show
Route::get('comics/{id}/edit', [ComicsController::class, 'edit'])->name('comics.edit'); // Edit
Route::put('comics/{id}', [ComicsController::class, 'update'])->name('comics.update'); // Update
Route::delete('comics/{id}', [ComicsController::class, 'destroy'])->name('comics.destroy'); // Delete


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
