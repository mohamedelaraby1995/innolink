<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\Route;

// All listings
Route::get('/', function () {
    return view('listings',[
        'heading' => 'Latest Jobs',
        'listings'  => Listing::all(),
    ]);
});


//Single Listing
Route::get('/listing/{listing}',function(Listing $listing){
    //check for the listing exist
    //otherwise abort 404

//     $listing = Listing::find($id);

//     if($listing){
return view('listing',[
    'listing' => $listing,
]);
//     } else {
//         abort(404);
//     }

});



