<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Repositories\WidgetRepository;
use Illuminate\Contracts\View\View;

class MainController extends Controller
{
    public function __construct(
        private WidgetRepository $widgetRepository
    ){}

    public function index(): view
    {
        return view('pages.main',
            $this->widgetRepository->getWidgetsData() + [
                'books' => Book::paginate()
            ]);
    }
}
