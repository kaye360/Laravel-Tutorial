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
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store a Listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');;

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');;

// Update Single Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');;

// Delete Single Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');;

// Show Single Listng
Route::get('/listing/{listing}', [ListingController::class, 'show']);



// Show Register Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');;

// Store a new user 
Route::post('/users', [UserController::class, 'store']);

// Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');;

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');;

// Log in user
Route::post('/users/auth', [UserController::class, 'auth']);