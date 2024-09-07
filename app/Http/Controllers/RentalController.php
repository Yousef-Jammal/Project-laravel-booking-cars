<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rental;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class RentalController extends Controller
{
    public function storeRentalInSession(Request $request)
    {
        $car = Car::find($request->car_id);
        $user_id = Auth::user()->id;
        $rent_start = $request->rent_start;
        $rent_end = $request->rent_end;

        $startDate = Carbon::parse($rent_start);
        $endDate = Carbon::parse($rent_end);

        $date_overlaps = Rental::where('car_id', $car->id)
        ->where('rent_start', '>=', $startDate)
        ->where('rent_end', '<=', $endDate)
        ->exists();

        $now = Carbon::today();
        if ($now->gt($startDate)) {
            return redirect()->route('show_calendarsss', ['id' => $car->id])->with('errorMsg', 'You Picked The Start Date In The Past');
        }

        if ($startDate->gt($endDate)) {
            return redirect()->route('show_calendarsss', ['id' => $car->id])->with('errorMsg', 'You Picked The Start Date Before The End Date');
        }

        if ($date_overlaps) {
            return redirect()->route('show_calendarsss', ['id' => $car->id])->with('errorMsg', 'You Picked An Overlapping Date');
        }

        // Calculate the difference in days, including both start and end dates
        $numberOfDays = $startDate->diffInDays($endDate) + 1;
        $total = $car->price_per_day * $numberOfDays;
        session()->put('car_id', $car->id);
        session()->put('user_id', $user_id);
        session()->put('rent_start', $rent_start);
        session()->put('rent_end', $rent_end);
        session()->put('total', $total);
        $data = ['car_id' => $car->id, 'user_id' => $user_id, 'rent_start' => $rent_start, 'rent_end' => $rent_end, 'total' => $total];
        return view('listing-details', compact('car', 'data'));
        // dd($request->rent_start);
        // return view('calendartest');
        // return details with success message
    }

    public function storeRentalInDatabase(Request $request)
    {
        $rental = new Rental();
        $rental->rent_start = $request->rent_start;
        $rental->user_id = Auth::user()->id;
        $rental->car_id = $request->car_id;
        $rental->rent_end = $request->rent_end;
        $rental->status_id = 1;
        $rental->save();
        return redirect()->action('App\Http\Controllers\HomeController@index');
    }
}
