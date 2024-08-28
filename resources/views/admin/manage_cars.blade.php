@extends('admin.master')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3"  style="background-image: linear-gradient(195deg, #ffa633 0%, #ffa633 100%)">
            <h6 class="text-white text-capitalize ps-3" >Cars table</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cars</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" style="width: 190px !important;">Model</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">VIN</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price per day</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Year</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                  {{-- <th class="text-secondary opacity-7"></th> --}}
                </tr>
              </thead>
              <tbody>
                @foreach ($cars as $car)
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                      <div>
                          <img src="{{ asset("img/team-2.jpg") }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$car->brand->name}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                      <p class="text-xs font-weight-bold mb-0">{{$car->model}}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">{{$car->vin}}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$car->price_per_day}}</p>
                </td>
                    <td class="align-middle text-center text-sm">
                          <p class="text-xs font-weight-bold mb-0">{{$car->year}}</p>
                    </td>
                    <td class="align-middle" style="text-align: center">
                        <a href="{{route('admin_show_car', $car->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <img src="{{asset('img/icons/my_eye.png')}}" style="width: 21px; margin:0 3px 0">
                        </a>

                        <a href="{{route('admin_edit_car', $car->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <img src="{{asset('img/icons/my_edit.png')}}" style="width: 20px; margin:0 3px 0 ">
                        </a>

                        <a href="{{route('admin_delete_car', $car->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <img src="{{asset('img/icons/my_delete.png')}}" style="width: 17px; margin:0 3px 0">
                        </a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div style="display: flex; justify-content: center; align-items: center; padding: 10px 0">
                {{$cars->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
