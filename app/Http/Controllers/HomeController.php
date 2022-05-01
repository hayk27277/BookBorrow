<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $view = 'pages.' . ($user->is_librarian ? 'librarian' : 'reader') . '.home';

        return view($view);
    }
}
