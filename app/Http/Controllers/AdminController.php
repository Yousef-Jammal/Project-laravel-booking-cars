<?php

namespace App\Http\Controllers;

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
    public function index_tables()
    {
        $users = User::select('*')->orderby('id', 'ASC')->paginate(5);
        $cars = Car::select('*')->orderby('id', 'ASC')->paginate(5);
        $companies = Company::with('user') // Eager load the related User model
        ->select('*')
        ->orderBy('id', 'ASC')
        ->paginate(5);


        // return response()->json(["users" => $users]);
        return view('admin.tables', [
            'users'=>$users, 'cars'=> $cars, 'companies' => $companies]);
    }


    //   start User section
    public function viewUser(string $id)
    {
        $user = User::find($id);
        return response()->json(["user" => $user]);
    }

    public function addUser(Request $request)
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

    public function editUser($id){
        $user = User::find($id);
        return view('admin.edit_user', ['user'=>$user]);
    }

    public function updateUser(string $id, Request $request)
    {
        $user = User::find($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'password' => 'required|string|min:8',
            'phone' => 'required|regex:/^07\d{7}$/',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ],
        [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name must not exceed 255 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'This email is already taken.',
            'password.required' => 'The password field is required.',
            'password.string' => 'The password must be a string.',
            'password.min' => 'The password must be at least 8 characters long.',
            'phone.required' => 'The phone number is required.',
            'phone.regex' => 'The phone number must start with 07 and be followed by 7 digits.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be of type: jpeg, png, jpg, gif.',
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('user_images'), $imageName);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $imageName,
                'phone' => $request->phone,
                'password' => Hash::make($request->password)
            ]);
        } else {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password)
            ]);
        }
        // return response()->json(["updated user" => $user]);
        return redirect()->route('admin_index_tables');
    }


    public function deleteUser(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin_index_tables');
        // return response()->json(["message" => "deleted user"]);
    }

    // End User section



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
        // End car section




    //   start Company section
    public function viewCompany(string $id)
    {
        $company = Company::find($id);
        return response()->json(["company" => $company]);
    }

    public function addCompany(Request $request)
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

    public function editCompany($id){
        $company = Company::find($id);
        return view('admin.edit_company', ['company'=>$company]);
    }

    public function updateCompany(string $id, Request $request)
    {
        $company = Company::find($id);

        $request->validate([
            'user_id' => 'required|exists:users,id', // Ensures the user_id exists in the users table
            'description' => 'required|string|max:255', // Ensures description is a string and does not exceed 255 characters
            'location' => 'required|string|max:255', // Ensures location is a string and does not exceed 255 characters
        ], [
            'user_id.required' => 'The user ID field is required.',
            'user_id.exists' => 'The selected user ID is invalid.',
            'description.required' => 'The description field is required.',
            'description.string' => 'The description must be a string.',
            'description.max' => 'The description may not be greater than 255 characters.',
            'location.required' => 'The location field is required.',
            'location.string' => 'The location must be a string.',
            'location.max' => 'The location may not be greater than 255 characters.',
        ]);



        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('user_images'), $imageName);
            $company->update([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $imageName,
                'phone' => $request->phone,
                'password' => Hash::make($request->password)
            ]);
        } else {
            $company->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password)
            ]);
        }
        // return response()->json(["updated user" => $user]);
        return redirect()->route('admin_index_tables');
    }


    public function deleteCompany(string $id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect()->route('admin_index_tables');
        // return response()->json(["message" => "deleted user"]);
    }

    // End User section

}