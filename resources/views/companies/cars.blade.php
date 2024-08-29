<!-- resources/views/companies/cars.blade.php -->

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
    <li ><a href="javascript:void(0);">Listings/</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $company->user->name }} Cars </li>
    </ol>
    </nav>
    </div>
    </div>
    </div>
    </div>
<div class="container">

    <section class="section car-listing">

<div class="container mt-5" style="background-color: white; padding:20px; margin-bottom:100px; border-raduce: 10px">
    <div class="row" style="    align-items: center;">
        <div class="col-md-6">
            <div class="text-center mb-4">
                <img src="{{ url('/user_images/' . $company->user->image) }}" alt="Profile Image" class="img-fluid rounded-circle" style="max-width: 150px;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <h4 class="mb-1">{{ $company->user->name }}</h4>
                <p class="  mb-1" >{{ $company->user->email }}</p>
                <p class=" mb-1">{{ $company->location }}</p>
                <p class="  mb-1">{{ $company->user->phone }}</p>
                <p class="mb-1">{{ $company->description }}</p>
            </div>
        </div>
    </div>
</div>


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
                                    <img src='{{url("/car_images/".$car->images->first()->name)}}' class="img-fluid"  >
                                @else
                                    <img src="{{ asset('img/cars/car-01.jpg') }}" class="img-fluid" alt="Default Image">
                                @endif
                                </a>
                                <div class="fav-item">
                                    <span class="featured-text">{{ $car->brand->name  }}</span>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-features">
                                    {{-- <a href="javascript:void(0)" class="author-img">
@if($car->images && $car->images->isNotEmpty())
    <img src='{{ url("/user_images/" . $car->users->image) }}' class="img-fluid" alt="{{ $car->brand->name }}">
@else
    <img src="{{ asset('img/cars/car-01.jpg') }}" class="img-fluid" alt="Default Image">
@endif                                    </a> --}}
                                    <h3 class="listing-title">
                                        <a href="{{ route('car.details', $car->id) }}">{{ $car->brand->name  }} {{ $car->model }}</a>
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
                                <div class="listing-details-group">
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
                                </div>
                                <div class="listing-location-details">
                                    <div class="listing-price">
                                        <span><i class="feather-map-pin"></i></span>{{ $car->location }}
                                    </div>
                                    <div class="listing-price">
                                        <h6>${{ $car->price_per_day }} <span>/ Day</span></h6>
                                    </div>
                                </div>
                                <div class="listing-button">
                                    <a href="{{ route('car.details', $car->id) }}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif












        </section>
    </div>
@endsection
