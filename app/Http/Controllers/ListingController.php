<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    // public function search(Request $request) {

    // // $listings = Listing::with('edition.book')->groupBy('edition_id')->get();
    // // $listings = $listings->where($listings->edition->book->book_title . 'LIKE', '%' . $request . '%')->get();
    // // // $listings = $listings->where($listings->edition->book->book_author. 'LIKE', '%' . $request . '%')->get();
    // // return view('storesearch', compact('listings'));        

    // $re=$request->input('data');
    // $query = Listing::join('editions', 'editions.id', '=', 'listings.edition_id')->join('books', 'books.id', '=', 'editions.book_id');
    // $query = $query->where('book_title' , 'LIKE', '%' . $re . '%')->orwhere('book_author', 'LIKE', '%' . $re . '%');
    // return view('store', array('listings'=>$query->get()));
    
    // }
}