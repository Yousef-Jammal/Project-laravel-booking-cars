@extends('masterPage')
@section('content')

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title">Car Listings</h2>
            </div>
        </div>
    </div>
</div>

<section class="section car-listing">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-12 col-12 theiaStickySidebar">
                <!-- Filter Form -->
                <div class="sidebar-heading">
                    <h6>What Are You Looking For</h6>
                </div>
                <form action="/search" id="search_form" autocomplete="off">
                    <div class="product-search">
                        <div class="form-custom">
                            <input type="text" class="form-control" id="searchBar" placeholder="Search" name="queryy" onkeydown="getSearchResults()">
                            <span onclick="submitSearch()" id="search_submit" style="cursor: pointer;"><img src="{{ asset('img/icons/search.svg') }}" alt="img"></span>
                        </div>
                    </div>
                </form>
                <form action="/filter" autocomplete="off" class="sidebar-form" id="filterForm">


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
                    <a href="#" onclick="resetFilter()" class="reset-filter">Reset Filter</a>
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
                                        @if($car->images->first() !== null)
                                        <img src="car_images/{{ $car->images->first()->name }}" class="img-fluid" alt="car-image" height="200px" width="200px">
                                        @endif
                                    </a>
                                </div>
                                <div class="bloglist-content w-100">
                                    <div class="card-body">
                                        <div class="blog-list-head d-flex">
                                            <div class="blog-list-title">
                                                <h3><a href="">{{ $car->brand->name }}</a></h3>
                                                <h6>Model : <span>{{ $car->model }}</span></h6>
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
                                                    <p>{{ $car->door }} Doors</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-list-head list-head-bottom d-flex">
                                            <div class="blog-list-title">
                                                <div class="title-bottom">
                                                    <div class="car-list-icon">
                                                        <img src='{{asset("user_images/" . $car->user->image) }}' alt="car icon">
                                                    </div>
                                                    <div class="address-info">
                                                        <h5><a href="#">{{ $car->user->name }}</a></h5>
                                                        <h6><i class="feather-map-pin me-2"></i>{{ $car->user->company->location }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-button">
                                                <a href="{{route('cardetails.show',$car->id)}}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
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
<script>
    function submitSearch() {
        document.getElementById('search_form').submit();
    }

    function resetFilter() {
        document.querySelector("#filterForm").reset();
        document.querySelector("#search_form").reset();
    }

    async function getSearchResults() {
        let search = document.querySelector("#searchBar").value;
        const response = await fetch('http://localhost:8000/api/getsuggestions', {
            method: "POST",
            body: JSON.stringify({
                search
            }),
        })
        const data = await response.json();
        console.log(data);
    }
</script>





@endsection