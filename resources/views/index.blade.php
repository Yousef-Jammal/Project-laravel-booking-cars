@extends('masterPage')

@section('content')

<section class="banner-section banner-slider">
    <div class="container">
        <div class="home-banner">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-down">
                    <p class="explore-text"> <span><i class="fa-solid fa-thumbs-up me-2"></i></span>100% Trusted car rental platform in the World</p>
                    <h1>Find Your Best <br>
                        <span>Dream Car for Rental</span>
                    </h1>
                    <p>Choose from luxury, sports, and SUV options. Easy booking, great prices, and excellent service. Drive your dream car today!</p>
                    <div class="view-all">
                        {{-- <a href="/carlist" class="btn btn-view d-inline-flex align-items-center">View all Cars <span><i class="feather-arrow-right ms-2"></i></span></a> --}}
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-down">
                    <div class="banner-imgs">
                        <img src="{{ asset('img/car-right.png') }}" class="img-fluid aos" alt="bannerimage">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="section-search">
    <div class="container">
        <div class="search-box-banner">
            <form action="{{ route('search_home') }}" method="post">
                @csrf
                <ul class="align-items-center">
                    <li class="column-group-main">
                        <div class="input-block">
                            <label>Pickup Location</label>
                            <div class="group-img">
                                <input type="text" name="pickup_location" class="form-control" placeholder="Enter City, Airport, or Address">
                                <span><i class="feather-map-pin"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-main">
                        <div class="input-block">
                            <label>Pickup Date</label>
                        </div>
                        <div class="input-block-wrapp">
                            <div class="input-block date-widget">
                                <div class="group-img">
                                    <input type="text" name="pickup_date_d" class="form-control datetimepicker" placeholder="04/11/2023">
                                    <span><i class="feather-calendar"></i></span>
                                </div>
                            </div>
                            <div class="input-block time-widge">
                                <div class="group-img">
                                    <input type="text" name="pickup_date_h" class="form-control timepicker" placeholder="11:00 AM">
                                    <span><i class="feather-clock"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-main">
                        <div class="input-block">
                            <label>Return Date</label>
                        </div>
                        <div class="input-block-wrapp">
                            <div class="input-block date-widge">
                                <div class="group-img">
                                    <input type="text" name="return_date_d" class="form-control datetimepicker" placeholder="04/11/2023">
                                    <span><i class="feather-calendar"></i></span>
                                </div>
                            </div>
                            <div class="input-block time-widge">
                                <div class="group-img">
                                    <input type="text" name="return_date_h" class="form-control timepicker" placeholder="11:00 AM">
                                    <span><i class="feather-clock"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-last">
                        <div class="input-block">
                            <div class="search-btn">
                                <button class="btn search-button" type="submit"> <i class="fa fa-search" aria-hidden="true"></i>Search</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>


