<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Car;
use App\Models\User;
use App\Models\Company;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    // Start User functions
    public function index()
    {
        $usersCount = User::count();
        $carsCount = Car::count();
        $rentalCount = Rental::count();
        $companiesCount = Company::count();

        $Count1 = User::whereMonth('date_created', 1)->count();
        $Count2 = User::whereMonth('date_created', 2)->count();
        $Count3 = User::whereMonth('date_created', 3)->count();
        $Count4 = User::whereMonth('date_created', 4)->count();
        $Count5 = User::whereMonth('date_created', 5)->count();
        $Count6 = User::whereMonth('date_created', 6)->count();
        $Count7 = User::whereMonth('date_created', 7)->count();
        $Count8 = User::whereMonth('date_created', 8)->count();
        $Count9 = User::whereMonth('date_created', 9)->count();
        $Count10 = User::whereMonth('date_created', 10)->count();
        $Count11 = User::whereMonth('date_created', 11)->count();
        $Count12 = User::whereMonth('date_created', 12)->count();
        $listCountMonth = [
            $Count1,
            $Count2,
            $Count3,
            $Count4,
            $Count5,
            $Count6,
            $Count7,
            $Count8,
            $Count9,
            $Count10,
            $Count11,
            $Count12,
        ];

        $CountCar1 = Car::whereMonth('date_created', 1)->count();
        $CountCar2 = Car::whereMonth('date_created', 2)->count();
        $CountCar3 = Car::whereMonth('date_created', 3)->count();
        $CountCar4 = Car::whereMonth('date_created', 4)->count();
        $CountCar5 = Car::whereMonth('date_created', 5)->count();
        $CountCar6 = Car::whereMonth('date_created', 6)->count();
        $CountCar7 = Car::whereMonth('date_created', 7)->count();
        $CountCar8 = Car::whereMonth('date_created', 8)->count();
        $CountCar9 = Car::whereMonth('date_created', 9)->count();
        $CountCar10 = Car::whereMonth('date_created', 10)->count();
        $CountCar11 = Car::whereMonth('date_created', 11)->count();
        $CountCar12 = Car::whereMonth('date_created', 12)->count();
        $listCountCarMonth = [
            $CountCar1,
            $CountCar2,
            $CountCar3,
            $CountCar4,
            $CountCar5,
            $CountCar6,
            $CountCar7,
            $CountCar8,
            $CountCar9,
            $CountCar10,
            $CountCar11,
            $CountCar12,
        ];

        return view('admin.dashboard', [
            'usersCount'=>$usersCount,
            'carsCount'=>$carsCount,
            'rentalCount'=>$rentalCount,
            'companiesCount'=>$companiesCount,
            'listCountMonth'=> $listCountMonth,
            'listCountCarMonth'=>$listCountCarMonth
         ]);
    }


}