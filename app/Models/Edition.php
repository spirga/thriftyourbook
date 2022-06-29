<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Edition extends Model
{
    protected $fillable = [
        'book_id',
        'image_url',
        'publisher',
        'edition_year',
        'pages',
        'cover_type',
    ];

    use HasFactory; 
    public function book() {
        return $this->belongsTo(Book::class);
    }
    public function listings() {
        return $this->hasMany(Listing::class);
    }
}