<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Models\Book;
use App\Models\Borrow;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class BookController extends Controller
{
    /**
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(int $id): View|Factory|Application
    {
        $book = Book::with('genres')->find($id);

        $borrowCount = Borrow::where('book_id', $book->id)->count();

        $availableBooksCount = $book->in_stock - $borrowCount;

        return view('pages.book-detail', compact(
                'book',
                'availableBooksCount'
            )
        );
    }
}
