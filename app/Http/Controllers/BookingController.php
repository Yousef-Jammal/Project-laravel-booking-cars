<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\company;
use App\Models\car;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    //  public function getCompanyLocation(Request $request)
    //  {
        
    //     $totalPrice = 20; 

    //      return view('booking-payment',[
    //         'location' =>'salt',
    //         'totalPrice' => $totalPrice,
             
    //      ]);
    // }
   
     public function getCompanyLocation()
 {
    $car_id = session('car_id');
    $user_id = session('user_id');
    $rent_start = session('rent_start');
    $rent_end = session('rent_end');
    $total = session('total');
   $car = Car::find($car_id);
   $company_id = $car->$user_id;
   $company = Company::where('user_id', $company_id);

   $location = $company->location;



 }




    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
