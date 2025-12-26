<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Show All listing
    public function index(Request $request){


 return view('listings.index',[
        'listings'  => $this->filterByTags(),
    ]);
    }

    //Show One listing
    public function show(Listing $listing){
        return view('listings.show',[
    'listing' => $listing,
]);
    }




// Find the latest Listing
public function  filterByTags(){
    return Listing::latest()->filter(request(['tag','search']))->get();
}



}
