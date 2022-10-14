<?php

use App\Http\Controllers\BookBorrowController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Librarian\BookController as LibrarianBookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BookSearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/{genre_name}/books', [GenreController::class, 'getBooksByGenreName'])->name('genreBooks');
Route::get('book/{id}', [BookController::class, 'show'])->name('book.show');
Route::get('/search', [BookSearchController::class, 'searchBooks'])->name('search');

Route::middleware('auth')->group(function(){
    Route::get('/home', [HomePageController::class, 'index'])->name('home');

    Route::post('/borrow/{book_id}', [BookBorrowController::class, 'store'])->name('borrow');
});

Route::middleware('librarian')->prefix('librarian')->group(function () {
    Route::resource('books', LibrarianBookController::class);
});

Auth::routes();

