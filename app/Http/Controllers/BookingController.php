<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\Car;


class BookingController extends Controller
{

    public function getCompanyLocation()
    {
    $car_id = session('car_id');
    $user_id = session('user_id');
    $rent_start = session('rent_start');
    $rent_end = session('rent_end');
    $total = session('total');
        $car = Car::find($car_id);
        $image = $car->images->first()->name;
        $company_id = $car->user_id;
        $company = Company::where('user_id', $company_id)->get();
        foreach ($company as $c) {
            $data = ['pickup_date' => $rent_start, 'return_date' => $rent_end, 'total' => $total, 'company' => $c, 'car' => $car, 'image' => $image];
            return view('booking-payment', compact('data'));
        }

        
    }
}
