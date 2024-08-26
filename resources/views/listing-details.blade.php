@extends('masterPage')
@section('content')
{{-- 11111111111111111111111111111111111111111111111111 --}}
{{-- SECTION: Breadcrumb --}}
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
{{-- 2222222222222222222222222222222222222222222222222222222 --}}
{{-- SECTION: Product Details --}}
<section class="product-detail-head">
    <div class="container">
        <div class="detail-page-head">
            <div class="detail-headings">
                <div class="star-rated">
                    <div class="list-rating">
                        <span class="year">{{ $car->year }}</span>
                        @php
                        $wholeStars = floor($car->rating);
                        $fraction = $car->rating - $wholeStars;
                        $halfStar = ($car->rating - $wholeStars >= 0.5);
                        $emptyStars = 5 - $wholeStars - ($halfStar ? 1 : 0);
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
                        <span>({{ number_format($car->rating, 1) }})</span>
                    </div>
                    <div class="camaro-info">
                        <h3>{{ $car->make }} {{ $car->model }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- 3333333333333333333333333333333333333333333333333333333333333333 --}}
{{-- SECTION: Specifications --}}
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
                <div class="review-sec specification-card">
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
{{-- 44444444444444444444444444444444444444444444444 --}}
  {{-- SECTION: Additional Features --}}
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
{{-- 55555555555555555555555555555555555555555555555555555 --}}
                {{-- SECTION: Reviews --}}
                <div class="review-sec listing-review">
                    <!-- عرض عدد التقييمات -->
                    <div class="review-header">
                        <h4>Reviews<span class="me-2">({{ $car->reviews->count() }})</span></h4>
                        <div class="reviewbox-list-rating">
                            <p>
                                @php
                                    $averageRating = $car->reviews->avg('rating');
                                @endphp

                                @for($i = 0; $i < floor($averageRating); $i++)
                                    <i class="fas fa-star filled"></i>
                                @endfor
                                @if($averageRating - floor($averageRating) >= 0.5)
                                    <i class="fas fa-star-half-alt filled"></i>
                                @endif
                                @for($i = 0; $i < (5 - ceil($averageRating)); $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                                <span> ({{ number_format($averageRating, 1) }} out of 5)</span>
                            </p>
                        </div>
                    </div>

                    <!-- عرض التقييمات التفصيلية -->
                    @foreach($car->reviews as $review)
    <div class="review-card">
        <div class="review-header-group">
            <div class="review-widget-header">
                <div class="review-design">
                    <h6>
                        @if($review->pivot->user_id)
                            {{ $review->name }}
                        @else
                            Unknown User
                        @endif
                    </h6>
                    <p>{{ \Carbon\Carbon::parse($review->pivot->date)->format('d M Y') }}</p>
                </div>
            </div>
        </div>
        <p>{{ $review->pivot->content }}</p>
        <ul class="review-list-rating">
            <li>
                <p>
                    @php
                    $wholeStars = floor($review->pivot->rating);
                    $fraction = $review->pivot->rating - $wholeStars;
                    $halfStar = ($review->pivot->rating - $wholeStars >= 0.5);
                    $emptyStars = 5 - $wholeStars - ($halfStar ? 1 : 0);
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

                    <span>({{ number_format($review->pivot->rating, 1) }})</span>
                </p>
            </li>
        </ul>
    </div>
@endforeach




                </div>




                {{-- SECTION: Leave a Reply --}}
                @auth
                    <div class="review-sec leave-reply-form mb-0">
                        <div class="review-header">
                            <h4>Leave a Reply</h4>
                        </div>
                        <ul class="review-list-rating mb-3">
                            <li>
                                Quality
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
                                                            <input type="text" name="full_name" class="form-control" value="{{ auth()->user()->name }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-block">
                                                            <label>Email Address <span class="text-danger">*</span></label>
                                                            <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}" readonly>
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
                @else
                    <!-- رسالة تطلب من المستخدم تسجيل الدخول -->
                    <p>Please log in to leave a review.</p>
                @endauth

            </div>
{{-- 777777777777777777777777777777777777777777777777777777 --}}
            {{-- SECTION: Availability --}}
            <div class="col-lg-4 theiaStickySidebar">
                <div class="review-sec mt-0">
                    <div class="review-header">
                        <h4>Check Availability</h4>
                    </div>
                    <div>
                        <form action="{{ route('check.availability') }}" method="POST">
                            @csrf
                            <input type="hidden" name="car_id" value="{{ $car->id }}">
                            <ul>
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
                        {{-- 88888888888888888888888888888888888888888888888888888888888888 --}}
                        <!-- SECTION: Availability Popup -->
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
                                            <h5>Booking Amount</h5>
                                            <h6><span id="price-per-day"></span> /day</h6>
                                        </div>
                                    </div>
                                    <div class="details-row mt-3">
                                        <div class="pricing-details">
                                            <ul>
                                                <li>Booking Price <span id="booking-price"></span></li>
                                                <li>Extra Service <span id="extra-service"></span>5$</li>
                                                <li>Tax <span id="tax"></span>10$</li>
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

                        {{-- 999999999999999999999999999999999999999999999999999 --}}
                        {{-- SECTION: Availability Modal --}}
                        <div class="modal fade show" id="availability-details" tabindex="-1" aria-labelledby="availabilityDetailsLabel" aria-modal="true" role="dialog" style="display: block;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="availabilityDetailsLabel">Availability Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
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
{{-- 10101010101010101010101010101010101001010101010 --}}
                {{-- SECTION: Listing Owner --}}
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
                                @php
                                    $rating = $car->user->company->rating ?? 0; // التقييم من جدول companies
                                    $wholeStars = floor($rating);
                                    $fraction = $rating - $wholeStars;
                                    $halfStar = ($fraction >= 0.5);
                                    $emptyStars = 5 - $wholeStars - ($halfStar ? 1 : 0);
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

                                <span> ({{ number_format($rating, 1) }})</span>
                            </p>
                        </div>
                    </div>
                    <ul class="booking-list">
                        <li>
                            No of Listings
                            <span>{{ $car->user->cars->count() }}</span> <!-- عرض عدد السيارات للمؤجر -->
                        </li>
                    </ul>
                    <div class="message-btn">
                        <a href="{{ route('company.cars', ['id' => $car->user->id]) }}" class="btn btn-order">View Owner Page</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

