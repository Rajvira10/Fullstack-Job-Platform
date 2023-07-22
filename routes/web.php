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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//All Listings
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);


//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Edit Listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);


//Show Register Form
Route::get('/register', [UserController::class, 'create']);

//Create New User
Route::post('/users', [UserController::class, 'store']);

//Logout
Route::post('/logout', [UserController::class, 'logout']);

//Show login Form
Route::get('/login', [UserController::class, 'login']);

//Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);