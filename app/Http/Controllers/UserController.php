<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Company;
use App\Models\User;
use App\Models\Status;
use App\Models\Brand;
use App\Models\RentalRequest;
use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;
use App\Models\Rental;


class UserController extends Controller
{

    public function showUserInfo()
    {
        $userId = Auth::id();
        $user = User::find($userId);



        return view('users.user-info', compact('user'));
    }

    public function updateUserInfo(Request $request)
    {
        // dd($request->all());

        $userId = Auth::id();
        $user = User::find($userId);

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:20',
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



        return redirect()->back()->with('success', 'Information updated successfully.');
    }

    public function rentalHistoryCenter()
    {

        $userId = Auth::id();
        $user = User::find($userId); // Get the authenticated user
        // Get the confirmed and cancelled status IDs
        $confirmedStatusIds = Status::where('name', 'Confirmed')
            ->orWhere('name', 'Cancelled')
            ->pluck('id');  // Extract the IDs of the statuses

        // Fetch the rentals for this user
        $rentals = Rental::where('user_id', $userId)  // Fetch rentals where the logged-in user is the renter
            ->whereIn('status_id', $confirmedStatusIds)  // Filter by confirmed and cancelled status
            ->with(['car.images', 'user', 'status'])  // Eager load related data
            ->get();

        return view('users.rental-history-center', compact('user', 'rentals'));
    }
    // Method to show the "Become a Lessor" page
    public function becomeLessor()
    {
        // Retrieve the currently authenticated user
        $users = Auth::user();

        // Pass the user data to the view
        return view('users.become-lessor', compact('users'));
    }

    public function rentalRequestCenter()
    {
        $userId = Auth::id();
        $user = User::find($userId);

        // Fetch the status IDs for "Confirmed" and "Cancelled"
        $confirmedStatus = Status::where('name', 'Pending')->first();

        // Ensure the statuses exist
        if (!$confirmedStatus) {
            return redirect()->back()->with('error', 'Status not found.');
        }

        // Get the rentals for the cars owned by the authenticated user, filtered by status
        $rentals = Rental::where('user_id', $userId)  // Fetch rentals where the logged-in user is the renter
            ->whereIn('status_id', [$confirmedStatus->id])  // Filter by confirmed status
            ->with(['car.images', 'user', 'status'])  // Eager load related data
            ->get();
        // dd($rentals);

        $statuses = Status::all(); // Get all available statuses

        return view('users.rental-request-center', compact('user', 'rentals', 'statuses'));
    }


    public function submitBecomeLessor(Request $request, $id)
    {
        $request->validate([
            'user_description' => 'required|',
            'company_description' => 'required|',
            'company_location' => 'required|',
            'personal_id_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('personal_id_photo')) {
            $file = $request->file('personal_id_photo');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('user_id_image'), $imageName);
            // $imageName = time() . '.' . $request->personal_id_photo->extension();
            // $request->image->move(public_path('user_id_image'), $imageName);
        } else {
            $imageName = 'default.png';
        }

        RentalRequest::create([
            'user_id'=> $id,
            'user_description' => $request->user_description,
            'user_id_image' => $imageName,
            'request_status' => 'pindding',
        ]);
        Company::create([
            'user_id'=> $id,
            'rating'=> '0',
            'description'=> $request->company_description,
            'location'=> $request->company_location,
            'num_of_ratings'=> '0',
            'status'=> '0',
        ]);
        return redirect()->route('home_index');
    }
}