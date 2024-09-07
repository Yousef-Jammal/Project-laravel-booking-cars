<?php

namespace App\Http\Controllers;

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

    // Fetch the rentals for this user
    $rentals = Rental::whereHas('car', function ($query) use ($userId) {
        $query->where('user_id', $userId);
    })->with(['car.images', 'user', 'status'])->get();

    return view('users.rental-history-center', compact('user', 'rentals'));
 }
// Method to show the "Become a Lessor" page
public function becomeLessor()
{
    // Retrieve the currently authenticated user
    $user = Auth::user();

    // Pass the user data to the view
    return view('users.become-lessor', compact('user'));
}

    public function rentalRequestCenter()
    {
        $userId = Auth::id();
        $user = User::find($userId);

        // Fetch the status IDs for "Confirmed" and "Cancelled"
        $confirmedStatus = Status::where('name', 'Pending')->first();

        // Ensure the statuses exist
        if (!$confirmedStatus ) {
            return redirect()->back()->with('error', 'Status not found.');
        }

        // Get the rentals for the cars owned by the authenticated user, filtered by status
        $rentals = Rental::whereHas('car', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->whereIn('status_id', [$confirmedStatus->id])
            ->with(['car.images', 'user', 'status'])
            ->get();

        $statuses = Status::all(); // Get all available statuses

        return view('users.rental-request-center', compact('user', 'rentals', 'statuses'));
    }


    public function submitBecomeLessor(Request $request, $id)
    {

        // users_id_photos
        $data = [
            'user_description' =>$request->user_description,
            'Personal_ID_photo' =>$request->Personal_ID_photo
        ];
        RentalRequest::create($data);
        return redirect()->route('');

    }
}