<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Services\WidgetService;
use Illuminate\Contracts\View\View;

class MainController extends Controller
{
    /**
     * @param WidgetService $widgetService
     * @return View
     */
    public function index(WidgetService $widgetService): view
    {
        return view('pages.main',
            $widgetService->getWidgetsData() + [
                'books' => Book::paginate()
            ]);
    }
}