<script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.7.1.min.js') }}" type="1fd1520c2fe94050b14d329a-text/javascript"></script>

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
<script src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="1fd1520c2fe94050b14d329a-|49" defer></script>

<script>
    $(document).ready(function() {
        $('#availability-details').modal('show');
    });

    function checkAvailability() {
    // جلب البيانات من الحقول
    let carId = document.querySelector('input[name="car_id"]').value;
    let pickupDate = document.querySelector('input[name="pickup_date_d"]').value;
    let pickupTime = document.querySelector('input[name="pickup_date_h"]').value;
    let returnDate = document.querySelector('input[name="return_date_d"]').value;
    let returnTime = document.querySelector('input[name="return_date_h"]').value;

    // إرسال البيانات عبر AJAX
    fetch('{{ route("check.availability") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            car_id: carId,
            pickup_date_d: pickupDate,
            pickup_date_h: pickupTime,
            return_date_d: returnDate,
            return_date_h: returnTime
        })
    })
    .then(response => response.json())
    .then(data => {
        // تأكيد ظهور الرسالة الصحيحة بناءً على التوافر
        if (data.isAvailable) {
            document.getElementById('car-status').textContent = 'Available';
            document.getElementById('car-status').classList.add('text-success');
            document.getElementById('car-status').classList.remove('text-danger');
        } else {
            document.getElementById('car-status').textContent = 'Not Available';
            document.getElementById('car-status').classList.add('text-danger');
            document.getElementById('car-status').classList.remove('text-success');
        }

        document.getElementById('price-per-day').textContent = `$${data.pricePerDay}`;
        document.getElementById('booking-price').textContent = `$${data.totalPrice}`;
        document.getElementById('grand-total').textContent = `$${data.grandTotal}`;

        // إظهار البوباب
        document.getElementById('availability-popup').style.display = 'block';
    })
    .catch(error => console.error('Error:', error));
}


    function closePopup() {
        document.getElementById('availability-popup').style.display = 'none';
    }

    function goToDetails() {
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
                    $('.review-sec.listing-review').append(response.newReviewHtml);
                    $('.review-header h4 span').text((${response.reviewCount}));
                    form.find('textarea').val('');
                }
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });
</script>
@endsection
