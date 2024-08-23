@extends('masterPage')
@section('content')

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title">Car Listings</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Listings</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Car Listings</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="sortby-sec">
    <div class="container">
        <div class="sorting-div">
            <div class="row d-flex align-items-center">

                <div class="col-xl-8 col-lg-9 col-sm-12 col-12">
                    <div class="product-filter-group">
                        <div class="sortbyset">
                            <span class="sortbytitle">Show : </span>
                            <div class="sorting-select select-one">
                                <select class="form-control select">
                                    <option>5</option>
                                    <option>10</option>
                                    <option>15</option>
                                    <option>20</option>
                                </select>
                            </div>
                            <div class="sorting-select select-two">
                                <select class="form-control select">
                                    <option>Low to High</option>
                                    <option>High to Low</option>
                                </select>
                            </div>
                            <div class="sorting-select select-three">
                                <select class="form-control select">
                                    <option>Popular</option>
                                    @foreach ($cars as $car)
                                    <option>{{ $car->model }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section car-listing">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-12 col-12 theiaStickySidebar">
                <!-- Filter Form -->
                <form action="#" autocomplete="off" class="sidebar-form">
                    <div class="sidebar-heading">
                        <h3>What Are You Looking For</h3>
                    </div>
                    <div class="product-search">
                        <div class="form-custom">
                            <input type="text" class="form-control" id="member_search1" placeholder="Search for a car">
                            <span><img src="{{ asset('img/icons/search.svg') }}" alt="img"></span>
                        </div>
                    </div>
                    <!-- Other filter options can be added here -->
                </form>
            </div>
            <div class="col-xl-9 col-lg-8 col-sm-12 col-12">
                <div class="row">
                    <!-- Loop through each car and display it -->
                    @foreach($cars as $car)
                    <div class="listview-car">
                        <div class="card">
                            <div class="blog-widget d-flex">
                                <div class="blog-img">
                                    <a href="">
                                        @foreach($car->images as $image)
                                        <img src="car_images/{{ $image->name }}" class="img-fluid" alt="car-image" height="200px" width="200px">
                                        @endforeach
                                    </a>
                                </div>
                                <div class="bloglist-content w-100">
                                    <div class="card-body">
                                        <div class="blog-list-head d-flex">
                                            <div class="blog-list-title">
                                                <h3><a href="">{{ $car->make }} {{ $car->model }}</a></h3>
                                                <h6>Category : <span>{{ $car->brand }}</span></h6>
                                            </div>
                                            <div class="blog-list-rate">
                                                <div class="list-rating">
                                                    @for ($i = 0; $i < $car->rating; $i++)
                                                        <i class="fas fa-star filled"></i>
                                                        @endfor
                                                        <span>({{ $car->rating }})</span>
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
                                                    <p>{{ $car->door }} Doors, {{ $car->drivetrain }}</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-list-head list-head-bottom d-flex">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->


            </div>
        </div>
    </div>
</section>

@endsection