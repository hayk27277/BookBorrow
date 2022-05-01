<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "authors",
        "description",
        "released_at",
        "cover_image",
        "pages",
        "language_code",
        "isbn",
        "in_stock",
    ];

    protected $perPage = 20;

    public function borrows()
    {
        return $this->hasMany(Borrow::class, 'book_id');
    }

    public function activeBorrows()
    {
        return $this->getAllBorrows()->where('status', '=', 'ACCEPTED');
    }

    public function authors()
    {
        return $this->belongsToMany(User::class);
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'book_genre');
    }

    public function whereGenre(Genre $genre)
    {
        return $this->whereHas('genres', function ($query) use ($genre) {
            $query->where('genres.id', $genre->id);
        });
    }
}
