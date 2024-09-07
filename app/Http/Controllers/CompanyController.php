<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Company;
use App\Models\User;
use App\Models\Status;
use App\Models\Brand;
use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;
use App\Models\Rental;


class CompanyController extends Controller
{


    public function showCars($id)
    {
        $brands = Brand::all();
        $company = Company::findOrFail($id);
        $userId = Auth::id();
        $user = User::find($userId);
        $cars = Car::where('user_id', $id)->with('images')->get();

        return view('companies.cars', compact('user', 'brands', 'company', 'cars'));
    }


    public function showCarDetails($id)
    {
        $car = Car::with('images')->findOrFail($id);

        $image = $car->images->first();

        return view('listing-details', compact('car', 'image'));
    }

    public function dashboard()
    {

        // Get the currently authenticated user's ID
        $userId = Auth::id();
        // $userId = 1;
        $dealsWeek = Rental::whereHas('car', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })
            ->whereBetween('rent_start', [now()->startOfWeek(), now()->endOfWeek()])
            ->count();

        // Alias the rentals table as `r`
        $revenueThisMonth = Rental::whereHas('car', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })
            ->whereMonth('rent_start', now()->month)
            ->join('cars as c', 'rentals.car_id', '=', 'c.id') // Aliasing the cars table
            ->sum('c.price_per_day');
        $customersThisYear = Rental::whereHas('car', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })
            ->whereYear('rent_start', now()->year)
            ->distinct('user_id')
            ->count('user_id');

        $recentRentals = Rental::whereHas('car', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })
            ->whereBetween('rent_start', [now()->startOfWeek(), now()->endOfWeek()])
            ->orderBy('rent_start', 'desc')
            ->take(5)
            ->get();

        $totalCarsAvailable = Car::where('user_id', $userId)
            ->where('availability', 'Available')
            ->count();

        $company = Company::where('user_id', $userId)->firstOrFail();
        // $company = Company::select('*')->where('user_id', '=', $userId);
        // return 'good';
        // dd($userId);

        $cars = Car::where('user_id', $userId)->get();

        return view('companies.dashboard', compact('totalCarsAvailable', 'company', 'cars', 'dealsWeek', 'revenueThisMonth', 'customersThisYear', 'recentRentals'));
    }

    public function showUserInfo()
    {
        $userId = Auth::id();
        $user = User::find($userId);
        $company = Company::where('user_id', $userId)->first();

        if (!$company) {
            abort(403, 'Unauthorized access - You do not own a company.');
        }

        return view('companies.user-info', compact('user', 'company'));
    }

    public function updateUserInfo(Request $request)
    {
        // dd($request->all());

        $userId = Auth::id();
        $user = User::find($userId);
        $company = Company::where('user_id', $userId)->first();

        if (!$company) {
            abort(403, 'Unauthorized access - You do not own a company.');
        }

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // dd($request->file('image')); // Debug the uploaded file

            if ($user->image && $user->image !== 'default.png') {
                Storage::delete('/user_images/' . $user->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('user_images'), $imageName);
            $user->image = $imageName;
        }

        // Update the user and company data
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'image' => $user->image, // Save the image name in the database
        ]);

        $company->update([
            'location' => $request->input('address'),
            'description' => $request->input('description'),
        ]);

        return redirect()->back()->with('success', 'Information updated successfully.');
    }


    public function rentalControlCenter()
    {
        $userId = Auth::id();
        // $userId = 1;

        // Get the rentals for the cars owned by the authenticated user, including the image
        $rentals = Rental::whereHas('car', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->with(['car.images', 'user', 'status'])->get();

        // $rentals = Rental::where('user_id', $userId)->with(['car.images', 'user', 'status'])->get();

        // Calculate total price for each rental
        // foreach ($rentals as $rental) {
        //     $days = $rental->rent_start->diffInDays($rental->rent_end) + 1;
        //     $rental->total_price = $days * $rental->car->price_per_day;
        // }

        $statuses = Status::all(); // Get all available statuses
        $company = Company::where('user_id', $userId)->first();
        return view('companies.rental-control-center', compact('company', 'rentals', 'statuses'));
    }



    public function updateRentalStatus(Request $request, $rentalId)
    {
        $rental = Rental::findOrFail($rentalId);

        $userId = Auth::id();
        if ($rental->car->user_id !== $userId) {
            return redirect()->back()->with('error', 'Unauthorized access.');
        }

        $rental->status_id = $request->input('status_id');
        $rental->save();

        return redirect()->back()->with('success', 'Rental status updated successfully.');
    }



    public function carControlCenter()
    {
        $userId = auth()->user()->id;
        // $userId = 1;
        $cars = Car::where('user_id', $userId)
            ->where('status', 'accepted')
            ->with('images', 'features')
            ->get();
        $times_rented = [];
        $total_profit = [];
        foreach ($cars as $car) {
            $time_rented = Rental::where(
                'car_id',
                $car->id
            )->count();
            $times_rented["$car->id"] = $time_rented;
            $money = 0;
            $rentals = Rental::where(
                'car_id',
                $car->id
            )->get();
            foreach ($rentals as $rental) {
                $start = Carbon::parse($rental->rent_start)->startOfDay();
                $end = Carbon::parse($rental->rent_end)->endOfDay();
                $days = $end->diffInDays($start);
                $money += $days * $car->price_per_day;
            }
            $total_profit["$car->id"] = $money;
        }

        $company = Company::where('user_id', $userId)->first();


        return view('companies.car_control_center', compact('company', 'cars', 'times_rented', 'total_profit'));
    }

    public function requestsCar()
    {

        $userId = auth()->user()->id;
        // $userId = 1;
        $cars = Car::where('user_id', $userId)
            ->where(function ($query) {
                $query->where('status', 'pending')
                    ->orWhere('status', 'rejected');
            })
            ->with('images', 'features')
            ->get();


        $company = Company::where('user_id', $userId)->first();


        return view('companies.requestsCar', compact('company', 'cars'));
    }

    public function createCar()
    {
        $userId = auth()->user()->id;
        $company = Company::where('user_id', $userId)->first();
        $brands = Brand::all(); // Assuming you have a Brand model

        return view('companies.create_car', compact('brands', 'company'));
    }


    public function storeCar(Request $request)
    {
        $validatedData = $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'model' => 'required|string|max:255',
            'body' => 'required|string|max:255',
            'ac' => 'required|in:Yes,No',
            'door' => 'required|integer|min:1|max:10',
            'mileage' => 'required|integer|min:0',
            'fuel_type' => 'required|string|max:255',
            'make' => 'required|string|max:255',
            'transmission' => 'required|string|max:255',
            'drivetrain' => 'required|string|max:255',
            'vin' => 'required|string|max:255',
            'brake' => 'required|string|max:255',
            'year' => 'required|integer|min:1886|max:' . date('Y'),
            'engine_hp' => 'required|integer|min:0',
            'price_per_day' => 'required|numeric|min:0',
            'features' => 'required|array|min:1',
            'features.*' => 'nullable|string|max:255',
            'images' => 'required|array|min:1',
            'images.*' => 'required|image',
            'imagesC' => 'nullable|image', // Validate the certificate image if provided
        ]);

        // Create a new car record
        $car = new Car();

        $car->brand_id = $validatedData['brand_id'];
        $car->model = $validatedData['model'];
        $car->body = $validatedData['body'];
        $car->ac = $validatedData['ac'];
        $car->door = $validatedData['door'];
        $car->mileage = $validatedData['mileage'];
        $car->fuel_type = $validatedData['fuel_type'];
        $car->make = $validatedData['make'];
        $car->transmission = $validatedData['transmission'];
        $car->drivetrian = $validatedData['drivetrain']; // Corrected spelling of "drivetrain"
        $car->vin = $validatedData['vin'];
        $car->brake = $validatedData['brake'];
        $car->year = $validatedData['year'];
        $car->engine_hp = $validatedData['engine_hp'];
        $car->price_per_day = $validatedData['price_per_day'];
        $car->user_id = auth()->id();
        $car->availability = "Available";
        $car->status = "pending";


        $car->save();

        // Save features
        foreach ($validatedData['features'] as $feature) {
            $car->features()->create(['name' => $feature]);
        }

        // Save car images from step 3
        foreach ($request->file('images') as $image) {
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('car_images'), $imageName);
            $car->images()->create(['name' => $imageName]);
        }

        // Save certificate image from step 4 (if provided)
        if ($request->hasFile('imagesC')) {
            $certificateImage = $request->file('imagesC');
            $certificateImageName = 'certificate_' . time() . '.' . $certificateImage->extension();
            $certificateImage->move(public_path('car_images'), $certificateImageName);
            $car->images()->create(['name' => $certificateImageName, 'type' => 'certificate']);
        }

        return redirect()->route('company.carControlCenter')->with('success', 'Car created successfully.');
    }

    // public function storeCar(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'brand_id' => 'required|exists:brands,id',
    //         'model' => 'required|string|max:255',
    //         'body' => 'required|string|max:255',
    //         'ac' => 'required|in:Yes,No',
    //         'door' => 'required|integer|min:1|max:10',
    //         'mileage' => 'required|integer|min:0',
    //         'fuel_type' => 'required|string|max:255',
    //         'make' => 'required|string|max:255',
    //         'transmission' => 'required|string|max:255',
    //         'drivetrain' => 'required|string|max:255',
    //         'vin' => 'required|string|max:255',
    //         'brake' => 'required|string|max:255',
    //         'year' => 'required|integer|min:1886|max:' . date('Y'),
    //         'engine_hp' => 'required|integer|min:0',
    //         'price_per_day' => 'required|numeric|min:0',
    //         'features' => 'required|array|min:1',
    //         'features.*' => 'nullable|string|max:255',
    //         'images' => 'required|array|min:1',
    //         'images.*' => 'required|image',
    //     ]);

    //     // Create a new car record
    //     $car = new Car();

    //     $car->brand_id = $validatedData['brand_id'];
    //     $car->model = $validatedData['model'];
    //     $car->body = $validatedData['body'];
    //     $car->ac = $validatedData['ac'];
    //     $car->door = $validatedData['door'];
    //     $car->mileage = $validatedData['mileage'];
    //     $car->fuel_type = $validatedData['fuel_type'];
    //     $car->make = $validatedData['make'];
    //     $car->transmission = $validatedData['transmission'];
    //     $car->drivetrian = $validatedData['drivetrain'];
    //     $car->vin = $validatedData['vin'];
    //     $car->brake = $validatedData['brake'];
    //     $car->year = $validatedData['year'];
    //     $car->engine_hp = $validatedData['engine_hp'];
    //     $car->price_per_day = $validatedData['price_per_day'];
    //     $car->user_id = auth()->id();
    //     $car->availability = "Availabile";

    //     $car->save();

    //     // Save features
    //     foreach ($validatedData['features'] as $feature) {
    //         $car->features()->create(['name' => $feature]);
    //     }

    //     // Save images
    //     foreach ($request->file('images') as $image) {
    //         $imageName = time() . '.' . $image->extension();
    //         $image->move(public_path('car_images'), $imageName);
    //         $car->images()->create(['name' => $imageName]);
    //     }
    //     // Save images
    //     // if ($request->hasFile('images')) {
    //     //     foreach ($request->file('images') as $image) {
    //     //         $path = $image->store('cars', 'public');
    //     //         $car->images()->create(['name' => $path]);
    //     //     }
    //     // }

    //     return redirect()->route('company.carControlCenter')->with('success', 'Car created successfully.');
    // }


    public function showCar($id)
    {
        // $userId = auth()->user()->id;
        $userId = 1;

        $car = Car::findOrFail($id);
        $company = Company::where('user_id', $userId)->first();

        return view('listing-details', compact('car', 'company'));
    }



    public function editCar($id)
    {
        $userId = auth()->user()->id;

        $car = Car::findOrFail($id);
        $brands = Brand::all();
        $company = Company::where('user_id', $userId)->first();
        $images = $car->images;

        return view('companies.edit_car', compact('car', 'brands', 'company', 'images'));
    }

    public function updateCar(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        $s = $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'model' => 'required|string|max:255',
            'body' => 'required|string|max:255',
            'ac' => 'required|in:Yes,No',
            'door' => 'required|integer|min:1|max:10',
            'mileage' => 'required|integer|min:0',
            'fuel_type' => 'required|string|max:255',
            'make' => 'required|string|max:255',
            'transmission' => 'required|string|max:255',
            'drivetrian' => 'required|string|max:255',
            'vin' => 'required|string|max:255',
            'brake' => 'required|string|max:255',
            'year' => 'required|integer|min:1886|max:' . date('Y'),
            'engine_hp' => 'required|integer|min:0',
            'price_per_day' => 'required|numeric',
            'features' => 'required|array',
            'features.*' => 'nullable|string|max:255',
            'image.*' => 'nullable|image',
            'image' => 'nullable|image',

        ]);
        $car->update($request->only([
            'brand_id',
            'model',
            'body',
            'ac',
            'door',
            'mileage',
            'fuel_type',
            'make',
            'transmission',
            'drivetrian',
            'vin',
            'brake',
            'year',
            'engine_hp',
            'price_per_day'
        ]));
        // Update features
        $car->features()->delete();
        foreach (array_filter($request->features) as $feature) {
            if (!empty($feature)) {
                $car->features()->create(['name' => $feature]);
            }
        }

        // Handle image deletion
        if ($request->has('delete_images')) {
            foreach ($request->input('delete_images') as $imageId) {
                $image = $car->images()->find($imageId);
                if ($image) {
                    Storage::delete('public/' . $image->name); // Ensure correct path
                    $image->delete();
                }
            }
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('car_images'), $imageName);
                $car->images()->create(['name' => 'car_images/' . $imageName]);
            }
        }

        return redirect()->route('company.carControlCenter')->with('success', 'Car updated successfully.');
    }



    public function deleteCar($id)
    {
        $car = Car::findOrFail($id);

        // Delete associated images
        foreach ($car->images as $image) {
            Storage::delete('public/' . $image->name);
            $image->delete();
        }

        $car->delete();
        return redirect()->route('companies.carControlCenter')->with('success', 'Car deleted successfully.');
    }

    public function availabilityCenter()
    {
        $userId = auth()->user()->id;
        // $userId = 1;
        $cars = Car::where('user_id', $userId)->with('images', 'features')->get();
        $times_rented = [];
        $total_profit = [];
        foreach ($cars as $car) {
            $time_rented = Rental::where(
                'car_id',
                $car->id
            )->count();
            $times_rented["$car->id"] = $time_rented;
            $money = 0;
            $rentals = Rental::where(
                'car_id',
                $car->id
            )->get();
            foreach ($rentals as $rental) {
                $start = Carbon::parse($rental->rent_start)->startOfDay();
                $end = Carbon::parse($rental->rent_end)->endOfDay();
                $days = $end->diffInDays($start);
                $money += $days * $car->price_per_day;
            }
            $total_profit["$car->id"] = $money;
        }

        $company = Company::where('user_id', $userId)->first();


        return view('companies.availability_center', compact('company', 'cars', 'times_rented', 'total_profit'));
    }

    public function updateAvailabilityStatus(Request $request, $carId)
    {
        $car = Car::findOrFail($carId);

        // $userId = Auth::id();
        // if ($car->user_id !== $userId) {
        //     return redirect()->back()->with('error', 'Unauthorized access.');
        // }

        $car->availability = $request->input('availability');
        $car->save();

        return redirect()->back()->with('success', 'Availability status updated successfully.');
    }
}
