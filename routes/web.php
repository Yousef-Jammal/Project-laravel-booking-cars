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



Route::get('/homeRami', function () {
    return 'home';
})->name('home');

Route::post('/check-availability', [CarDetailsController::class, 'checkAvailability'])->name('check.availability');
Route::get('/listing-owner/{id}', [CarDetailsController::class, 'showOwnerDetails'])->name('listing.owner');


// yousef routes start
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminCarsController;
use App\Http\Controllers\admin\AdminCompaniesController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\LossersController;
use Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator;


Route::prefix('admin')->middleware('checkRole:1')->group(function () {
    // Route::prefix('admin')->group(function() {

    // Route::get('/', [HomeController::class, 'dashboard']);
    Route::get('/', [AdminController::class, 'index'])->name('admin_index');

    Route::get('/profile/{id}', [AdminController::class, 'profile'])->name('admin_profile');

    Route::get('users', [AdminUserController::class, 'index'])->name('admin_users');
    Route::get('cars', [AdminCarsController::class, 'index'])->name('admin_cars');
    Route::get('companies', [AdminCompaniesController::class, 'index'])->name('admin_companies');
    Route::get('admin_lossers', [LossersController::class, 'index'])->name('admin_lossers');

    // users table
    Route::get('showUser/{id}', [AdminUserController::class, 'viewUser'])->name('admin_show_user');
    Route::get('editUser/{id}', [AdminUserController::class, 'editUser'])->name('admin_edit_user');
    Route::get('deleteUser/{id}', [AdminUserController::class, 'deleteUser'])->name('admin_delete_user');
    Route::put('updateUser/{id}', [AdminUserController::class, 'updateUser'])->name('admin_update_user');
    Route::get('createUser', [AdminUserController::class, 'createUser'])->name('admin_create_user');
    Route::post('createUser', [AdminUserController::class, 'addUser'])->name('admin_store_user');

    // cars table
    Route::get('showCar/{id}', [AdminCarsController::class, 'viewCar'])->name('admin_show_car');
    Route::get('editCar/{id}', [AdminCarsController::class, 'editCar'])->name('admin_edit_car');
    Route::get('deleteCar/{id}', [AdminCarsController::class, 'deleteCar'])->name('admin_delete_car');
    Route::put('updateCar/{id}', [AdminCarsController::class, 'updateCar'])->name('admin_update_car');
    Route::get('createCar', [AdminCarsController::class, 'createCar'])->name('admin_create_car');
    Route::post('createCar', [AdminCarsController::class, 'storeCar'])->name('admin_store_car');

    // companies table
    Route::get('showCompany/{id}', [AdminCompaniesController::class, 'viewCompnay'])->name('admin_show_company');
    Route::get('editCompany/{id}', [AdminCompaniesController::class, 'editCompnay'])->name('admin_edit_company');
    Route::get('deleteCompany/{id}', [AdminCompaniesController::class, 'deleteCompany'])->name('admin_delete_company');
    Route::put('updateCompany/{id}', [AdminCompaniesController::class, 'updateCompany'])->name('admin_update_company');
    Route::get('createCompany', [AdminCompaniesController::class, 'createCompany'])->name('admin_create_company');
    Route::post('createCompany', [AdminCompaniesController::class, 'storeCompany'])->name('admin_store_company');


    Route::get('/resetPassword/{id}', )->name('showResetPass');
    Route::put('/resetPassword/{id}',)->name('resetPassword');

    // web.php
    Route::post('/admin_lossers', [LossersController::class, 'updateStatus'])->name('updateRenaterStatus');

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

    // Route::get('/carlist', [HomeController::class, 'allCars'])->name('allCars');

    Route::view('/viewCars-f', 'listing-list')->name('pruduct_list_from_home_with_filter');  // this node to handle from listing-list page

    Route::post('/search_home', [HomeController::class, 'search_home'])->name('search_home'); //  I want this have more idea

    Route::get('/{id}', [HomeController::class, 'go_to_pruduct_details'])->name('pruduct_details');

    Route::post('/ajax_search', [HomeController::class, 'ajax_search'])->name('ajax_search_user');
});


// yousef routes end


// Route::get('/', function () {
//     return view('admin.views.dashboard.index');
// });
Route::post('/check-availability', [CarDetailsController::class, 'checkAvailability'])->name('check.availability');

Route::get('/carlist', [CarController::class, 'index'])->name('allCars');
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
use App\Http\Controllers\RentalController;

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
Route::get('/company/requestsCar', [CompanyController::class, 'requestsCar'])->name('company.requestsCar');


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
Route::get('/user/rental-request-center', [UserController::class, 'rentalRequestCenter'])->name('user.rental-request-center');
Route::get('/user/rental-history-center', [UserController::class, 'rentalHistoryCenter'])->name('user.rental-history-center');
Route::get('/user/become-lessor', [UserController::class, 'becomeLessor'])->name('user.become-lessor');

Route::post('/user/submit-become-lessor/{id}', [UserController::class, 'submitBecomeLessor'])->name('user.submit-become-lessor');


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
// Route::get('/listing-details/{id}', [CarDetailsController::class, 'showCarDetailsImg']);
Route::get('/car/{id}/features', [CarDetailsController::class, 'showFeatures'])->name('car.features');

Route::get('/listing-details', function () {
    return view('listing-details');
});



Route::post('/check-availability', [CarDetailsController::class, 'checkAvailability'])->name('check.availability');

Route::get('/carlist', [CarController::class, 'index']);
Route::get('/search', [SearchController::class, 'searchCars']);
Route::get('/filter', [SearchController::class, 'filterCars']);


// fajer end//

//khawara start

Route::get('/booking_c', [BookingController::class, 'getCompanyLocation']);
Route::get('/show_calendar/{id}', [SearchController::class, 'calendarModal'])->name('show_calendarsss');
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


Route::post('rental-session', [RentalController::class, 'storeRentalInSession'])->name('rental-session');

//khawara end
//invoice-details
// fajer end//

Route::post('/store_rental', [RentalController::class, 'storeRentalInDatabase']);
