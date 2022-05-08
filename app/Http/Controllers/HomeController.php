<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->is_librarian) {
            return view('pages.librarian.books.index');
        }

        return view('pages.reader.home');
    }
}
