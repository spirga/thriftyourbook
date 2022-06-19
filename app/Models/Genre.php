<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Genre extends Model
{
    use HasFactory;
    public function book()
    { // FKrelationship
            return $this->belongsToMany(Book::class, 'book_genre');
        }
}
