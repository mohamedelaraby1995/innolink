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
Route::get('/listing/{id}',function($id){
return view('listing',[
    'listing' => Listing::find($id),
]);
});



