<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarDetailsController;

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
Route::get('/listing-owner/{id}', [CarDetailsController::class, 'showOwnerDetails'])->name('listing.owner');

Route::post('/reviews/store', [CarDetailsController::class, 'storeReview'])->name('reviews.store');

Route::get('/car/{id}/reviews', [CarDetailsController::class, 'showReviews'])->name('car.reviews');

Route::get('/listing-details/{id}', [CarDetailsController::class, 'show'])->name('cardetails.show');

Route::get('/car/{id}/features', [CarDetailsController::class, 'showFeatures'])->name('car.features');

Route::get('/listing-details', function () {
    return view('listing-details');
});

Route::get('/', function () {
    return view('listing-list');
});
