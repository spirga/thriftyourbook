<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Edition;

class EditionController extends Controller
{

    // public function index($id)
    // {
    //     $editions=Edition::where('book_id','=',$id)->get(); 
    //     return view('editions',['book_id'=>$id,'editions'=>$editions]);
    // }

    public function index_one($id)
    {
        //$edition = Edition::with('book')->where('id', '=', $id)->get();
        $edition = Edition::where('id', '=', $id)->first();
        $book_id = $edition->book_id;
        $book = Book::where('id', '=', $book_id);

        return view('edition', compact('edition', 'book'));
    }
    
    public function create($id)
    {
        $book = Book::findOrFail($id);
        return view('new-edition', compact('book'));
    }

    public function store(Request $request)
    {
        $rules = array(
            'publisher' => 'required|string',
            'edition_year' => 'required|numeric',
            'pages' => 'required|numeric',
            'cover_type' => 'required|min:2|max:2',
        );
        $this->validate($request, $rules);
        $edition = new Edition;
        $edition->book_id = $request->book_id;
        $edition->image_url = $request->image_url;
        $edition->publisher = $request->publisher;
        $edition->edition_year = $request->edition_year;
        $edition->pages = $request->pages;
        $edition->cover_type = $request->cover_type;        
        $edition->save();

        //return redirect('book/edition' . $edition->book_id);
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $edition=Edition::find($request->id);
        $edition->book_id = $request->book_id;
        $edition->image_url = $request->image_url;
        $edition->publisher = $request->publisher;
        $edition->edition_year = $request->edition_year;
        $edition->pages = $request->pages;
        $edition->cover_type = $request->cover_type;        
        $edition->save();
        //return redirect('country/');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Edition::findOrFail($id)->delete();
        //return redirect('country/');
        return redirect()->back();
    }
}
    