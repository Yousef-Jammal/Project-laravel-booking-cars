<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\company;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function getCompanyLocation(Request $request)
     {
        $totalPrice = 315; 

         return view('booking-payment',[
            'location' =>'slat',
            'totalPrice' => $totalPrice, 
         ]);

     }
//      public function getCompanyLocation(Request $request)
// {
//     $location = $request->location;
//     $location = $request->start;
//     $companyId = session('companyId');

//     if (!$companyId) {
//         return redirect()->route('some.route');
//     }

//     $company = Company::find($companyId);

//     if (!$company) {
//         return redirect()->route('some.route'); // This could cause a loop
//     }

//     $location = $company->location;
//     return view('booking-payment', compact('location'));
// }





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
