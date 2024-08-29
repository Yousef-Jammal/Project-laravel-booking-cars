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

class AdminCompaniesController extends Controller
{

    public function index(){
        $companies = Company::with('user') // Eager load the related User model
        ->select('*')
        ->orderBy('id', 'ASC')
        ->paginate(5);

          return view('admin.manage_company', ['companies' => $companies]);
    }

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
            return view('admin.edit.edit_company', ['company'=>$company]);
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


}