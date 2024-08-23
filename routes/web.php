<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SearchController;

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

// Route::get('/', function () {
//     return view('admin.views.dashboard.index');
// });

Route::get('/carlist', [CarController::class, 'index']);
Route::get('/search', [SearchController::class, 'searchCars']);
Route::get('/filter', [SearchController::class, 'filterCars']);


// aseel routes start

// aseel routes end
