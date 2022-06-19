<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Edition;
use App\Models\Genre;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['book_title', 'book_author', 'book_description', 'book_year', 'book_language']; 
    public function genres()
{ // FKrelationship
        return $this->belongsToMany(Genre::class, 'book_genre');
    }
    public function bookeditions()
{ // FKrelationship
        return $this->hasMany(Edition::class);
    }
}
