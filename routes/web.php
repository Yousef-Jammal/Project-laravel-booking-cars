<?php

use Illuminate\Support\Facades\Route;

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

// yousef routes start
use App\Http\Controllers\HomeController;

Route::prefix('home')->group(function(){

    Route::get('/', [HomeController::class, 'index']);

    Route:: view('/viewCars','listing-list')->name('allCars');

    Route:: view('/viewCars-f','listing-list')->name('pruduct_list_from_home_with_filter');  // this node to handle from listing-list page

    Route::post('/s', [HomeController::class, 'search_rentals'] )->name('search_home'); //  I want this have more idea

    Route::get('/{id}', [HomeController::class, 'go_to_pruduct_details'] )->name('pruduct_details');

    Route::post('/ajax_search', [HomeController::class, 'ajax_search'])->name('ajax_search_user');
});


// yousef routes end