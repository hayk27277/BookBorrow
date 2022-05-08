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
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('librarian.books.index');
    }

    /**
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('pages.librarian.books.create');

    }

    /**
     * @param BookStoreRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(BookStoreRequest $request): Redirector|Application|RedirectResponse
    {
        $book = Book::create(
            $request->validated()
        );

        $book->genres()->attach($request->genres);

        return redirect()->route('books.index')
            ->with('success', 'Book N' . $book->isbn . 'updated successfully!');
    }

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

    /**
     * @param Book $book
     * @return Application|Factory|View
     */
    public function edit(Book $book)
    {
        return view('pages.librarian.books.edit', compact('book'));
    }

    /**
     * @param BookStoreRequest $request
     * @param Book $book
     * @return mixed
     */
    public function update(BookStoreRequest $request, Book $book): mixed
    {
        $book->update(
            $request->validated()
        );

        $book->genres()->sync($request->genres);

        return redirect()->route('books.index')
            ->with('success', 'Book N' . $book->isbn . 'updated successfully!');
    }

    /**
     * @param Book $book
     * @return RedirectResponse
     */
    public function destroy(Book $book): RedirectResponse
    {
        $bookDeleted = $book
            ->delete();

        if (!$bookDeleted) {
            return redirect()->back()
                ->with('error', 'Something went wrong please try again!');
        }

        return redirect()->back()
            ->with('success', 'Book deleted successfully!');
    }
}
