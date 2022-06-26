<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Listing;
use App\Models\Edition;
use App\Models\Book;
use App\Models\User;

class ListingController extends Controller
{
    public function index_all()
    {
        $listings = Listing::with('edition.book')->groupBy('edition_id')->get();
        return view('store', compact('listings'));
    }

    public function index_one($id)
    {   
        $listing = Listing::where('id', '=', $id)->get();
        $user_id = $listing->first()->user_id;
        $user = User::where('id', '=', $user_id)->get();
        $edition_id = $listing->first()->edition_id;
        $edition = Edition::where('id', '=', $edition_id)->get();
        $book_id = $edition->first()->book_id;
        $book = Book::where('id', '=', $book_id);
        
        return view('listing', compact('listing', 'edition', 'book', 'user'));
    }

    public function create()
    {
        return view('new-listing');
    }

    public function store(Request $request)
    {
        // $rules = array(
            
        // );
        // $this->validate($request, $rules);
        $listing = new Listing;
        $listing->listing_description = $request->listing_description;
        $listing->price = $request->price;
        $listing->condition = $request->condition;
        $listing->ship_incl_price = $request->ship_incl_price;
        $listing->shipping_type = $request->shipping_type;
        $listing->save();
        //return redirect('listing/');
    }
    
    public function search(Request $request) {
    $search = $request->search;
    $language = $request->input('language');
    $genre = $request->input('genre');
    $condition = $request->input('condition');
    dump($condition);
    $listings =collect();

    if ($search != null) {
        $books = Book::query()->where('book_title' , 'like', '%' .$search. '%')->orwhere('book_author', 'like', '%' .$search. '%')->get();
        $listing = Listing::all();
        foreach ($listing as $listing) {
            $edition_id = $listing->edition_id;
            $edition = Edition::where('id', $edition_id)->first();
            $checkid=$edition->book_id;
            $a = 0;
                foreach ($books as $book) {
                    $id = $book->id;
                    if ($id==$checkid) $a=1;
                }
            if ($a == 1){
                $listings ->  push($listing);
            }
        }
    }
    // if ($genre != null) {
    //     $book_collection = [];
    //     foreach ($genre as $genre) {
    //     $genres = Genre::where('genre' , '=' , $genre)->get();
    //     foreach ($genres as $genres) {
    //         $genres_books=join('genre' , '=' , $genre)->get();

    //       $book_collection[] = $book->id;
    //     }
    //     }
    //     $listing = Listing::all();
    //     foreach ($listing as $listing) {
    //         $edition_id = $listing->edition_id;
    //         $edition = Edition::where('id', $edition_id)->first();
    //         $checkid=$edition->book_id;
    //         $a = 0;
    //         foreach ($book_collection as $collection){
    //             if ($collection == $checkid) $a=1;
    //         }
            
    //             if ($a == 1){
    //                 $listings ->  push($listing);
    //             }
                
    //         }
        
    // }
    if ($language != null) {
       $book_collection = [];
        foreach ($language as $language) {
        $books = Book::where('book_language' , '=' , $language)->get();
        foreach ($books as $book) {
          $book_collection[] = $book->id;
        }
        }
        $listing = Listing::all();
        foreach ($listing as $listing) {
            $edition_id = $listing->edition_id;
            $edition = Edition::where('id', $edition_id)->first();
            $checkid=$edition->book_id;
            $a = 0;
            foreach ($book_collection as $collection){
                if ($collection == $checkid) $a=1;
            }
            
                if ($a == 1){
                    $listings ->  push($listing);
                }
                
            }
        }
    
        if ($condition != null) {
            foreach ($condition as $condition) {
                $listing = Listing::where('condition' , '=' , $condition)->get();
                foreach ($listing as $listing) {
                    $listings ->  push($listing);
                  }
              }
             }
        
     return view('store', compact('listings'));
    
}
}


// $book_collection = collect();
// foreach ($language as $language) {
// $books = Book::query()->where('book_language' , '=' , $language)->get();
// foreach ($books as $books){
//     if (!$book_collection->contains('id', $books->id)) $book_collection ->  push($books);
// }
// }