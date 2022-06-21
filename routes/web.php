<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;

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
//Route::resource('store', ListingController::class);


Route::group(['middleware' => 'auth'], function() {
    
    Route::view(uri: 'profile', view: 'profile')->name(name: 'profile');
    
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    
    
    Route::get('/my-listings', function () {
        return view('my-listings');
    })->name('my-listings');
    Route::get('/my-orders', function () {
        return view('my-orders');
    })->name('my-orders');

    Route::get('/new-listing', function () {
        return view('new-listing');
    })->name('new-listing');
});

require __DIR__.'/auth.php';