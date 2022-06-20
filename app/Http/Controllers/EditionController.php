<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Edition;

class EditionController extends Controller
{
    public function create($id)
    {
        // $book = Book::findOrFail($id);
        // return view('new_edition', compact('book'));
    }

    public function store(Request $request)
    {
        // $rules = array(
            
        // );
        // $this->validate($request, $rules);
        $edition = new Edition;
        $edition->book_id = $request->book_id;
        $edition->image_url = $request->image_url;
        $edition->publisher = $request->publisher;
        $edition->edition_year = $request->edition_year;
        $edition->pages = $request->pages;
        $edition->cover_type = $request->cover_type;        
        $edition->save();

        //return redirect('book/edition' . $edition->book_id);
    }
}