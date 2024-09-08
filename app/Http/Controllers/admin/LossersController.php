<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Car;
use App\Models\User;
use App\Models\Company;
use App\Models\RentalRequest;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class LossersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $renaters_request = RentalRequest::where('request_status', 'pending')
                                            ->get();
        // return $renaters_request;
        return view('admin.checkLosser', ['renaters_request' => $renaters_request]);
    }
    public function updateStatus(Request $request)
    {

        $renaterRequest = RentalRequest::find($request->renater_id);

        // $renaterRequestCom = Company::where('user_id', $request->user_id)
        // ->get();

        $renaterRequest->request_status = $request->status;
        $renaterRequest->save();

        // $renaterRequestCom->status = '1';

        // $renaterRequestCom->save();

        return response()->json(['success' => true, 'message' => 'Status updated successfully']);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}