<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Edition;

class BookController extends Controller
{
    public function index_all()
    {
        $books = Book::with('editions')->get();
        return view('new-listing', compact('books'));
    }
    
    
    public function create()
    {
        return view('new-book');
    }

    public function store(Request $request) {
        $rules = array(
            'book_title' => 'required|min:1|max:100|string',
            'book_language' => 'required|alpha|min:2|max:3',
        );
        $this->validate($request, $rules);
        $book = new Book;
        $book->book_title = $request->book_title;
        $book->book_description = $request->book_description;
        $book->book_year = $request->book_year;
        $book->book_language = $request->book_language;
        $book->save();        
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $book=Book::find($request->id);
        $book->book_title = $request->book_title;
        $book->book_description = $request->book_description;
        $book->book_year = $request->book_year;
        $book->book_language = $request->book_language;
        $book->save();     
        return redirect()->back();
    }

    public function destroy($id)
    {
        Book::findOrFail($id)->delete();
        return redirect()->back();
    }
}