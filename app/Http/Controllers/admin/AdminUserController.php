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

class AdminUserController extends Controller
{

        public function index(){
            $users = User::select('*')->orderby('id', 'ASC')->paginate(5);
              return view('admin.manage_user', ['users'=>$users]);
        }

        //   start User section
        public function viewUser(string $id)
        {
            $user = User::find($id);
            return view('admin.view.view_user',["user" => $user]);
            // return response()->json(["user" => $user]);
        }

        public function addUser(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
                'phone' => 'required|regex:/^07\d{8}$/',
            ]);
        
            // Handle the image upload if the image is provided
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('user_images'), $imageName);
            } else {
                // Use a default image if none is provided
                $imageName = 'default.png'; // Ensure this image exists in the 'user_images' directory
            }
        
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->image = $imageName;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->date_created = date("Y-m-d");
            $user->save();
        
            return redirect()->route('admin_users');
        }


        public function editUser($id){
            $user = User::find($id);
            return view('admin.edit.edit_user', ['user'=>$user]);
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
                'phone' => 'required|regex:/^07\d{8}$/',
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
                    'password' => Hash::make($request->password),
                ]);
            } else {
                $user->update([
                    'name' => $request->name,
                    'image' => '1724837450.jpg',
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'password' => Hash::make($request->password)
                ]);
            }
            // return response()->json(["updated user" => $user]);
            return redirect()->route('admin_users');
        }


        public function deleteUser(string $id)
        {
            $user = User::find($id);
            $user->delete();
            return redirect()->route('admin_users');
            // return response()->json(["message" => "deleted user"]);
        }
        public function createUser()
        {
            return view('admin.create.create_user');
        }


}