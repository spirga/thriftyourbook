<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Listing;
use App\Models\Edition;
use App\Models\Book;
use App\Models\Genre;
use App\Models\User;

class ListingController extends Controller
{
    public function index_all()
    {
        $listings = Listing::with('edition.book.genres')->groupBy('edition_id')->get();
        $genres = Genre::all();
        return view('store', compact('listings', 'genres'));
    }

    public function index_all_edition($id) {
        $listings = Listing::with('user', 'edition.book')->where('edition_id', '=', $id)->get();
        return view('listings', compact('listings'));
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
    $genre = $request->input('genres');
    $listings =collect();

    if ($search != null) {
        $books = Book::query()->where('book_title' , 'like', '%' .$search. '%')->orwhere('book_author', 'like', '%' .$search. '%')->get();
        $listing = Listing::with('edition.book.genres')->groupBy('edition_id')->get();
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

    if ($genre != null || $language != null) {
        $book_collection = [];
        if ($genre != null && $language == null){
            $genre_collection = [];
            foreach ($genre as $genre) {
            $genres = Genre::where('genre' , '=' , $genre)->get();
            foreach ($genres as $genres) {
            $genre_collection[] = $genres->id;
            }
            }
            $book = Book::all();
            foreach ($book as $book) {
                $book_genre = $book->genres;
                foreach($book_genre as $book_genre){
                    if (in_array($book_genre->id, $genre_collection)) {
                        if (!in_array($book->id, $book_collection)) $book_collection[] = $book->id;
                    }
                }
            }
        }

        if ($genre == null && $language != null){
            foreach ($language as $language) {
                $books = Book::where('book_language' , '=' , $language)->get();
                foreach ($books as $book) {
                  $book_collection[] = $book->id;
                }
                }
        }

        if ($genre != null && $language != null){

            $book_collection1=[];
            $genre_collection = [];
            foreach ($genre as $genre) {
            $genres = Genre::where('genre' , '=' , $genre)->get();
            foreach ($genres as $genres) {
            $genre_collection[] = $genres->id;
            }
            }
            $book = Book::all();
            foreach ($book as $book) {
                $book_genre = $book->genres;
                foreach($book_genre as $book_genre){
                    if (in_array($book_genre->id, $genre_collection)) {
                        if (!in_array($book->id, $book_collection1)) $book_collection1[] = $book->id;
                    }
                }
            }

            $book_collection2=[];
            foreach ($language as $language) {
                $books = Book::where('book_language' , '=' , $language)->get();
                foreach ($books as $book) {
                  $book_collection2[] = $book->id;
                }
                }
        foreach ($book_collection1 as $book_collection1) {
            if (in_array($book_collection1, $book_collection2))  $book_collection[] = $book_collection1;
          }
        
          dump($book_collection);
        }
          $listing = Listing::with('edition.book.genres')->groupBy('edition_id')->get();
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

        
             $genres = Genre::all();
     return view('store', compact('listings', 'genres'));
    
}
}


// $condition = $request->input('condition');
// if ($condition != null && $language== null) {
//     foreach ($condition as $condition) {
//         $listing = Listing::where('condition' , '=' , $condition)->get();
//         foreach ($listing as $listing) {
//             $listings ->  push($listing);
//           }
//       }
//      }

// if ($genre != null) {
//     $genre_collection = [];
//     $book_collection = [];
//     foreach ($genre as $genre) {
//     $genres = Genre::where('genre' , '=' , $genre)->get();
//     foreach ($genres as $genres) {
//       $genre_collection[] = $genres->id;
//     }
//     }
//     $book = Book::all();
//     foreach ($book as $book) {
//         $book_genre = $book->genres;
//         foreach($book_genre as $book_genre){
//             if (in_array($book_genre->id, $genre_collection)) {
//                 if (!in_array($book->id, $book_collection)) $book_collection[] = $book->id;
//             }
//         }
//       }
//       dump($book_collection);
//       $listing = Listing::with('edition.book.genres')->groupBy('edition_id')->get();
//      foreach ($listing as $listing) {
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

// if ($language != null) {
//     $book_collection = [];
//         foreach ($language as $language) {
//         $books = Book::where('book_language' , '=' , $language)->get();
//         foreach ($books as $book) {
//           $book_collection[] = $book->id;
//         }
//         }
//         $listing = Listing::with('edition.book.genres')->groupBy('edition_id')->get();
//         foreach ($listing as $listing) {
//             $edition_id = $listing->edition_id;
//             $edition = Edition::where('id', $edition_id)->first();
//             $checkid=$edition->book_id;
//             $a = 0;
//             foreach ($book_collection as $collection){
//                 if ($collection == $checkid) $a=1;
//             }
            
//                 if ($a == 1){
//                     $listings ->  push($listing);
//                 }
                
//             }   
   // }