<section class="section services">
    <div class="service-right">
        <img src="{{ asset('img/bg/service-right.svg') }}" class="img-fluid" alt="services right">
    </div>
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2>How It Works</h2>
            <p>Select your car, choose your dates, book, and drive. Simple and quick!</p>
        </div>

        <div class="services-work">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="services-group">
                        <div class="services-icon border-secondary">
                            <img class="icon-img bg-secondary" src="{{ asset('img/icons/services-icon-01.svg') }}" alt="Choose Locations">
                        </div>
                        <div class="services-content">
                            <h3>1. Choose Locations</h3>
                            <p>Select your pick-up and drop-off spots for maximum convenience. Enjoy flexible options that suit your travel needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="services-group">
                        <div class="services-icon border-warning">
                            <img class="icon-img bg-warning" src="{{ asset('img/icons/services-icon-02.svg') }}" alt="Choose Locations">
                        </div>
                        <div class="services-content">
                            <h3>2. Pick-Up Locations</h3>
                            <p>Choose where you'd like to pick up your rental car. We offer various convenient locations, from airports to city centers, to fit your schedule and travel plans.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="services-group">
                        <div class="services-icon border-dark">
                            <img class="icon-img bg-dark" src="{{ asset('img/icons/services-icon-03.svg') }}" alt="Choose Locations">
                        </div>
                        <div class="services-content">
                            <h3>3. Book your Car</h3>
                            <p>Select your vehicle and complete the reservation. Confirm your details and make a secure payment to finalize your booking.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<section class="section popular-services popular-explore">
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2>Explore Most Popular Cars</h2>
            <p>Check out our top-rated vehicles and find your favorite. Explore the most popular models available.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12" data-aos="fade-down">
                <div class="listing-tabs-group">
                    <form class="nav listing-buttons gap-3 my-form-home" data-bs-tabs="tabs" action="" method="get">
                        @csrf
                        <label onclick="foucusFav()">
                            <input type="radio" name="brand_of_car_home" id="brand_of_car_home" value="Mercedes" val href="#Carmercedes">
                            <span>
                                <img src="{{ asset('img/icons/car-icon-01.svg') }}" alt="Mercedes">
                            </span>
                            Mercedes
                        </label>

                        <label onclick="foucusFav()">
                            <input type="radio" name="brand_of_car_home" id="brand_of_car_home" value="Audi" val data-bs-toggle="tab" href="#Caraudi">
                            <span>
                                <img src="{{ asset('img/icons/car-icon-02.svg') }}" alt="Audi">
                            </span>
                            Audi
                        </label>
                        <label onclick="foucusFav()">
                            <input type="radio" name="brand_of_car_home" id="brand_of_car_home" value="Honda" val data-bs-toggle="tab" href="#Carhonda">
                            <span>
                                <img src="{{ asset('img/icons/car-icon-03.svg') }}" alt="Honda">
                            </span>
                            Honda

                        </label>
                        <label onclick="foucusFav()">
                            <input type="radio" name="brand_of_car_home" id="brand_of_car_home" value="Toyota" val data-bs-toggle="tab" href="#Cartoyota">
                            <span>
                                <img src="{{ asset('img/icons/car-icon-04.svg') }}" alt="Toyota">
                            </span>
                            Toyota
                        </label>
                        <label onclick="foucusFav()">
                            <input type="radio" name="brand_of_car_home" id="brand_of_car_home" value="Acura" val data-bs-toggle="tab" href="#Caracura">
                            <span>
                                <img src="{{ asset('img/icons/car-icon-05.svg') }}" alt="Acura">
                            </span>
                            Acura
                        </label>
                        <label onclick="foucusFav()">
                            <input type="radio" name="brand_of_car_home" id="brand_of_car_home" value="Tesla" val data-bs-toggle="tab" href="#Cartesla">
                            <span>
                                <img src="{{ asset('img/icons/car-icon-06.svg') }}" alt="Tesla">
                            </span>
                            Tesla

                        </label>
                    </form>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="Carmazda">

                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success')}}
                </div>
                @endif

                @if(Session::has('error'))
                <div class="alert alert-error" role="alert">
                    {{ Session::get('error')}}
                </div>
                @endif

                <div id="search_ajax_result">
                    <div class="row" id="my_row">



                        {{-- result --}}
                        @foreach ($cars as $car) {{-- start --}}

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ route('pruduct_details', $car->id) }}">
                                        @php
                                        $car_image = $car->images->first()->name;
                                        @endphp
                                        <img src='{{ asset("car_images/".$car_image)}}' class="img-fluid" alt="Toyota">
                                    </a>
                                    <div class="fav-item">
                                        <span class="featured-text">
                                            @php
                                            echo json_decode($car->brand, true)['name'];
                                            @endphp
                                        </span>
                                        <a class="fav-icon my_fav_for_js" id="{{ $car->id }}">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ asset('img/profiles/avatar-0.jpg')}}" alt="author">
                                        </a>
                                        <h3 class="listing-title">
                                            <a href="listing-details.html"> @php
                                                echo json_decode($car->brand, true)['name'];
                                                @endphp {{ $car->model }} {{ $car->year }}</a>
                                        </h3>
                                        <div class="list-rating">

                                            @php
                                            $rating = ['','','','',''];
                                            for ($i=0; $i < round($car->rating); $i++) {
                                                $rating[$i] = 'fa-star';
                                                }
                                                @endphp
                                                <i class="fas {{ $rating[0] }} filled"></i>
                                                <i class="fas {{ $rating[1] }} filled"></i>
                                                <i class="fas {{ $rating[2] }} filled"></i>
                                                <i class="fas {{ $rating[3] }} filled"></i>
                                                <i class="fas {{ $rating[4] }} filled"></i>
                                                <span>({{$car->rating}})</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
                                                <p>{{ $car->transmission }}</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
                                                <p>{{ $car->mileage }} KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
                                                <p>{{ $car->fuel_type }}</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
                                                <p>{{ $car->drivetrian }}</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
                                                <p>{{ $car->engine_hp }}</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ asset('img/icons/car1.png') }}" alt="Persons"></span>
                                                <p>{{ $car->door }} Doors</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Germany {{-- i want join with comapnie  --}}
                                        </div>
                                        <div class="listing-price">
                                            <h6>${{ $car->price_per_day }}<span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ route('cardetails.show', $car->id ) }}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> {{-- end --}}




