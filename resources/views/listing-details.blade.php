@extends('masterPage')
@section('content')
{{-- <link rel="shortcut icon" href="{{ asset('img/favicon.png">

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css">

<link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css">

<link rel="stylesheet" href="{{ asset('plugins/aos/aos.css">

<link rel="stylesheet" href="{{ asset('css/feather.css">

<link rel="stylesheet" href="{{ asset('css/style.css"> --}}


<div class="breadcrumb-bar">
<div class="container">
<div class="row align-items-center text-center">
<div class="col-md-12 col-12">
    <h2 class="breadcrumb-title">{{ $car->make }} {{ $car->model }}</h2>
    <nav aria-label="breadcrumb" class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
<li class="breadcrumb-item"><a href="javascript:void(0);">Listings</a></li>
<li class="breadcrumb-item active" aria-current="page">{{ $car->make }} {{ $car->model }}</li>
</ol>
</nav>
</div>
</div>
</div>
</div>


<section class="product-detail-head">
<div class="container">
<div class="detail-page-head">
<div class="detail-headings">
<div class="star-rated">
<div class="list-rating">
    <span class="year">{{ $car->year }}</span>
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
<div class="camaro-info">
    <h3>{{ $car->make }} {{ $car->model }}</h3>
    <div class="camaro-location">
<div class="camaro-location-inner">
<i class="feather-map-pin me-2"></i>
<span class="me-2"> <b>Location :</b> {{ $car->location }} </span>
</div>
<div class="camaro-locations-inner">
<i class="feather-eye me-2"></i>
<span><b>Views :</b> {{ $car->views }} </span>
</div>
</div>
</div>
</div>
</div>
<div class="details-btn">
<a href="#"><i class="feather-heart"></i> Wishlist</a>
</div>
</div>
</div>
</section>

