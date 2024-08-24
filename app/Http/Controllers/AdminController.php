<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CarController extends Controller
{
    // Start User functions
    public function viewAllUsers()
    {
        $users = User::all();
        return response()->json(["users" => $users]);
    }

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

    public function updateUser(string $id, Request $request)
    {
        $user = User::find($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|regex:/^07\d{8}$/',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
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
        return response()->json(["updated user" => $user]);
    }


    public function deleteUser(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json(["message" => "deleted user"]);
    }

    // End User Functions
}
