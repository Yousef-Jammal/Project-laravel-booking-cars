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
        <div class="container">
        <div class="row">
        <div class="col-lg-3 col-12 theiaStickySidebar">
        <form action="#" autocomplete="off" class="sidebar-form">

<!-- Filter Form -->
                <div class="sidebar-heading">
                    <h6>What Are You Looking For</h6>
                </div>
                <form action="/search" id="search_form">
                    <div class="product-search">
                        <div class="form-custom">
                            <input type="text" class="form-control" id="member_search1" placeholder="Search" name="queryy">
                            <span onclick="submitSearch()" id="search_submit" style="cursor: pointer;"><img src="{{ asset('img/icons/search.svg') }}" alt="img"></span>
                        </div>
                    </div>
                </form>
                <form action="/filter" autocomplete="off" class="sidebar-form">


                    <div class="accordion" id="accordionMain1">
                        <div class="card-header-new" id="headingOne">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Car Brand
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                            <div class="card-body-chat">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="checkBoxes1">
                                            <div class="selectBox-cont">
                                                @foreach($brands as $brand)
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="brands_array[]" value="{{$brand->id}}">
                                                    <span class="checkmark"></span> {{$brand->name}}
                                                </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="accordion" id="accordionMain2">
                        <div class="card-header-new" id="headingTwo">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Date
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                            <div class="card-body-chat">
                                <div id="checkBoxes6">
                                    <div class="selectBox-cont">
                                        <div class="input-block">
                                            <label>Pickup Date</label>
                                        </div>
                                        <div class="input-block-wrapp">
                                            <!-- Pickup Date Input -->
                                            <div class="input-block date-widget">
                                                <div class="group-img">
                                                    <input type="text" class="form-control datetimepicker" name="startDate" placeholder="MM/DD/YYYY">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-block">
                                            <label>Return Date</label>
                                        </div>
                                        <div class="input-block-wrapp">
                                            <!-- Return Date Input -->
                                            <div class="input-block date-widget">
                                                <div class="group-img">
                                                    <input type="text" class="form-control datetimepicker" name="endDate" placeholder="MM/DD/YYYY">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="view-content">
                                            <div class="viewall-One">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="accordion" id="accordionMain3">
                        <div class="card-header-new" id="headingThree">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Doors
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
                            <div class="card-body-chat">
                                <div id="checkBoxes3">
                                    <div class="selectBox-cont">
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="doors_array[]" value="2">
                                            <span class="checkmark"></span> 2
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="doors_array[]" value="4">
                                            <span class="checkmark"></span> 4
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="accordion" id="accordionMain4">
                        <div class="card-header-new" id="headingFour">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Price
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
                            <div class="card-body-chat">
                                <div class="filter-range">
                                    <input type="text" class="input-range" name="price" placeholder="Enter Price">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="accordionMain5">
                        <div class="card-header-new" id="headingFive">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Rating
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample5">
                            <div class="card-body-chat">
                                <div id="checkBoxes4">
                                    <div class="selectBox-cont">
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="ratings_array[]" value="5">
                                            <span class="checkmark"></span>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="ratings_array[]" value="4">
                                            <span class="checkmark"></span>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="ratings_array[]" value="3">
                                            <span class="checkmark"></span>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </label>
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="ratings_array[]" value="2">
                                            <span class="checkmark"></span>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </label>
                                        <div class="view-content">
                                            <div class="viewall-Two">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="ratings_array[]" value="1">
                                                    <span class="checkmark"></span>
                                                    <i class="fas fa-star filled"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary filter-btn">
                        <span><i class="feather-filter me-2"></i></span>Filter results
                    </button>
                    <a href="#" class="reset-filter">Reset Filter</a>
                </form>
            </div>


            {{-- <div class="sidebar-heading"> --}}
                <h3>What Are You Looking For</h3>
                </div>
                <div class="product-search">
                <div class="form-custom">
                <input type="text" class="form-control" id="member_search1" placeholder>
                <span><img src="{{ asset('img/icons/search.svg') }}" alt="img"></span>
                </div>
                </div>
                <div class="accordion" id="accordionMain1">
                <div class="card-header-new" id="headingOne">
                <h6 class="filter-title">
                <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Car Category
                <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
                </h6>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                <div class="card-body-chat">
                <div class="row">
                <div class="col-md-12">
                <div id="checkBoxes1">
                <div class="selectBox-cont">
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span> Tesla
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span> Ford
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span> Mercediz Benz
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span> Audi
                </label>

                <div class="view-content">
                <div class="viewall-One">
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span> Kia
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span> Honda
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span> Toyota
                </label>
                </div>
                </div>

                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>

                <div class="accordion" id="accordionMain2">
                <div class="card-header-new" id="headingTwo">
                <h6 class="filter-title">
                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                Car Type
                <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
                </h6>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                <div class="card-body-chat">
                <div id="checkBoxes2">
                <div class="selectBox-cont">
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span> Convertible
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span> Crossover
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span> Sedan
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span> Wagon
                </label>

                <div class="view-content">
                <div class="viewall-One">
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span> Pickup
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span> Wagon
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span> SUV
                </label>
                </div>
                </div>

                </div>
                </div>
                </div>
                </div>
                </div>

                <div class="accordion" id="accordionMain3">
                <div class="card-header-new" id="headingThree">
                <h6 class="filter-title">
                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                Capacity
                <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
                </h6>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
                <div class="card-body-chat">
                <div id="checkBoxes3">
                <div class="selectBox-cont">
                <label class="custom_check w-100">
                <input type="checkbox" name="bystatus">
                <span class="checkmark"></span> 1-4
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="bystatus">
                <span class="checkmark"></span> 1-6
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="bystatus">
                <span class="checkmark"></span> 4-6
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="bystatus">
                <span class="checkmark"></span>4-8
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="bystatus">
                <span class="checkmark"></span>8+
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="bystatus">
                <span class="checkmark"></span> 10+
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="bystatus">
                <span class="checkmark"></span> 15+
                </label>
                </div>
                </div>
                </div>
                </div>
                </div>


                <div class="accordion" id="accordionMain4">
                <div class="card-header-new" id="headingFour">
                <h6 class="filter-title">
                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                Price
                <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
                </h6>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
                <div class="card-body-chat">
                <div class="filter-range">
                <input type="text" class="input-range">
                </div>
                </div>
                </div>
                </div>

                <div class="accordion" id="accordionMain5">
                <div class="card-header-new" id="headingFive">
                <h6 class="filter-title">
                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                Rating
                <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
                </h6>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample5">
                <div class="card-body-chat">
                <div id="checkBoxes4">
                <div class="selectBox-cont">
                <label class="custom_check w-100">
                <input type="checkbox" name="category">
                <span class="checkmark"></span>
                <i class="fas fa-star filled"></i>
                <i class="fas fa-star filled"></i>
                <i class="fas fa-star filled"></i>
                <i class="fas fa-star filled"></i>
                <i class="fas fa-star filled"></i>
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="category">
                <span class="checkmark"></span>
                <i class="fas fa-star filled"></i>
                <i class="fas fa-star filled"></i>
                <i class="fas fa-star filled"></i>
                <i class="fas fa-star filled"></i>
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="category">
                <span class="checkmark"></span>
                <i class="fas fa-star filled"></i>
                <i class="fas fa-star filled"></i>
                <i class="fas fa-star filled"></i>
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="category">
                <span class="checkmark"></span>
                <i class="fas fa-star filled"></i>
                <i class="fas fa-star filled"></i>
                </label>
                <div class="view-content">
                <div class="viewall-Two">
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span>
                <i class="fas fa-star filled"></i>
                </label>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="accordion" id="accordionMain6">
                <div class="card-header-new" id="headingSix">
                <h6 class="filter-title">
                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                Customer Recommendation
                <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
                </h6>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample6">
                <div class="card-body-chat">
                <div id="checkBoxes5">
                <div class="selectBox-cont">
                <label class="custom_check w-100">
                <input type="checkbox" name="category">
                <span class="checkmark"></span> 70% & up
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="category">
                <span class="checkmark"></span> 60% & up
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="category">
                <span class="checkmark"></span> 50% & up
                </label>
                <label class="custom_check w-100">
                <input type="checkbox" name="category">
                <span class="checkmark"></span> 40% & up
                </label>
                <div class="viewall-Two">
                <label class="custom_check w-100">
                <input type="checkbox" name="username">
                <span class="checkmark"></span>30% & up
                </label>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <button type="submit" class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary filter-btn">
                <span><i class="feather-filter me-2"></i></span>Filter results
                </button>
                <a href="#" class="reset-filter">Reset Filter</a>
                </form>
                </div>
        <div class="col-lg-9">
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
                                    <img src='{{url("/car_images/".$car->images->first()->name)}}' class="img-fluid" alt="{{ $car->brand }}">
                                @else
                                    <img src="{{ asset('img/cars/car-01.jpg') }}" class="img-fluid" alt="Default Image">
                                @endif
                                </a>
                                <div class="fav-item">
                                    <span class="featured-text">{{ $car->brand }}</span>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-features">
                                    <a href="javascript:void(0)" class="author-img">
                                        <img src='{{url("/user_images/".$car->users->images->name)}}' alt="author">
                                    </a>
                                    <h3 class="listing-title">
                                        <a href="{{ route('car.details', $car->id) }}">{{ $car->brand }} {{ $car->model }}</a>
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











        </div>

        <div class="blog-pagination">
        <nav>
        <ul class="pagination page-item justify-content-center">
        <li class="previtem">
        <a class="page-link" href="#"><i class="fas fa-regular fa-arrow-left me-2"></i> Prev</a>
        </li>
        <li class="justify-content-center pagination-center">
        <div class="page-group">
        <ul>
        <li class="page-item">
        <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
        <a class="active page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
        </li>
        <li class="page-item">
        <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
        <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
        <a class="page-link" href="#">5</a>
        </li>
        </ul>
        </div>
        </li>
        <li class="nextlink">
        <a class="page-link" href="#">Next <i class="fas fa-regular fa-arrow-right ms-2"></i></a>
        </li>
        </ul>
        </nav>
        </div>

        </div>
        </div>
        </div>
        </section>

</div>
@endsection
