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
    $comics = config('comics');
    return view('home', compact('comics'));
});

Route::get('/characters', function() {
    return view('partials.characters');
});

Route::get('/comics', function() {
    return view('partials.comics');
});

Route::get('/movies', function() {
    return view('partials.movies');
});

Route::get('/tv', function() {
    return view('partials.tv');
});

Route::get('/games', function() {
    return view('partials.games');
});

Route::get('/collectibles', function() {
    return view('partials.collectibles');
});

Route::get('/videos', function() {
    return view('partials.videos');
});

Route::get('/fans', function() {
    return view('partials.fans');
});

Route::get('/news', function() {
    return view('partials.news');
});

Route::get('/shop', function() {
    return view('partials.shop');
});




