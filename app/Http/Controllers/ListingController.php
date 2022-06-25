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
        //$listings = Listing::all();
        //return view('store', compact('listings'));

        //$listings_cnt = $listings->groupBy('edition_id')->map(fn ($listings) => $listings->count());
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

    $search = $request->input('search');
    $books = Book::query()->where('book_title' , 'like', '%' .$search. '%')->orwhere('book_author', 'like', '%' .$search. '%')->get();
    $listing = Listing::all();
    $listings =collect();
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
     return view('store', compact('listings'));
    
}
}


