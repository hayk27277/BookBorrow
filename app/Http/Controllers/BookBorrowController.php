<?php

namespace App\Http\Controllers;

use App\Enums\BorrowStatus;
use App\Models\Borrow;
use Illuminate\Support\Facades\Auth;

class BookBorrowController extends Controller
{
    public function store(int $bookId)
    {
        Borrow::create([
            'reader_id' => Auth::id(),
            'book_id' => $bookId,
            'status' => BorrowStatus::PENDING
        ]);

        return redirect()->back()->with('success', 'Book borrowed successfully!');
    }
}
