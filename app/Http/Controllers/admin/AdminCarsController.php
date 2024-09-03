<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Image;
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
            $cars = Car::with('images')
                        ->orderBy('id', 'ASC')
                        ->paginate(5);

              return view('admin.manage_cars', ['cars'=> $cars]);
        }

        public function createCar()
        {
            $users = User::all();
            $brands = Brand::all();
            return view('admin.create.create_cars', ['users'=>$users, 'brands'=> $brands]);

        }
        // public function storeCar (Request $request)
        // {
        //     $request->validate([
        //         'name' => 'required|string|max:255',
        //         'email' => 'required|email|unique:users,email',
        //         'password' => 'required|string|min:8|confirmed',
        //         'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        //         'phone' => 'required|regex:/^07\d{8}$/',
        //     ]);
        //     $imageName = time() . '.' . $request->image->extension();
        //     $request->image->move(public_path('user_images'), $imageName);
        //     $user = new User();
        //     $user->name = $request->name;
        //     $user->email = $request->email;
        //     $user->image = $imageName;
        //     $user->phone = $request->phone;
        //     $user->password = Hash::make($request->password);
        //     $user->save();
        //     return response()->json(["User" => $user]);
        // }
        public function viewCar($id){
            $car = Car::find($id);
            $users = User::all();
            $brands = Brand::all();
            return view('admin.view.view_cars', ['car'=>$car, 'users'=>$users, 'brands'=> $brands]);
        }
        public function editCar($id){
            $car = Car::find($id);
            $users = User::all();
            $brands = Brand::all();
            return view('admin.edit.edit_car', ['car'=>$car, 'users'=>$users, 'brands'=> $brands]);
        }
        public function storeCar(Request $request)
        {
            // $imageName = time() . '.' . $request->file->extension();
            $imageName = $request->file('file')->getClientOriginalName();

            $file = $request->file('file');
            $file->move(public_path('car_images'), $file->getClientOriginalName());

            $maxId = Car::max('id');
            $current = $maxId +2;




            $car = Car::create([
                'user_id' => $request->user_id,
                'availability' => $request->availability,
                'brand_id' => $request->brand_id,
                'model' => $request->model,
                'body' => $request->body,
                'ac' => $request->ac,
                'door' => $request->door,
                'mileage' => $request->mileage,
                'fuel_type' => $request->fuel_type,
                'make' => $request->make,
                'transmission' => $request->transmission,
                'drivetrian' => $request->drivetrian,
                'vin' => $request->vin,
                'brake' => $request->brake,
                'year' => $request->year,
                'engine_hp' => $request->engine_hp,
                'rating' => $request->rating,
                'num_of_ratings' => $request->num_of_ratings,
                'price_per_day' => $request->price_per_day,
                'date_created' => $request->date_created,
            ]);

            Image::create([
                'name' => $imageName,
                'car_id' => $car->id,
            ]);


            return redirect()->route('admin_cars')->with('success', 'Car updated successfully!');
        }
    public function updateCar(Request $request, $id)
    {

        // Find the car by ID
        $car = Car::findOrFail($id);

        // Update the car details with the request data
        $car->update([
            'user_id' => $request->user_id,
            'availability' => $request->availability,
            'brand_id' => $request->brand_id,
            'model' => $request->model,
            'body' => $request->body,
            'ac' => $request->ac,
            'door' => $request->door,
            'mileage' => $request->mileage,
            'fuel_type' => $request->fuel_type,
            'make' => $request->make,
            'transmission' => $request->transmission,
            'drivetrian' => $request->drivetrian,
            'vin' => $request->vin,
            'brake' => $request->brake,
            'year' => $request->year,
            'engine_hp' => $request->engine_hp,
            'rating' => $request->rating,
            'num_of_ratings' => $request->num_of_ratings,
            'price_per_day' => $request->price_per_day,
            // 'date_created' => $request->date_created,
        ]);

        // Redirect to the cars list with a success message
        return redirect()->route('admin_cars')->with('success', 'Car updated successfully!');
    }
        public function deleteCar(string $id)
        {
            $car = Car::find($id);
            $car->delete();
            return redirect()->route('admin_cars');
        }

}