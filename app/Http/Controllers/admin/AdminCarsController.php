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

class AdminCarsController extends Controller
{
        public function index(){
            $cars = Car::select('*')->orderby('id', 'ASC')->paginate(5);
              return view('admin.edit.manage_cars', ['cars'=> $cars]);
        }

        // start Car section
        public function viewCar(string $id)
        {
            $user = Car::find($id);
            return response()->json(["user" => $user]);
        }
        public function addCar(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8|confirmed',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif',
                'phone' => 'required|regex:/^07\d{8}$/',
            ]);
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('user_images'), $imageName);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->image = $imageName;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->save();
            return response()->json(["User" => $user]);
        }
        public function editCar($id){
            $car = Car::find($id);
            return view('admin.edit_car', ['car'=>$car]);
        }
        public function updateCar(string $id, Request $request)
        {
            $car = Car::find($id);
            $validatedData = $request->validate([
                'user_id' => 'required|integer|exists:users,id',
                'availability' => 'required|string|max:255',
                'brand' => 'required|string|max:255',
                'model' => 'required|string|max:255',
                'body' => 'required|string|max:255',
                'ac' => 'required|string|max:255',
                'door' => 'required|integer|min:1',
                'mileage' => 'required|integer|min:0',
                'fuel_type' => 'required|string|max:255',
                'make' => 'required|string|max:255',
                'transmission' => 'required|string|max:255',
                'drivetrian' => 'required|string|max:255',
                'vin' => 'required|string|max:255',
                'brake' => 'required|string|max:255',
                'year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
                'engine_hp' => 'required|integer|min:0',
                'rating' => 'required|numeric|min:0|max:5',
                // 'num_of_ratings' => 'required|integer|min:0',
                'price_per_day' => 'required|numeric|min:0',
            ], [
                'user_id.required' => 'The user ID is required.',
                'user_id.integer' => 'The user ID must be an integer.',
                'user_id.exists' => 'The user ID does not exist in the database.',
                'year.required' => 'The year is required.',
                'year.integer' => 'The year must be an integer.',
                'year.digits' => 'The year must be exactly 4 digits.',
                'year.min' => 'The year must be after 1900.',
                'year.max' => 'The year must not exceed the current year.',
                'rating.min' => 'The rating must be at least 0.',
                'rating.max' => 'The rating must not exceed 5.',
                'price_per_day.required' => 'The price per day is required.',
                'price_per_day.numeric' => 'The price per day must be a number.',
            ]);
            $car->update($validatedData);

            return redirect()->route('admin_index_tables');
        }
        public function deleteCar(string $id)
        {
            $car = Car::find($id);
            $car->delete();
            return redirect()->route('admin_index_tables');
        }

}