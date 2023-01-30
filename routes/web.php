<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;


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
// all listings
Route::get('/', [ListingController::class, 'index']);

//show the create form
Route::get('/listings/create', [ListingController::class, 'create'])
->middleware('auth');

//store listing data
Route::post('/listings', [ListingController::class, 'store'])
->middleware('auth');

//show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])
->middleware('auth');

//update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])
->middleware('auth');

//delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])
->middleware('auth');

//manage listings page
Route::get('listings/manage', [ListingController::class, 'manage'])
->middleware('auth');

//single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//show register createform
Route::get('/register',[UserController::class, 'create'])
->middleware('guest');

//create new user
Route::post('/users', [UserController::class, 'store']);

//log user out
Route::post('/logout', [UserController::class, 'logout'])
->middleware('auth');

//show login form
Route::get('/login', [UserController::class, 'login'])
->name('login')
->middleware('guest');

//log in user
Route::post('users/authenticate', [UserController::class, 'authenticate']);