<section class="section product-details">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="detail-product">
<div class="slider detail-bigimg">
<div class="product-img">
<img src="{{ asset('img/cars/slider-01.jpg') }}" alt="Slider">
</div>
<div class="product-img">
<img src="{{ asset('img/cars/slider-02.jpg') }}" alt="Slider">
</div>
<div class="product-img">
<img src="{{ asset('img/cars/slider-03.jpg') }}" alt="Slider">
</div>
<div class="product-img">
<img src="{{ asset('img/cars/slider-04.jpg') }}" alt="Slider">
</div>
<div class="product-img">
<img src="{{ asset('img/cars/slider-05.jpg') }}" alt="Slider">
</div>
</div>
<div class="slider slider-nav-thumbnails">
<div><img src="{{ asset('img/cars/slider-thum-01.jpg') }}" alt="product image"></div>
<div><img src="{{ asset('img/cars/slider-thum-02.jpg') }}" alt="product image"></div>
<div><img src="{{ asset('img/cars/slider-thum-03.jpg') }}" alt="product image"></div>
<div><img src="{{ asset('img/cars/slider-thum-04.jpg') }}" alt="product image"></div>
<div><img src="{{ asset('img/cars/slider-thum-05.jpg') }}" alt="product image"></div>
</div>
</div>
{{-- SECTION Specifications --}}
<div class="review-sec specification-card ">
<div class="review-header">
<h4>Specifications</h4>
</div>
<div class="card-body">
<div class="lisiting-featues">
<div class="row">
<div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
<div class="feature-img">
<img src="{{ asset('img/specification/specification-icon-1.svg') }}" alt="Icon">
</div>
<div class="featues-info">
<span>Body </span>
<h6>{{ $car->body }}</h6>
</div>
</div>
<div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
<div class="feature-img">
<img src="{{ asset('img/specification/specification-icon-2.svg') }}" alt="Icon">
</div>
<div class="featues-info">
<span>Make </span>
<h6>{{ $car->make }}</h6>
</div>
</div>
<div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
<div class="feature-img">
<img src="{{ asset('img/specification/specification-icon-3.svg') }}" alt="Icon">
</div>
<div class="featues-info">
<span>Transmission </span>
<h6>{{ $car->transmission }}</h6>
</div>
</div>
{{-- SECTION ALFEATURE --}}
<div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
<div class="feature-img">
<img src="{{ asset('img/specification/specification-icon-4.svg') }}" alt="Icon">
</div>
<div class="featues-info">
<span>Fuel Type </span>
<h6>{{ $car->fuel_type }}</h6>
</div>
</div>
<div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
<div class="feature-img">
<img src="{{ asset('img/specification/specification-icon-5.svg') }}" alt="Icon">
</div>
<div class="featues-info">
<span>Mileage </span>
<h6>{{ $car->mileage }} Km</h6>
</div>
</div>
<div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
<div class="feature-img">
<img src="{{ asset('img/specification/specification-icon-6.svg') }}" alt="Icon">
</div>
<div class="featues-info">
<span>Drivetrian </span>
<h6>{{ $car->drivetrian }}</h6>
</div>
</div>
<div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
<div class="feature-img">
<img src="{{ asset('img/specification/specification-icon-7.svg') }}" alt="Icon">
</div>
<div class="featues-info">
<span>Year</span>
<h6>{{ $car->year }}</h6>
</div>
</div>
<div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
<div class="feature-img">
<img src="{{ asset('img/specification/specification-icon-8.svg') }}" alt="Icon">
</div>
<div class="featues-info">
<span>AC </span>
<h6>{{ $car->ac }}</h6>
</div>
</div>
<div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
<div class="feature-img">
<img src="{{ asset('img/specification/specification-icon-9.svg') }}" alt="Icon">
</div>
<div class="featues-info">
<span>VIN </span>
<h6>{{ $car->vin }}</h6>
</div>
</div>
<div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
<div class="feature-img">
<img src="{{ asset('img/specification/specification-icon-10.svg') }}" alt="Icon">
</div>
<div class="featues-info">
<span>Door </span>
<h6>{{ $car->door }} Doors</h6>
</div>
</div>
<div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
<div class="feature-img">
<img src="{{ asset('img/specification/specification-icon-11.svg') }}" alt="Icon">
</div>
<div class="featues-info">
<span>Brake </span>
<h6>{{ $car->brake }}</h6>
</div>
</div>
<div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
<div class="feature-img">
<img src="{{ asset('img/specification/specification-icon-12.svg') }}" alt="Icon">
</div>
<div class="featues-info">
<span>Engine (Hp) </span>
<h6>{{ $car->engine_hp }}</h6>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="review-sec listing-feature">
    <div class="review-header">
        <h4>Car Features</h4>
    </div>
    <div class="listing-description">
        <div class="row">
            @foreach ($car->features->chunk(ceil($car->features->count() / 3)) as $chunk)
                <div class="col-md-4">
                    <ul>
                        @foreach ($chunk as $feature)
                            <li><span><i class="fa-solid fa-check-double"></i></span>{{ $feature->name }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- SECTION REVIEWES --}}
