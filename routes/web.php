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



use App\Http\Controllers\CompanyController;

Route::middleware(['auth', 'company'])->group(function () {
    Route::get('/company/{id}/cars', [CompanyController::class, 'showCars'])->name('company.cars');
    Route::get('/cars/{id}', [CompanyController::class, 'showCarDetails'])->name('car.details');
    Route::get('/company/dashboard', [CompanyController::class, 'dashboard'])
        ->middleware('company') // Apply the middleware
        ->name('company.dashboard');

    Route::get('/company/user-info', [CompanyController::class, 'showUserInfo'])->name('company.user-info')->middleware('company');
    Route::post('/company/user-info', [CompanyController::class, 'updateUserInfo'])->name('company.user-info.update')->middleware('company');
    Route::get('/company/rental-control-center', [CompanyController::class, 'rentalControlCenter'])->name('company.rental-control-center')->middleware('company');
    Route::patch('/company/rental-control-center/{rentalId}', [CompanyController::class, 'updateRentalStatus'])->name('company.update-rental-status')->middleware('company');

    Route::get('/company/carControlCenter', [CompanyController::class, 'carControlCenter'])->name('company.carControlCenter');
    Route::get('/company/carControlCenter/create', [CompanyController::class, 'createCar'])->name('company.createCar');

    Route::get('/company/cars/{id}/edit', [CompanyController::class, 'editCar'])->name('company.editCar');
    Route::put('/company/cars/{id}', [CompanyController::class, 'updateCar'])->name('company.updateCar');

    Route::get('/listing-details/{id}', [CompanyController::class, 'showCar'])->name('listing-details');
    Route::delete('/company/cars/{id}', [CompanyController::class, 'deleteCar'])->name('company.deleteCar');

    Route::post('/company/store_car', [CompanyController::class, 'storeCar'])->name('company.store_car');
});

// // FOR ASEEL USES
// Route::get('/index', function () {
//     return view('index');
// });

// use App\Http\Controllers\LoginController;

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// aseel routes end
