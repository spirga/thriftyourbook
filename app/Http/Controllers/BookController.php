<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Edition;

class BookController extends Controller
{
    public function create()
    {
        return view('add_book');
    }

    public function store(Request $request) {
        // $rules = array(
            
        // );
        //$this->validate($request, $rules);
        $book = new Book;
        $book->book_title = $request->book_title;
        $book->book_description = $request->book_description;
        $book->book_year = $request->book_year;
        $book->book_language = $request->book_language;
        $book->save();
        
        //return
        
    }
}