<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\Route;

// All listings
Route::get('/', [ListingController::class, 'index']);


//Single Listing
Route::get('/listing/{listing}',[ListingController::class, 'show']);



