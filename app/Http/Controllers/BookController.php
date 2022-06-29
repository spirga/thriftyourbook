<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Edition;
use App\Models\Listing;

class BookController extends Controller
{
    public function index_all()
    {
        $books = Book::with('editions')->get();
        return view('new-listing', compact('books'));
    }
            // $rules = array(
        //     'book_title' => 'required|min:1|max:100|string',
        //     'book_language' => 'required|alpha|min:2|max:3',
        // );
        // $this->validate($request, $rules);
        // $book = new Book;
        // $book->book_title = $request->book_title;
        // $book->book_description = $request->book_description;
        // $book->book_year = $request->book_year;
        // $book->book_language = $request->book_language;
        // $book->save();        
        //return redirect()->back();
    

    public function store(Request $request) {
        $book = Book::UpdateOrCreate([
            'id' => $request->get('id'),
         ],
         [
            'book_title'  => $request->get('book_title'),
            'book_author'  => $request->get('book_author'),
            'book_description'  => $request->get('book_description'),
            'book_year'  => $request->get('book_year'),
            'book_language'  => $request->get('book_language'),
        ]);
        $edition = Edition::UpdateOrCreate([
            'id' => $request->get('eid'),
         ],
         [
            'book_id' => $book->id,
            'image_url'  => $request->get('image_url'),
            'publisher'  => $request->get('publisher'),
            'edition_year'  => $request->get('edition_year'),
            'pages'  => $request->get('pages'),
            'cover_type'  => $request->get('cover_type'),
        ]);
        $listing = new Listing();
        $listing->user_id = $request->get('user_id');
        $listing->edition_id = $edition->id;
        $listing->listing_description  = $request->get('listing_description');
        $listing->price  = $request->get('price');
        $listing->condition  = $request->get('condition');
        $listing->shipping_type  = $request->get('shipping_type');
        $listing->image_url  = $request->get('listing_image');
        $listing->save();

        //var_dump($request->all());exit;
        
        return redirect()->route('new-listing1')->with('message', 'Listing added succesfuly!');
    }

    public function destroy($id)
    {
        Book::findOrFail($id)->delete();
        return redirect()->back();
    }
}