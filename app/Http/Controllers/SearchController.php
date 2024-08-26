<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    public function searchCars(Request $request)
    {
        //if query is year
        $brands = Brand::all();
        $queryy = $request->queryy;
        if (preg_match('/^\d{4}$/', $queryy)) {
            $cars = Car::where('year', $request->queryy)->get();
            return view('listing-list', compact('cars'));
        } else {
            $cars = Car::join('brands', 'cars.brand_id', '=', 'brands.id')
                ->where('brands.name', $request->queryy)
                ->orWhere('model', $request->queryy)
                ->select('cars.*')
                ->get();
            return view('listing-list', compact('cars', 'brands'));
        }
    }

    public function filterCars(Request $request)
    {
        //if query is year
        $brands = Brand::all();
        $brands_array = $request->brands_array;
        if ($brands_array === null) {
            foreach ($brands as $brand) {
                $brands_array[] = $brand->id;
            }
        }

        $doors_array = $request->doors_array;
        if ($doors_array === null) {
            $doors_array = [2, 4];
        }

        $price = $request->price;
        if ($price === null) {
            $price = 9999999999999999999999999999999;
        }

        $ratings_array = $request->ratings_array;
        if ($ratings_array === null) {
            $ratings_array = [0, 1, 2, 3, 4, 5];
        }



        // $cars = Car::whereIn('brand_id', $brands_array)
        //     ->whereIn('door', $doors_array)
        //     ->where('price_per_day', '<=', $price)
        //     ->whereIn(Car::raw('FLOOR(rating)'), $ratings_array)->get();

        // $cars = $cars
        // dd($cars->first()->model);

        $startDate = $request->startDate;
        $endDate = $request->endDate;





        if (
            $startDate === null or $endDate === null
        ) {
            $startDate = '1990-01-01';
            $endDate = '1990-01-01';
        } else {
            $startDate = Carbon::createFromFormat('d-m-Y', $startDate)->format('Y-m-d');
            $endDate = Carbon::createFromFormat('d-m-Y', $endDate)->format('Y-m-d');
        }
        // dd($startDate, $endDate);
        

        $cars = Car::whereNotExists(function ($query) use ($startDate, $endDate) {
            $query->select(DB::raw(1))
            ->from('rentals')
                ->whereColumn('cars.id', 'rentals.car_id')
                ->where(function ($query) use ($startDate, $endDate) {
                    $query->whereBetween('rentals.rent_start', [$startDate, $endDate])
                    ->orWhereBetween('rentals.rent_end', [$startDate, $endDate])
                    ->orWhere(function ($query) use ($startDate, $endDate) {
                        $query->where('rentals.rent_start', '<=', $startDate)
                        ->where('rentals.rent_end', '>=', $endDate);
                    });
                });
        })->whereIn('brand_id', $brands_array)
        ->whereIn('door', $doors_array)
        ->where('price_per_day', '<=', $price)
        ->whereIn(Car::raw('FLOOR(rating)'), $ratings_array)
        ->get();

        return view('listing-list', compact('cars', 'brands'));
    }
}
