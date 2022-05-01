<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Services\WidgetService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GenreController extends Controller
{
    /**
     * @param string $genreName
     * @param WidgetService $widgetService
     * @return Application|Factory|View
     */
    public function getBooksByGenreName(
        string        $genreName,
        WidgetService $widgetService,
        Book          $bookModel
    ): View|Factory|Application
    {
        $genre = Genre::where('name', $genreName)->firstOrFail();

        $books = $bookModel->whereGenre($genre)->paginate();

        return view('pages.main',
            $widgetService->getWidgetsData() + compact('books')
        );
    }
}
