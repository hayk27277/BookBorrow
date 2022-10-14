<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Repositories\WidgetRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookSearchController extends Controller
{
    public function __construct(
        private WidgetRepository $widgetRepository
    ){}

    public function searchBooks(Request $request ): View
   {
       $query = $request->q;

       $books = Book::where('title', 'like', "%$query%")
           ->orWhere('author', 'like', "%$query%")
           ->paginate();

       return view('pages.search',
           $this->widgetRepository->getWidgetsData() + [
               'books' =>$books
           ]
       );
   }
}