<section class="section popular-car-type">
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2>Most Popular bodys</h2>
            <p>Popular car body styles: sedan, SUV, hatchback, coupe, convertible.</p>
        </div>

        <div class="row">
            <div class="popular-slider-group">
                <div class="owl-carousel popular-cartype-slider owl-theme">

                    @if(array_key_exists('SUV', $count))
                    <div class="listing-owl-item">
                        <div class="listing-owl-group">
                            <div class="listing-owl-img">
                                <img src="{{ asset('img/cars/mp-vehicle-01.png')}}" class="img-fluid" alt="Popular Cartypes">
                            </div>
                            <h6>SUV</h6>
                            <p>{{ $count['SUV'] }} Cars</p>
                        </div>
                    </div>
                    @endif

                    @if(array_key_exists('Coupe', $count))
                    <div class="listing-owl-item">
                        <div class="listing-owl-group">
                            <div class="listing-owl-img">
                                <img src="{{ asset('img/cars/mp-vehicle-02.png')}}" class="img-fluid" alt="Popular Cartypes">
                            </div>
                            <h6>Sports Coupe</h6>
                            <p>{{ $count['Coupe'] }} Cars</p>
                        </div>
                    </div>
                    @endif


                    @if(array_key_exists('Sedan', $count))
                    <div class="listing-owl-item">
                        <div class="listing-owl-group">
                            <div class="listing-owl-img">
                                <img src="{{ asset('img/cars/mp-vehicle-03.png')}}" class="img-fluid" alt="Popular Cartypes">
                            </div>
                            <h6>Sedan</h6>
                            <p>{{ $count['Sedan'] }} Cars</p>
                        </div>
                    </div>
                    @endif


                    @if(array_key_exists('Pickup', $count))
                    <div class="listing-owl-item">
                        <div class="listing-owl-group">
                            <div class="listing-owl-img">
                                <img src="{{ asset('img/cars/mp-vehicle-04.png')}}" class="img-fluid" alt="Popular Cartypes">
                            </div>
                            <h6>Pickup</h6>
                            <p>{{ $count['Pickup'] }} Cars</p>
                        </div>
                    </div>
                    @endif



                    @if(array_key_exists("Family MPV",$count))
                    <div class="listing-owl-item">
                        <div class="listing-owl-group">
                            <div class="listing-owl-img">
                                <img src="{{ asset('img/cars/mp-vehicle-05.png')}}" class="img-fluid" alt="Popular Cartypes">
                            </div>
                            <h6>Family MPV</h6>
                            <p>{{ $count['Family MPV'] }} Cars</p>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>

        <div class="view-all text-center" data-aos="fade-down">
            <a href="/carlist" class="btn btn-view d-inline-flex align-items-center">View all Cars <span><i class="feather-arrow-right ms-2"></i></span></a>
        </div>

    </div>
</section>



