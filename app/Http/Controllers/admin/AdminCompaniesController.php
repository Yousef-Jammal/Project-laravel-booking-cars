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
    public function viewCompnay($id){
        $compnaies = Company::find($id);
        // $users = User::all();
        return view('admin.view.view_companies', ['compnaies'=>$compnaies]);
    }
    public function editCompnay($id){
        $compnaies = Company::find($id);
        $users = User::all();
        return view('admin.edit.edit_company', ['compnaies'=>$compnaies, 'users'=>$users]);
    }
    public function createCompany(){
        $users = User::all();


        return view('admin.create.create_companies', ['users'=>$users]);
    }


        public function storeCompany(Request $request)
        {
            Company::create([
                'user_id' => $request->user_id,
                'location' => $request->location,
                'description' =>$request->description,
                'rating' =>$request->rating,
                'num_of_ratings' =>$request->num_of_ratings,
            ]);
            return redirect()->route('admin_companies');
        }

        public function updateCompany(string $id, Request $request)
        {
            Company::find($id)->update([
                'user_id' => $request->user_id,
                'location' => $request->location,
                'description' =>$request->description,
                'rating' =>$request->rating,
                'num_of_ratings' =>$request->num_of_ratings,
            ]);
            return redirect()->route('admin_companies');
        }


        public function deleteCompany(string $id)
        {
            $company = Company::find($id);
            $company->delete();
            return redirect()->route('admin_companies');
        }


}