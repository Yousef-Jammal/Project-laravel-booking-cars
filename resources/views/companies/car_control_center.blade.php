@extends('masterPage')


@section('content')
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title">{{ $company->user->name }} Cars </h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item my_name_is_yousef"><a href="index-2.html">Home/</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $company->user->name }} Car Control Center </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="dashboard-nav">
            <ul class="nav">
                            <li class="nav-item">
                <a class="nav-link {{ request()->is('company/dashboard') ? 'active' : '' }}" href="{{ route('company.dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('company/rental-control-center') ? 'active' : '' }}" href="{{ route('company.rental-control-center') }}">Rental Control Center</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('company/carControlCenter') ? 'active' : '' }}" href="{{ route('company.carControlCenter') }}">Cars Control Center</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('company/availability_center') ? 'active' : '' }}" href="{{ route('company.availabilityCenter') }}">Availability Control Center</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('company/user-info') ? 'active' : '' }}" href="{{ route('company.user-info') }}">Edit Profile</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Log-out</a>
                </li> --}}
            </ul>
        </div>
<div class="container mt-5">
    <h2>Car Control Center</h2>
    <a href="{{ route('company.createCar') }}" class="btn btn-primary mb-3">Add New Car</a>
    <a href="{{ route('company.requestsCar') }}" class="btn btn-primary mb-3">Car Requests History</a>


    <div class="row">


        @if($cars->isEmpty())
        <p>No cars available for this company.</p>
        @else
        <div class="row">
            @foreach($cars as $car)
            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                <div class="listing-item">
                    <div style="height: 250px; object-fit: cover; " class="listing-img">
                        <a href="{{ route('car.details', $car->id) }}">
                            @if($car->images->isNotEmpty())
                            <img src='{{url("/car_images/".$car->images->first()->name)}}' class="img-fluid" alt="{{ $car->images->first()->name }}">
                            @else
                            <img src="{{ asset('img/cars/car-01.jpg') }}" class="img-fluid" alt="Default Image">
                            @endif
                        </a>
                        <div class="fav-item">
                            <span class="featured-text">{{ $car->brand->name }}</span>
                            <a href="javascript:void(0)" class="fav-icon">
                                <i class="feather-heart"></i>
                            </a>
                        </div>
                    </div>





                    <div class="listing-content">
                        <div class="listing-features">
                            <a href="javascript:void(0)" class="author-img">
                                <img src="{{ asset('img/profiles/avatar-0.jpg') }}" alt="author">
                            </a>
                            <h3 class="listing-title">
                                <a href="{{ route('car.details', $car->id) }}">{{ $car->brand->name }} {{ $car->model }}</a>
                            </h3>
                            <div class="list-rating">
                                @php
                                $wholeStars = floor($car->rating); // Number of filled stars
                                $fraction = $car->rating - $wholeStars; // Fractional part of the rating
                                $halfStar = ($car->rating - $wholeStars >= 0.5); // Whether to show a half star
                                $emptyStars = 5 - $wholeStars - ($halfStar ? 1 : 0); // Number of empty stars
                                @endphp

                                @for ($i = 0; $i < $wholeStars; $i++)
                                    <i class="fas fa-star filled"></i>
                                    @endfor

                                    @if($halfStar)
                                    <i class="fas fa-star-half-alt filled"></i>
                                    @endif

                                    @for ($i = 0; $i < $emptyStars; $i++)
                                        <i class="far fa-star"></i>
                                        @endfor

                                        <span>({{ number_format($car->rating, 1) }})</span> <!-- Display the exact rating -->
                            </div>
                        </div>
                        {{-- <div class="listing-details-group">
                                <ul>
                                    <li>
                                        <span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Auto"></span>
                        <p>{{ $car->body }}</p>
                        </li>
                        <li>
                            <span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="Mileage"></span>
                            <p>10 KM</p>
                        </li>
                        <li>
                            <span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Fuel"></span>
                            <p>Petrol</p>
                        </li>
                        </ul>
                        <ul>
                            <li>
                                <span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
                                <p>Power</p>
                            </li>
                            <li>
                                <span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Year"></span>
                                <p>2018</p>
                            </li>
                            <li>
                                <span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Capacity"></span>
                                <p>5 Persons</p>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="listing-location-details">

                        <div class="listing-location-details">
                            <!-- Number of times the car has been rented -->
                            <div class="listing-price">
                                <h6>{{ $times_rented["$car->id"] }} <span>Times Rented</span></h6>
                            </div>
                        </div>

                        <!-- Total revenue generated by the car -->
                        <div class="listing-location-details">
                            <div class="listing-price">
                                <h6>{{ $total_profit["$car->id"] }} <span>Total Revenue</span></h6>
                            </div>
                        </div>
                        {{-- <div class="listing-price">
                                    <h6>${{ $car->price_per_day }} <span>/ Day</span></h6>
                    </div> --}}
                </div>



                <div class="listing-button d-flex justify-content-between">
                    <!-- Edit Button -->
                    <a href="{{ route('company.editCar', $car->id) }}" class="editbtnaseel actionbtnaseelLeft btn btn-warning">
                        <span><i class="feather-edit me-2"></i></span>Edit
                    </a>

                    <!-- Show Button -->
                    <a href="{{ route('company.listing-details', $car->id) }}" class="showbtnaseel actionbtnaseel btn btn-info">
                        <span><i class="feather-eye me-2"></i></span>Show
                    </a>

                    <!-- Delete Button -->
                    <form class="actionbtnaseel" action="{{ route('company.deleteCar', $car->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this car?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delbtnaseel actionbtnaseelLeft btn btn-danger">
                            <span><i class="feather-trash me-2"></i></span>Delete
                        </button>
                    </form>
                </div>


                {{-- <div class="listing-button">
                                <a href="{{ route('car.details', $car->id) }}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
            </div> --}}
        </div>
    </div>
</div>
@endforeach
</div>
@endif
</div>
{{-- <div class="row">
        @foreach($cars as $car)
        <div class="col-md-4">
            <div class="card mb-4">
                @if($car->images->isNotEmpty())
                    <img src="{{ asset('storage/' . $car->images->first()->name) }}" class="card-img-top" alt="Car Image">
@else
<img src="{{ asset('storage/default-car.png') }}" class="card-img-top" alt="Default Car Image">
@endif
<div class="card-body">
    <h5 class="card-title">{{ $car->brand }} {{ $car->model }}</h5>
    <p class="card-text">Price Per Day: ${{ $car->price_per_day }}</p>
    <p class="card-text">Year: {{ $car->year }}</p>
    <p class="card-text">Mileage: {{ $car->mileage }} KM</p>
    <p class="card-text">Fuel Type: {{ $car->fuel_type }}</p>
    <p class="card-text">Engine HP: {{ $car->engine_hp }}</p>
    <p class="card-text">Doors: {{ $car->door }}</p>
    <p class="card-text">Transmission: {{ $car->transmission }}</p>
    <p class="card-text">Drivetrain: {{ $car->drivetrain }}</p>
    <p class="card-text">Rating: {{ $car->rating }}</p>
</div>
</div>
</div>
@endforeach
</div> --}}
</div>
</div>
<br>
<br>

@endsection