<section class="section why-choose popular-explore">
    <div class="choose-left">
        <img src="{{ asset('img/bg/choose-left.png') }}" class="img-fluid" alt="Why Choose Us">
    </div>
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2>Why Choose Us</h2>
            <p>Top-rated vehicles, transparent pricing, and 24/7 support, your satisfaction is our priority.</p>
        </div>

        <div class="why-choose-group">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="choose-img choose-black">
                                <img src="{{ asset('img/icons/bx-selection.svg') }}"" alt=" Icon">
                            </div>
                            <div class="choose-content">
                                <h4>Easy & Fast Booking</h4>
                                <p>Experience easy and fast booking with our streamlined process. Choose your car, select your dates, and confirm your reservation in just a few clicks.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="choose-img choose-secondary">
                                <img src="{{ asset('img/icons/bx-crown.svg') }}" alt="Icon">
                            </div>
                            <div class="choose-content">
                                <h4>Many Pickup Location</h4>
                                <p>With many pickup locations to choose from, you can conveniently start your journey wherever you are. Enjoy the flexibility and ease of picking up your rental car close to your desired location.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="choose-img choose-primary">
                                <img src="{{ asset('img/icons/bx-user-check.svg') }}" alt="Icon">
                            </div>
                            <div class="choose-content">
                                <h4>Customer Satisfaction</h4>
                                <p>We prioritize customer satisfaction by providing top-quality service, reliable vehicles, and dedicated support. Your happiness is our success.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section about-testimonial testimonials-section" id="testimonials">
    <div class="container">

        <div id="reviewNavbar" class="section-heading" data-aos="fade-down">
            <h2 class="title text-white">What People say about us? </h2>
            <p class="description text-white">Read reviews from satisfied customers about our excellent service and vehicles.</p>
        </div>

        <div class="owl-carousel about-testimonials testimonial-group mb-0 owl-theme">

            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="{{ asset('img/profiles/avatar-02.jpg')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Rabien Ustoc</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>"The car was perfect for our road trip."</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="{{ asset('img/profiles/avatar-05.jpg')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Valerie L. Ellis</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>"Quick pickup and return, zero hassles!"</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="{{ asset('img/profiles/avatar-01.jpg')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Laverne Marier</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>"Affordable rates and a great selection of vehicles."</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="{{ asset('img/profiles/avatar-10.jpg')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Sydney Salmons</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>"Smooth booking process and friendly customer support."</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="{{ asset('img/profiles/avatar-07.jpg')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Lucas Moquin</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>"Excellent service and spotless cars. Highly recommend!"</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="section faq-section bg-light-primary" id="frequently">
    <div class="container">

        <div id="faqNavbar" class="section-heading" data-aos="fade-down">
            <h2>Frequently Asked Questions </h2>
            <p>Get answers to common questions about booking, vehicles, and policies in our FAQ section.</p>
        </div>

        <div class="faq-info">
            <div class="faq-card bg-white" data-aos="fade-down">
                <h4 class="faq-title">
                    <a class="collapseds" data-bs-toggle="collapse" href="#faqOne" aria-expanded="true">How do I book a car?</a>
                </h4>
                <div id="faqOne" class="card-collapse collapse show">
                    <p>Simply select your pickup location, choose your vehicle, select your rental dates, and complete the booking form.</p>
                </div>
            </div>
            <div class="faq-card bg-white" data-aos="fade-down">
                <h4 class="faq-title">
                    <a class="collapsed" data-bs-toggle="collapse" href="#faqTwo" aria-expanded="false">What documents do I need to rent a car?</a>
                </h4>
                <div id="faqTwo" class="card-collapse collapse">
                    <p>You will need a valid driver's license, a credit card, and a form of ID.</p>
                </div>
            </div>
            <div class="faq-card bg-white" data-aos="fade-down">
                <h4 class="faq-title">
                    <a class="collapsed" data-bs-toggle="collapse" href="#faqThree" aria-expanded="false">Can I modify or cancel my reservation?</a>
                </h4>
                <div id="faqThree" class="card-collapse collapse">
                    <p>Yes, you can modify or cancel your reservation through our website or by contacting customer support. Be sure to check the cancellation policy for any fees.</p>
                </div>
            </div>
            <div class="faq-card bg-white" data-aos="fade-down">
                <h4 class="faq-title">
                    <a class="collapsed" data-bs-toggle="collapse" href="#faqFour" aria-expanded="false">Are there any additional fees?</a>
                </h4>
                <div id="faqFour" class="card-collapse collapse">
                    <p>Additional fees may apply for insurance, extra drivers, and optional add-ons. All fees will be clearly displayed during the booking process.</p>
                </div>
            </div>
            <div class="faq-card bg-white" data-aos="fade-down">
                <h4 class="faq-title">
                    <a class="collapsed" data-bs-toggle="collapse" href="#faqFive" aria-expanded="false">What is the fuel policy?</a>
                </h4>
                <div id="faqFive" class="card-collapse collapse">
                    <p>Most rentals require you to return the car with the same amount of fuel as when you picked it up. Some options include a pre-paid fuel option.</p>
                </div>
            </div>
            <div class="faq-card bg-white" data-aos="fade-down">
                <h4 class="faq-title">
                    <a class="collapsed" data-bs-toggle="collapse" href="#faqSix" aria-expanded="false">Can I pick up the car at one location and return it at another?</a>
                </h4>
                <div id="faqSix" class="card-collapse collapse">
                    <p>Yes, you can select different pickup and drop-off locations. Additional fees may apply.</p>
                </div>
            </div>
            <div class="faq-card bg-white" data-aos="fade-down">
                <h4 class="faq-title">
                    <a class="collapsed" data-bs-toggle="collapse" href="#faqSeven" aria-expanded="false">Is insurance included in the rental price?</a>
                </h4>
                <div id="faqSeven" class="card-collapse collapse">
                    <p>Basic insurance is often included, but you can choose to add extra coverage for more protection. Check the details during booking.</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('script')

<script>
    $(document).ready(function() {
        $('input[type="radio"]').change(function() {

            var searchUser = $(this).val();

            $('input[type="radio"]').parent().removeClass("my-active-input-radio-home");
            $(this).parent().addClass("my-active-input-radio-home");

            jQuery.ajax({

                url: "{{ route('ajax_search_user') }}",
                type: 'post',
                datatype: 'html',
                cache: false,
                data: {
                    searchUser: searchUser,
                    '_token': "{{csrf_token()}}"
                },
                success: function(data) {
                    $("#search_ajax_result").html(data);
                },
                error: function() {

                }


            });
        })
    })
</script>
@endsection