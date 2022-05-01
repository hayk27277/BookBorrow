<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/{genre_name}/books', [GenreController::class, 'getBooksByGenreName'])
    ->name('genreBooks');
Route::get('book/{id}', [BookController::class, 'show'])->name('book.show');
Route::get('/search', [SearchController::class, 'searchBooks'])->name('search');
Route::get('/home', [HomeController::class, 'index'])
    ->middleware('auth');

Route::middleware('librarian')->group(function () {
    Route::resource('books', BookController::class);
});

Auth::routes();

