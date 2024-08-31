@extends('masterPage')
@section('content')
{{-- 11111111111111111111111111111111111111111111111111 --}}
{{-- SECTION: Breadcrumb --}}
<div id="pop-up-container">
    <div id="availability-popup">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Booking Details</h4>
                <button type="button" class="close" onclick="closePopup()">×</button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success">
                    <i class="fa-regular fa-circle-check"></i>
                    <span id="car-status">{{$car->brand->name ." ". $car->model}}</span>
                </div>

                <div class="details-row">
                    <div class="pricing-details">
                        <ul>
                            <h5>Pick Up Date</h5>
                            <h6>{{$data['rent_start']}}</h6>
                        </ul>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <h5>Drop Off Date</h5>
                            <h6>{{$data['rent_end']}}</h6>
                        </ul>
                    </div>
                    <div class="grand-total">
                        <h5>Total Price</h5>
                        <span id="grand-total">${{$data['total']}}</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="goToDetails()">Go to Details</button>
                <button class="btn btn-primary" onclick="closePopup()">Close</button>
            </div>
        </div>
    </div>
</div>
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
                        @foreach($car->images as $image)
                        <div class="product-img">
                            <img src='{{  asset("/car_images/" . $image->name) }}' alt="Slider">
                        </div>
                        @endforeach
                    </div>
                    <div class="slider slider-nav-thumbnails">
                        @foreach($car->images as $image)
                        <div>
                            <img src='{{  asset("/car_images/" . $image->name) }}' alt="product image">
                        </div>
                        @endforeach
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
                                                        <label>Rating <span class="text-danger">*</span></label>
                                                        <div class="star-rating">
                                                            @for($i = 5; $i >= 1; $i--)
                                                            <input type="radio" name="rating" value="{{ $i }}" id="rating-{{ $i }}">
                                                            <label for="rating-{{ $i }}" class="fa fa-star"></label>
                                                            @endfor
                                                        </div>
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
                        <form action="/show_calendar/{{$car->id}}" method="get">
                            @csrf
                            <ul>
                                <li class="column-group-last">
                                    <div class="input-block mb-0">
                                        <div class="search-btn">
                                            <button class="btn btn-primary check-available w-100" type="submit">Choose Rent Date </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </form>
                        <br>
                        <form action="{{ route('check.availability') }}" method="POST">
                            @csrf
                            <input type="hidden" name="car_id" value="{{ $car->id }}">
                            <ul>
                                <li class="column-group-last">
                                    <div class="input-block mb-0">
                                        <div class="search-btn">
                                            <button class="btn btn-primary check-available w-100" type="button" onclick="checkAvailability()">Check Price </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </form>
                        {{-- 88888888888888888888888888888888888888888888888888888888888888 --}}
                        <!-- SECTION: Availability Popup -->

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
                            <a href="#"><img src='{{ asset("user_images/" . ($car->user->image ?? "default.png"))}}' alt="{{ $car->user->name }}"></a>
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
        function closePopup() {
            document.getElementById('pop-up-container').style.display = 'none';
        }

        function checkAvailability() {
            document.getElementById('pop-up-container').style.display = 'flex';

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
                        $('.review-header h4 span').text((`$ {
                            response.reviewCount
                        }`));
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
