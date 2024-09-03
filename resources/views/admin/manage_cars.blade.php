@extends('admin.master')
@section('pageName', 'Cars Mangment')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="background-image: linear-gradient(195deg, #ffa633 0%, #ffa633 100%)">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h6 class="text-white text-capitalize ps-3">Cars table</h6>
                            <a href="{{ route('admin_create_car') }}" class="btn btn-beautiful" style="margin-right: 20px; color: #fff;">
                                Add Car
                            </a>
                        </div>
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cars as $car)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                @php
                                                    $c1 = $car->images;
                                                    $c2 = $c1[0];
                                                @endphp
                                                <img src="{{ asset("car_images/$c2->name") }}" class="avatar avatar-sm me-3 border-radius-lg" alt="car">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                @php
                                                if ($car->brand) {
                                                    $hi = $car->brand->name;
                                                }else {
                                                    $hi = 'Ford' ;
                                                }
                                                    @endphp
                                                <h6 class="mb-0 text-sm">{{ $hi }}</h6>
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
                                        <a href="{{route('admin_show_car', $car->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="View car">
                                            <img src="{{asset('img/icons/my_eye.png')}}" style="width: 21px; margin:0 3px 0">
                                        </a>

                                        <a href="{{route('admin_edit_car', $car->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit car">
                                            <img src="{{asset('img/icons/my_edit.png')}}" style="width: 20px; margin:0 3px 0 ">
                                        </a>

                                        <a href="{{route('admin_delete_car', $car->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete car">
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

@section('admin_style')
<style>
    .btn-beautiful {
        background-image: linear-gradient(45deg, #ff6a00, #ee0979);
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 25px;
        text-transform: uppercase;
        font-weight: bold;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
        position: relative;
        overflow: hidden;
    }

    .btn-beautiful::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 300%;
        height: 300%;
        background: rgba(255, 255, 255, 0.15);
        transition: all 0.3s ease-in-out;
        transform: translate(-50%, -50%) rotate(45deg);
        opacity: 0;
    }

    .btn-beautiful:hover {
        transform: scale(1.05);
        box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.2);
    }

    .btn-beautiful:hover::before {
        opacity: 1;
    }

    .btn-beautiful:active {
        transform: scale(1);
        box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection

@section('admin_scripts')
<script>
    document.querySelector('.btn-beautiful').addEventListener('mouseover', function() {
        this.style.backgroundImage = 'linear-gradient(45deg, #ee0979, #ff6a00)';
    });

    document.querySelector('.btn-beautiful').addEventListener('mouseout', function() {
        this.style.backgroundImage = 'linear-gradient(45deg, #ff6a00, #ee0979)';
    });
</script>
@endsection
