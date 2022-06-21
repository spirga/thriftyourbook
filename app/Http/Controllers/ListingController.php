<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Listing;

class ListingController extends Controller
{
    public function index_all()
    {
        $listings = Listing::all();
        return view('store', compact('listings'));
        //return view ('store', ['listings' => $listings]);
    }

    public function index_one($id)
    {
        $listing = Listing::where('id', '=', $id)->get();
<<<<<<< HEAD
        return view('listing', ['listing_id'=>$id, 'listing'=>$listing]);
=======
        return view('listing', ['id'=>$id, 'listing'=>$listing]);
>>>>>>> fc85c1afe498452779e4534f9ff182fd7dd37ff4
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
}