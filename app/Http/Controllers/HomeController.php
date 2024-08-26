<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\search;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $cars =  Car::offset(0)->limit(6)->get();
        $count = DB::table('cars')
                        ->select('body', DB::raw('count(id) as total'))
                        ->groupBy('body')
                        ->get();

        $list = [];
        foreach($count as $count_body){
            $list[$count_body->body] = $count_body->total;
        }

        return view('index', ['cars'=> $cars, 'count'=>$list]);



    }
    public function search_rentals(Request $request)   // index line 15
    {
        $data['pickup_location'] = $request->pickup_location;

        $data['pickup_date_d'] = $request->pickup_date_d;
        $data['pickup_date_h'] = $request->pickup_date_h;

        $data['return_date_d'] = $request->return_date_d;
        $data['return_date_h'] = $request->return_date_h;

        // print_r($data);
        return redirect()->route('pruduct_list_from_home_with_filter', ['brands' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function go_to_pruduct_details($id)
    {
        return $id;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function ajax_search(Request $request)
    {

        if($request->ajax()){

            $searchUser = $request->searchUser;

            if($searchUser != ''){

                $brands = Brand::select('*')
                ->where('name', 'like', "%$searchUser%")
                ->orderby('id', 'ASC')
                ->paginate(1);

                foreach($brands as $u){
                    $brand_id =  $u->id;
                }

                $cars = Car::select('*')
                ->where('brand_id', '=', "$brand_id")
                ->orderby('id', 'ASC')
                ->paginate(6);

                // var_dump($cars);

            }else{
                $cars = Car::all()->paginate(6);
            }

            return view('ajax_search' , ['cars'=>$cars]);
        }
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