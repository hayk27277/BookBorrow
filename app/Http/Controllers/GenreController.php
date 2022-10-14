<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Repositories\WidgetRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GenreController extends Controller
{
    public function __construct(
        private WidgetRepository $widgetRepository
    ){}

    public function getBooksByGenreName(
        string           $genreName,
        Book             $bookModel
    ): View|Factory|Application
    {
        $genre = Genre::where('name', $genreName)->firstOrFail();

        $books = $bookModel->whereGenre($genre)->paginate();

        return view('pages.main',
            $this->widgetRepository->getWidgetsData() + compact('books')
        );
    }
}