<div class="review-sec listing-review">
    <div class="review-header">
        {{-- <h4>Reviews<span class="me-2">({{ $car->reviews->co }})</span></h4> --}}
        <div class="review-sec listing-review">
            <div class="review-header">
                <h4>Reviews<span class="me-2">
                    @if($car->reviews->isNotEmpty())
                        {{ $car->reviews->first()->content }}
                    @else
                        No reviews available.
                    @endif
                </span></h4>
            </div>
        </div>

        {{-- إذا كنتِ تريدين عرض التقييم بالنجوم هنا --}}
        {{--
        <div class="reviewbox-list-rating">
            <p>
                @for($i = 0; $i < round($car->reviews->avg('pivot.rating')); $i++)
                    <i class="fas fa-star filled"></i>
                @endfor
                @for($i = 0; $i < (5 - round($car->reviews->avg('pivot.rating'))); $i++)
                    <i class="fas fa-star"></i>
                @endfor
                <span> ({{ number_format($car->reviews->avg('pivot.rating'), 1) }} out of 5)</span>
            </p>
        </div>
        --}}
    </div>


    @foreach($car->reviews as $review)
        <div class="review-card">
            <div class="review-header-group">
                <div class="review-widget-header">
                    <span class="review-widget-img">
                        <img src="{{ asset('img/profiles/' . $review->pivot->user_image) }}" class="img-fluid" alt="User">
                    </span>
                    <div class="review-design">
                        <h6>{{ $review->name }}</h6>
                        <p>{{ \Carbon\Carbon::parse($review->pivot->date)->format('d M Y') }}</p>
                    </div>
                </div>
                <div class="reviewbox-list-rating">
                    @php
                    $wholeStars = floor($review->pivot->rating); // عدد النجوم الممتلئة بالكامل
                    $fraction = $review->pivot->rating - $wholeStars; // الجزء الكسري من التقييم
                    $halfStar = ($review->pivot->rating - $wholeStars >= 0.5); // تحديد إذا كان يجب عرض نصف نجمة
                    $emptyStars = 5 - $wholeStars - ($halfStar ? 1 : 0); // عدد النجوم الفارغة
                @endphp
                </div>
            </div>
            <p>{{ $review->pivot->content }}</p>
            <ul class="review-list-rating">
                <li>
                    Quality
                    <p>
                        @for($i = 0; $i < $review->pivot->quality_rating; $i++)
                            <i class="fas fa-star filled"></i>
                        @endfor
                        @for($i = 0; $i < (5 - $review->pivot->quality_rating); $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </p>
                </li>
                <li>
                    Price
                    <p>
                        @for($i = 0; $i < $review->pivot->price_rating; $i++)
                            <i class="fas fa-star filled"></i>
                        @endfor
                        @for($i = 0; $i < (5 - $review->pivot->price_rating); $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </p>
                </li>
                <li>
                    Comfort
                    <p>
                        @for($i = 0; $i < $review->pivot->comfort_rating; $i++)
                            <i class="fas fa-star filled"></i>
                        @endfor
                        @for($i = 0; $i < (5 - $review->pivot->comfort_rating); $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </p>
                </li>
                <li>
                    Driving
                    <p>
                        @for($i = 0; $i < $review->pivot->driving_rating; $i++)
                            <i class="fas fa-star filled"></i>
                        @endfor
                        @for($i = 0; $i < (5 - $review->pivot->driving_rating); $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </p>
                </li>
            </ul>
        </div>
    @endforeach
</div>
<div class="review-sec leave-reply-form mb-0">
<div class="review-header">
<h4>Leave a Reply</h4>
</div>
<ul class="review-list-rating mb-3">
<li>
quality
<p>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
</p>
</li>
<li>
Price
<p>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
</p>
</li>
<li>
Comfort
<p>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
</p>
</li>
<li>
Driving
<p>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
</p>
</li>
</ul>
<div class="card-body">
<div class="review-list">
<ul>
<li class="review-box feedbackbox mb-0">
<div class="review-details">
    <form id="review-form" action="{{ route('reviews.submit', ['id' => $car->id]) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="input-block">
                    <label>Full Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" value="{{ session('user_name') }}" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-block">
                    <label>Email Address <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" value="{{ session('user_email') }}" required>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="input-block">
                    <label>Comments </label>
                    <textarea rows="4" name="content" class="form-control" required></textarea>
                </div>
            </div>
        </div>
        <div class="submit-btn">
            <button class="btn btn-primary submit-review" type="submit">Submit Review</button>
        </div>
    </form>


</div>
</li>
</ul>
</div>
</div>
</div>
</div>
{{-- SECTION AVILABILITY --}}
<div class="col-lg-4 theiaStickySidebar">
<div class="review-sec mt-0">
<div class="review-header">
<h4>Check Availability</h4>
</div>
<div class>
    <form action="{{ route('check.availability') }}" method="POST">
        @csrf
        <input type="hidden" name="car_id" value="{{ $car->id }}">
        <ul>
            <li class="column-group-main">
                <div class="input-block">
                    <label>Pickup Location</label>
                    <div class="group-img">
                        <input type="text" name="pickup_location" class="form-control" placeholder="" required>
                    </div>
                </div>
            </li>
            <li class="column-group-main">
                <div class="input-block">
                    <label>Dropoff Location</label>
                    <div class="group-img">
                        <input type="text" name="dropoff_location" class="form-control" placeholder="" required>
                    </div>
                </div>
            </li>
            <li class="column-group-main">
                <div class="input-block m-0">
                    <label>Pickup Date</label>
                </div>
                <div class="input-block-wrapp sidebar-form">
                    <div class="input-block me-2">
                        <div class="group-img">
                            <input type="date" name="pickup_date_d" class="form-control" required>
                        </div>
                    </div>
                    <div class="input-block">
                        <div class="group-img">
                            <input type="time" name="pickup_date_h" class="form-control" required>
                        </div>
                    </div>
                </div>
            </li>
            <li class="column-group-main">
                <div class="input-block m-0">
                    <label>Return Date</label>
                </div>
                <div class="input-block-wrapp sidebar-form">
                    <div class="input-block me-2">
                        <div class="group-img">
                            <input type="date" name="return_date_d" class="form-control" required>
                        </div>
                    </div>
                    <div class="input-block">
                        <div class="group-img">
                            <input type="time" name="return_date_h" class="form-control" required>
                        </div>
                    </div>
                </div>
            </li>
            <li class="column-group-last">
                <div class="input-block mb-0">
                    <div class="search-btn">
                        <button class="btn btn-primary check-available w-100" type="button" onclick="checkAvailability()">Check Availability</button>
                    </div>
                </div>
            </li>
        </ul>
    </form>
    <!-- نافذة منبثقة لعرض تفاصيل التوفر -->
    <div id="availability-popup" style="display:none ; margin-left: 350px;width: 40vw;">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Availability Details</h4>
                <button type="button" class="close" onclick="closePopup()">×</button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success">
                    <i class="fa-regular fa-circle-check"></i>
                    <span id="car-status"></span>
                </div>
                <div class="details-row d-flex justify-content-between align-items-start fajerpop">
                    <div>
                        <h5>Pickup</h5>
                        <p id="pickup-location"></p>
                        <span id="pickup-datetime"></span>
                    </div>
                    <div>
                        <h5>Drop Off</h5>
                        <p id="dropoff-location"></p>
                        <span id="dropoff-datetime"></span>
                    </div>
                    <div>
                        <h5>Booking Amount</h5>
                        <h6><span id="price-per-day"></span> /day</h6>
                    </div>
                </div>
                <div class="details-row mt-3">
                    <div class="pricing-details">
                        <ul>
                            <li>Booking Price <span id="booking-price"></span></li>
                            <li>Extra Service <span id="extra-service"></span></li>
                            <li>Tax <span id="tax"></span></li>
                        </ul>
                    </div>
                    <div class="grand-total">
                        <h5>Grand Total</h5>
                        <span id="grand-total"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="goToDetails()">Go to Details</button>
                <button class="btn btn-secondary" onclick="closePopup()">Close</button>
            </div>
        </div>
    </div>




    @if(isset($availabilityResult))
<div class="modal fade show" id="availability-details" tabindex="-1" aria-labelledby="availabilityDetailsLabel" aria-modal="true" role="dialog" style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="availabilityDetailsLabel">Availability Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Pickup Location: {{ $availabilityResult['pickup_location'] }}</p>
                <p>Dropoff Location: {{ $availabilityResult['dropoff_location'] }}</p>
                <p>Pickup Date: {{ $availabilityResult['pickup_date'] }}</p>
                <p>Return Date: {{ $availabilityResult['return_date'] }}</p>
                <p>Booking Amount: ${{ $availabilityResult['price_per_day'] }} /day</p>
                <p>Grand Total: ${{ $availabilityResult['total_price'] }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="{{ url('/booking') }}" class="btn btn-primary">Go to Details</a>
            </div>
        </div>
    </div>
</div>
@endif
</div>
</div>
{{-- SECTION OWNER --}}
<div class="review-sec extra-service mt-0">
    <div class="review-header">
        <h4>Listing Owner Details</h4>
    </div>
    <div class="owner-detail">
        <div class="owner-img">
            <a href="#"><img src="{{ asset('storage/profile_images/' . ($car->user->image ?? 'default.png'))}}" alt="{{ $car->user->name }}"></a>
        </div>
        <div class="reviewbox-list-rating">
            <h5><a>{{ $car->user->name }}</a></h5>
            <p>
                @for($i = 0; $i < 5; $i++)
                    <i class="fas fa-star filled"></i>
                @endfor
                <span> ({{ number_format($car->user->company->rating ?? 0, 1) }})</span>
            </p>
        </div>
    </div>
    <ul class="booking-list">
        <li>
            No of Listings
            <span>{{ $car->user->cars->count() }}</span>
        </li>
        <!-- احذف أو علّق هذا الجزء إذا لم يكن لديك عدد الحجوزات مخزن في مكان آخر -->
        {{-- <li>
            No of Bookings
            <span>{{ $car->user->rentals->count() ?? 0 }}</span>
        </li> --}}

    </ul>
    <div class="message-btn">
        {{-- <a href="{{ route('company.cars', ['id' => $car->user->id]) }}" class="btn btn-order">views ownerpage</a> --}}
    </div>

</div>


{{-- SECTION LOCATION --}}
<div class="review-sec share-car mt-0 mb-0">
    <div class="review-header">
        <h4>View Location</h4>
    </div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3383.2481681583024!2d35.85549831527885!3d31.953947780065396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca1b4d3d4db8d%3A0x2a8d4af4c6a6c1c7!2s7th%20Circle%2C%20Amman!5e0!3m2!1sen!2sjo!4v1692878376458!5m2!1sen!2sjo"
        class="iframe-video"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    <a href="https://www.google.com/maps/place/7th+Circle,+Amman,+Jordan/@31.9539478,35.8554983,15z" target="_blank" class="btn btn-primary mt-2">View larger map</a>
</div>


</div>
</div>



<script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script src="{{ asset('js/jquery-3.7.1.min.js') }}" type="1fd1520c2fe94050b14d329a-text/javascript"></script>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="1fd1520c2fe94050b14d329a-text/javascript"></script>

<script src="{{ asset('plugins/aos/aos.js') }}" type="1fd1520c2fe94050b14d329a-text/javascript"></script>

<script src="{{ asset('plugins/moment/moment.min.js') }}" type="1fd1520c2fe94050b14d329a-text/javascript"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}" type="1fd1520c2fe94050b14d329a-text/javascript"></script>

<script src="{{ asset('plugins/slick/slick.js') }}" type="1fd1520c2fe94050b14d329a-text/javascript"></script>

<script src="{{ asset('js/owl.carousel.min.js') }}" type="1fd1520c2fe94050b14d329a-text/javascript"></script>

<script src="{{ asset('js/backToTop.js') }}" type="1fd1520c2fe94050b14d329a-text/javascript"></script>

<script src="{{ asset('plugins/theia-sticky-sidebar/ResizeSensor.js') }}" type="1fd1520c2fe94050b14d329a-text/javascript"></script>
<script src="{{ asset('plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}" type="1fd1520c2fe94050b14d329a-text/javascript"></script>

<script src="{{ asset('js/script.js') }}" type="1fd1520c2fe94050b14d329a-text/javascript"></script>
<script src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="1fd1520c2fe94050b14d329a-|49" defer></script></body>
<script>
    $(document).ready(function() {
        $('#availability-details').modal('show');
    });
    function checkAvailability() {
    // جلب بيانات النموذج
    var pickupLocation = document.querySelector('[name="pickup_location"]').value;
    var dropoffLocation = document.querySelector('[name="dropoff_location"]').value;
    var pickupDate = document.querySelector('[name="pickup_date_d"]').value + ' ' + document.querySelector('[name="pickup_date_h"]').value;
    var returnDate = document.querySelector('[name="return_date_d"]').value + ' ' + document.querySelector('[name="return_date_h"]').value;

    // التحقق من أن جميع الحقول مملوءة
    if (!pickupLocation || !dropoffLocation || !document.querySelector('[name="pickup_date_d"]').value || !document.querySelector('[name="pickup_date_h"]').value || !document.querySelector('[name="return_date_d"]').value || !document.querySelector('[name="return_date_h"]').value) {
        alert("Please fill out all fields before checking availability.");
        return;
    }

    // افترض السعر اليومي للسيارة والرسوم الإضافية
    var pricePerDay = @json($car->price_per_day);
    var extraService = 10; // رسوم إضافية مفترضة
    var tax = 5; // ضريبة مفترضة

    // حساب عدد الأيام بين تاريخ الاستلام والإرجاع
    var pickupDateObj = new Date(document.querySelector('[name="pickup_date_d"]').value);
    var returnDateObj = new Date(document.querySelector('[name="return_date_d"]').value);

    var timeDifference = returnDateObj.getTime() - pickupDateObj.getTime();
    var days = Math.ceil(timeDifference / (1000 * 3600 * 24)); // تحويل الوقت إلى أيام

    // التحقق من أن عدد الأيام صحيح (على الأقل يوم واحد)
    if (days < 1) {
        days = 1; // لتجنب أخطاء التواريخ
    }

    // حساب إجمالي السعر
    var bookingPrice = pricePerDay * days;
    var grandTotal = bookingPrice + extraService + tax;

    // تحديث محتويات النافذة المنبثقة
    document.getElementById('pickup-location').innerText = pickupLocation;
    document.getElementById('pickup-datetime').innerText = pickupDate;
    document.getElementById('dropoff-location').innerText = dropoffLocation;
    document.getElementById('dropoff-datetime').innerText = returnDate;
    document.getElementById('price-per-day').innerText = '$' + pricePerDay;
    document.getElementById('booking-price').innerText = '$' + bookingPrice;
    document.getElementById('extra-service').innerText = '$' + extraService;
    document.getElementById('tax').innerText = '$' + tax;
    document.getElementById('grand-total').innerText = '$' + grandTotal;

    // هنا يمكن أن يتم التحقق من توفر السيارة عبر طلب إلى الخادم
    var isAvailable = true; // يمكنك تغيير هذه القيمة بناءً على التحقق الفعلي

    document.getElementById('car-status').innerText = isAvailable ? 'Chevrolet Camaro is available for a ride' : 'Not Available';

    // أظهر النافذة المنبثقة
    document.getElementById('availability-popup').style.display = 'block';
}


    function closePopup() {
        document.getElementById('availability-popup').style.display = 'none';
    }

    function goToDetails() {
        // انتقل إلى صفحة التفاصيل
        window.location.href = "{{ route('booking') }}";
    }
</script>
<script>
 $(document).on('submit', '#review-form', function(e) {
    e.preventDefault();

    var form = $(this);
    var actionUrl = form.attr('action');
    var formData = form.serialize();

    $.ajax({
        url: actionUrl,
        method: 'POST',
        data: formData,
        success: function(response) {
            if (response.success) {
                // تحديث قائمة التعليقات
                $('.review-sec.listing-review').append(response.newReviewHtml);
                // تحديث عداد التعليقات
                $('.review-header h4 span').text(`(${response.reviewCount})`);
                // مسح النص من الحقل بعد الإرسال
                form.find('textarea').val('');
            }
        },
        error: function(xhr) {
            console.log(xhr.responseText); // عرض رسالة الخطأ في حالة الفشل
        }
    });
});

</script>
@endsection
