<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EditionController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\BookController;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;
use App\User;


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

Route::redirect('/', 'store');

// Route::get('/', function () {
//     return view('/store');
// });

Route::get('/store', function () {
    return view('store');
})->name('store');

Route::get('/store',[ListingController::class,'index_all'])->name('store');
//Route::resource('storesearch', ListingController::class);

Route::post('/store', [ListingController::class, 'search'])->name('search');

Route::get('listing/{id}', [ListingController::class, 'index_one'])->name('listing');
Route::get('edition/{id}', [EditionController::class, 'index_one'])->name('edition');
Route::get('listings/{id}', [ListingController::class, 'index_all_edition'])->name('listings');
Route::post('listings/{id}', [ListingController::class, 'new_search'])->name('listings2');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::group(['middleware' => 'auth'], function() {

    //Route::post('/profile','ProfileControllerr@upload');
    
    Route::view(uri: 'profile', view: 'profile')->name(name: 'profile');
    
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/my-listings', function () {
        return view('my-listings');
    })->name('my-listings');
    Route::get('/my-orders', function () {
        return view('my-orders');
    })->name('my-orders');

    // Route::get('/new-listing', function () {
    //     return view('new-listing');
    // })->name('new-listing');

Route::get('/new-listing', [BookController::class, 'index_all'])->name('new-listing');
Route::get('/chattest', 'App\Http\Controllers\Auth\RegisteredUserController@index')->name('chattest');
Route::post('/chattest', 'App\Http\Controllers\Auth\RegisteredUserController@index_one')->name('chattest');
Route::get('/message/{id}', 'App\Http\Controllers\Auth\RegisteredUserController@getMessage')->name('message');
Route::post('message', 'App\Http\Controllers\Auth\RegisteredUserController@sendMessage');
});


require __DIR__.'/auth.php';