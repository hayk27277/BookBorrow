<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Services\WidgetService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SearchController extends Controller
{
   public function searchBooks(Request $request, WidgetService $widgetService): View
   {
       $query = $request->q;

       $books = Book::where('title', 'like', "%$query%")
           ->orWhere('author', 'like', "%$query%")
           ->paginate();

       return view('pages.search',
           $widgetService->getWidgetsData() + [
               'books' =>$books
           ]
       );
   }
}
