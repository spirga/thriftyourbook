<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('/store');
});

Route::get('/store', function () {
    return view('store');
})->name('store');

Route::group(['middleware' => 'auth'], function() {
    
    Route::view(uri: 'profile', view: 'profile')->name(name: 'profile');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    
    Route::get('/my-listings', function () {
        return view('my-listings');
    })->name('my-listings');
    Route::get('/my-orders', function () {
        return view('my-orders');
    })->name('my-orders');
});

require __DIR__.'/auth.php';