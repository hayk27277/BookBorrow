<?php

namespace App\Repositories;

use App\Enums\BorrowStatus;
use App\Models\Borrow;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class WidgetRepository
{
    public function getWidgetsData(): array
    {
        return Cache::remember('widgetData', 60, function () {
            return [
                'userCount' => User::count(),
                'genreCount' => Genre::count(),
                'activeBookRentalsCount' => Borrow::where('status', BorrowStatus::ACCEPTED)->count(),
                'genres' => Genre::all(),
            ];
        });
    }
}
