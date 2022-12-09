<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// All Listings
Route::get('/', [ListingController::class, 'index'] );

// Show Create Listing Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store a Listing
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Single Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Single Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Show Single Listng
Route::get('/listing/{listing}', [ListingController::class, 'show']);



// Show Register Create Form
Route::get('/register', [UserController::class, 'create']);