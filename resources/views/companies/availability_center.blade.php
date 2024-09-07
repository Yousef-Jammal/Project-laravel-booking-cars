@extends('masterPage')

@section('content')
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">{{ $company->user->name }} Cars </h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home/</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $company->user->name }} Rental Control Center </li>
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
    </div>

    <div class="container mt-5">
        <h2>Availability Control Center</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif


                <div class="row">
                    <!-- Loop through each car and display it -->
                    @foreach($cars as $car)
                    <div class="listview-car">
                        <div class="card">
                            <div class="blog-widget d-flex">
                                <div class="imgcontainercardaseel col-md-4">
                                    <a href="">
                                        <img src='{{url("/car_images/".$car->images->first()->name)}}' class="availabilityImg img-fluid" alt="car-image" >
                                    </a>
                                </div>
                                <div class="bloglist-content w-100">
                                    <div class="aseelcardlist card-body">
                                        <div class="blog-list-head d-flex">
                                            <div class="blog-list-title">
                                                <h3><a href="">{{ $car->brand->name }}</a></h3>
                                                <h6>Model : <span>{{ $car->model }}</span></h6>
                                            </div>
                                            <div class="blog-list-rate">
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
                                                <h6>${{ $car->price_per_day }} <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Transmission"></span>
                                                    <p>{{ $car->transmission }}</p>
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="Mileage"></span>
                                                    <p>{{ $car->mileage }} KM</p>
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Fuel Type"></span>
                                                    <p>{{ $car->fuel_type }}</p>
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Engine HP"></span>
                                                    <p>{{ $car->engine_hp }} HP</p>
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Year"></span>
                                                    <p>{{ $car->year }}</p>
                                                </li>
                                                <li>
                                                    <span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Seating Capacity"></span>
                                                    <p>{{ $car->door }} Doors</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="card-text"><strong>Availability  Status:</strong></p>

                            <form class="listAseel d-flex" action="{{ route('company.update-availability-status', $car->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="statusfeildaseel form-group d-flex">
        <select name="availability" class="form-control">
            <option value="Available" {{ $car->availability == 'Available' ? 'selected' : '' }}>Available</option>
            <option value="Not Available" {{ $car->availability == 'Not Available' ? 'selected' : '' }}>Not Available</option>
        </select>
    </div>
    <button type="submit" class="statusbtnaseel btn btn-primary">Update Status</button>
</form>

                                        {{-- <div class="blog-list-head list-head-bottom d-flex">
                                            <div class="blog-list-title">
                                                <div class="title-bottom">
                                                    <div class="car-list-icon">
                                                        <img src="user_images/{{ $car->user->image }}" alt="car icon">
                                                    </div>
                                                    <div class="address-info">
                                                        <h5><a href="#">{{ $car->user->name }}</a></h5>
                                                        <h6><i class="feather-map-pin me-2"></i>{{ $car->user->company->location }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-button">
                                                <a href="" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->


            </div>
<br>
<br>

@endsection
