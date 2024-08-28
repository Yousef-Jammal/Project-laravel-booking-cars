<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CarDetailsController;

use App\Http\Controllers\BookingController;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;


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
use App\Http\Controllers\AdminController;
use Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator;

Route::prefix('admin')->group(function(){

    // Route::get('/', [HomeController::class, 'dashboard']);
    Route::get('/', [AdminController::class, 'index'])->name('admin_index');
    Route::get('/tables', [AdminController::class, 'index_tables'])->name('admin_index_tables');

    // users table
    Route::get('showUser/{id}', [AdminController::class, 'viewUser'])->name('admin_show_user');
    Route::get('editUser/{id}', [AdminController::class, 'editUser'])->name('admin_edit_user');
    Route::get('deleteUser/{id}', [AdminController::class, 'deleteUser'])->name('admin_delete_user');

    Route::put('updateUser/{id}', [AdminController::class, 'updateUser'])->name('admin_update_user');


    // cars table
    Route::get('showCar/{id}', [AdminController::class, 'viewCar'])->name('admin_show_car');
    Route::get('editCar/{id}', [AdminController::class, 'editCar'])->name('admin_edit_car');
    Route::get('deleteCar/{id}', [AdminController::class, 'deleteCar'])->name('admin_delete_car');

    Route::put('updateCar/{id}', [AdminController::class, 'updateCar'])->name('admin_update_car');

    // companys table
    Route::get('showCompany/{id}', [AdminController::class, 'viewCompany'])->name('admin_show_company');
    Route::get('editCompany/{id}', [AdminController::class, 'editCompany'])->name('admin_edit_company');
    Route::get('deleteCompany/{id}', [AdminController::class, 'deleteCompany'])->name('admin_delete_company');

    Route::put('updateCompany/{id}', [AdminController::class, 'updateCompany'])->name('admin_update_company');

});


Route::prefix('log_sign')->group(function () {

    Route::get('/login', [AuthController::class, 'showLoginForm']);
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::prefix('home')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home_index');

    Route::get('/carlist', [HomeController::class, 'allCars'])->name('allCars');

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
Route::get('/calendar', function () {
    return view('calendartest');
});





// aseel routes start



use App\Http\Controllers\CompanyController;

// Route::middleware(['auth', 'company'])->group(function () {
    Route::get('/company/{id}/cars', [CompanyController::class, 'showCars'])->name('company.cars');
Route::get('/cars/{id}', [CompanyController::class, 'showCarDetails'])->name('car.details');

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


Route::get('/company/availability_center', [CompanyController::class, 'availabilityCenter'])->name('company.availabilityCenter');
Route::patch('/company/update-availability-status/{car}', [CompanyController::class, 'updateAvailabilityStatus'])->name('company.update-availability-status');


// });

use App\Http\Controllers\UserController;


Route::get('/user/user-info', [UserController::class, 'showUserInfo'])->name('user.user-info');
Route::post('/user/user-info', [UserController::class, 'updateUserInfo'])->name('user.user-info.update');
Route::get('/user/rental-history-center', [UserController::class, 'rentalHistoryCenter'])->name('user.rental-history-center');
Route::get('/user/rental-request-center', [UserController::class, 'rentalRequestCenter'])->name('user.rental-request-center');


// // FOR ASEEL USES
// Route::get('/contact', function () {
//     return view('contact-us');
// })->name('contact');



// use App\Http\Controllers\LoginController;

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// aseel routes end


//
// fajer route
//
Route::post('/cars/{id}/reviews', [
    CarDetailsController::class,
    'submitReview'
])->name('reviews.submit')->middleware('auth');
// Route::post('/cars/{id}/reviews', [CarDetailsController::class, 'submitReview'])->name('reviews.submit');
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
Route::get('/show_calendar/{id}', [SearchController::class, 'calendarModal']);
Route::get('about', function () {
    return view('about-us');
})->name('about');
Route::get('coming_soon', function () {
    return view('coming-soon');
})->name('coming_soon');
Route::get('terms', function () {
    return view('terms-condition');
})->name('terms');
Route::get('privacy', function () {
    return view('privacy-policy');
})->name('privacy');
Route::get('contact', function () {
    return view('contact-us');
})->name('contact');

//khawara end

// fajer end//