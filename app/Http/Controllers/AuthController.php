<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;


class AuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
            $request->session()->regenerate();

            // Redirect based on user role
            $user = Auth::user();

            $data = json_decode($user->role, true); // Decodes into an associative array

            $role_id = $data['id']; // Accessing the 'id' value

            if ($role_id == '3') {
                return redirect()->route('admin_index');
            } else {
                return redirect()->route('home_index');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    // Show registration form
    public function showRegisterForm()
    {
        return view('register');
    }

    // Handle registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:15|regex:/^[a-zA-Z0-9]+$/',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|regex:/^[\d\s\+\-\(\)]{7,}$/',
            'password' => 'required|confirmed|min:8|regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'date_created' => Carbon::now()->format('Y-m-d')
        ]);

        Auth::login($user);

        return redirect()->route('home_index');
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}