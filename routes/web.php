<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CarDetailsController;
use App\Http\Controllers\BookingController;



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

Route::post('/check-availability', [CarDetailsController::class, 'checkAvailability'])->name('check.availability');
Route::get('/listing-owner/{id}', [CarDetailsController::class, 'showOwnerDetails'])->name('listing.owner');


// yousef routes start
use App\Http\Controllers\HomeController;

Route::prefix('home')->group(function () {

    Route::get('/', [HomeController::class, 'index']);

    Route::view('/viewCars', 'listing-list')->name('allCars');

    Route::view('/viewCars-f', 'listing-list')->name('pruduct_list_from_home_with_filter');  // this node to handle from listing-list page

    Route::post('/s', [HomeController::class, 'search_rentals'])->name('search_home'); //  I want this have more idea

    Route::get('/{id}', [HomeController::class, 'go_to_pruduct_details'])->name('pruduct_details');

    Route::post('/ajax_search', [HomeController::class, 'ajax_search'])->name('ajax_search_user');
});


// yousef routes end


// Route::get('/', function () {
//     return view('admin.views.dashboard.index');
// });
Route::post('/check-availability', [CarDetailsController::class, 'checkAvailability'])->name('check.availability');

Route::get('/carlist', [CarController::class, 'index']);
Route::get('/search', [SearchController::class, 'searchCars']);
Route::get('/filter', [SearchController::class, 'filterCars']);
Route::get('/booking', function () {
    return view('booking');
})->name('booking');




// aseel routes start



use App\Http\Controllers\CompanyController;

// Route::middleware(['auth', 'company'])->group(function () {
    Route::get('/company/{id}/cars', [CompanyController::class, 'showCars'])->name('company.cars');
Route::get('/cars/{id}', [CompanyController::class, 'showCarDetails'])->name('car.details');
// Route::get('/cars/{id}', [CompanyController::class, 'showCarDetails'])->name('car.details');

Route::get('company/dashboard', [CompanyController::class, 'dashboard'])->name('company.dashboard');

    Route::get('/company/user-info', [CompanyController::class, 'showUserInfo'])->name('company.user-info');
    Route::post('/company/user-info', [CompanyController::class, 'updateUserInfo'])->name('company.user-info.update');
    Route::get('/company/rental-control-center', [CompanyController::class, 'rentalControlCenter'])->name('company.rental-control-center');
    Route::patch('/company/rental-control-center/{rentalId}', [CompanyController::class, 'updateRentalStatus'])->name('company.update-rental-status');

Route::get('/company/carControlCenter', [CompanyController::class, 'carControlCenter'])->name('company.carControlCenter');
    Route::get('/company/carControlCenter/create', [CompanyController::class, 'createCar'])->name('company.createCar');

    Route::get('/company/cars/{id}/edit', [CompanyController::class, 'editCar'])->name('company.editCar');
    Route::put('/company/cars/{id}', [CompanyController::class, 'updateCar'])->name('company.updateCar');

    Route::get('/company-listing-details/{id}', [CompanyController::class, 'showCar'])->name('company.listing-details');
    Route::delete('/company/cars/{id}', [CompanyController::class, 'deleteCar'])->name('company.deleteCar');

    Route::post('/company/store_car', [CompanyController::class, 'storeCar'])->name('company.store_car');
// });

// // FOR ASEEL USES
Route::get('/index', function () {
    return view('index');
});

// use App\Http\Controllers\LoginController;

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// aseel routes end


//
// fajer route
//
Route::post('/cars/{id}/reviews', [CarDetailsController::class, 'submitReview'])->name('reviews.submit');
Route::post('/check-availability', [CarDetailsController::class, 'checkAvailability'])->name('check.availability');
Route::get('/listing-owner/{id}', [CarDetailsController::class, 'showOwnerDetails'])->name('listing.owner');

Route::post('/reviews/store', [CarDetailsController::class, 'storeReview'])->name('reviews.store');

Route::get('/car/{id}/reviews', [CarDetailsController::class, 'showReviews'])->name('car.reviews');

Route::get('/listing-details/{id}', [CarDetailsController::class, 'show'])->name('cardetails.show');

Route::get('/car/{id}/features', [CarDetailsController::class, 'showFeatures'])->name('car.features');

Route::get('/listing-details', function () {
    return view('listing-details');
});



Route::post('/check-availability', [CarDetailsController::class, 'checkAvailability'])->name('check.availability');

Route::get('/carlist', [CarController::class, 'index']);
Route::get('/search', [SearchController::class, 'searchCars']);
Route::get('/filter', [SearchController::class, 'filterCars']);
Route::get('/booking', function () {
    return view('booking');
})->name('booking');

// fajer end//

//khawara start

Route::get('booking_c', [BookingController::class, 'getCompanyLocation']);

//khawara end
