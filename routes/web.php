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

Route::get('/characters', function() {
    return view('pages.characters');
})->name('characters');

Route::get('/', function() {

    $series = config('series');

   return view('pages.comics', $series);
})->name('comics');

Route::get('/{id}', function($id) {

    $series = collect(config('series'));

    $selectedSerie = $series->firstWhere('id', $id);
    if ( $selectedSerie === null ) abort(404);

    return view('pages.serie', $series);
})->name('serie');

Route::get('/movies', function() {
    return view('pages.movies');
})->name('movies');

Route::get('/TV', function() {
    return view('pages.TV');
})->name('TV');

Route::get('/games', function() {
    return view('pages.games');
})->name('games');

Route::get('/collectibles', function() {
    return view('pages.collectibles');
})->name('collectibles');

Route::get('/videos', function() {
    return view('pages.videos');
})->name('videos');

Route::get('/fans', function() {
    return view('pages.fans');
})->name('fans');

Route::get('/news', function() {
    return view('pages.news');
})->name('news');

Route::get('/shop', function() {
    return view('pages.shop');
})->name('shop');

/*
Create un nuovo progetto Laravel, su cui lavoreremo sia oggi che domani.
Oggi concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.
Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.

BONUS:
Create più pagine istituzionali che condividono lo stesso layout
*/
