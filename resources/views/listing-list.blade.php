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
<input type="text" class="form-control" id="member_search1" placeholder>
<span><img src="assets/img/icons/search.svg" alt="img"></span>
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

<button type="submit" class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary filter-btn">
<span><i class="feather-filter me-2"></i></span>Filter results
</button>
<a href="#" class="reset-filter">Reset Filter</a>
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