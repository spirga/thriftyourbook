<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Edition extends Model
{
    use HasFactory; 
    public function book() {
        return $this->belongsTo(Book::class);
    }
    public function listings() {
        return $this->hasMany(Listing::class);
    }
}