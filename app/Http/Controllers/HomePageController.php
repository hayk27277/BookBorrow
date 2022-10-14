<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function index(): Factory|View|Application
    {
        $user = Auth::user();

        if ($user->is_librarian) {
            return view('pages.librarian.books.index');
        }

        return view('pages.reader.home');
    }
}
