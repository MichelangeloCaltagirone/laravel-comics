<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $comicsList = config("db.comics");
    return view('pages/home', compact("comicsList"));
});

Route::get('/{index}', function (string $index){
    $comics = config("db.comics");
    $comic = $comics[$index];
    return view('pages/show', compact("comic"));
})->name("comic.show");
