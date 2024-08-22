@extends('masterPage')

@section('content')

<section class="banner-section banner-slider">
<div class="container">
<div class="home-banner">
<div class="row align-items-center">
<div class="col-lg-6" data-aos="fade-down">
<p class="explore-text"> <span><i class="fa-solid fa-thumbs-up me-2"></i></span>100% Trusted car rental platform in the World</p>
<h1>Find Your Best <br>
<span>Dream Car for Rental</span></h1>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
<div class="view-all">
<a href="listing-grid.html" class="btn btn-view d-inline-flex align-items-center">View all Cars <span><i class="feather-arrow-right ms-2"></i></span></a>
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
<form action="https://dreamsrent.dreamstechnologies.com/html/listing-grid.html">
<ul class="align-items-center">
<li class="column-group-main">
<div class="input-block">
<label>Pickup Location</label>
<div class="group-img">
<input type="text" class="form-control" placeholder="Enter City, Airport, or Address">
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
<input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
<span><i class="feather-calendar"></i></span>
</div>
</div>
<div class="input-block time-widge">
<div class="group-img">
<input type="text" class="form-control timepicker" placeholder="11:00 AM">
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
<input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
<span><i class="feather-calendar"></i></span>
</div>
</div>
<div class="input-block time-widge">
<div class="group-img">
<input type="text" class="form-control timepicker" placeholder="11:00 AM">
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
<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
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
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
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
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
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
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
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
<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
</div>

<div class="row justify-content-center">
<div class="col-lg-12" data-aos="fade-down">
<div class="listing-tabs-group">
<ul class="nav listing-buttons gap-3" data-bs-tabs="tabs">
<li>
<a class="active" aria-current="true" data-bs-toggle="tab" href="#Carmazda">
<span>
<img src="{{ asset('img/icons/car-icon-01.svg') }}" alt="Mazda">
</span>
Mazda
</a>
</li>
<li>
<a data-bs-toggle="tab" href="#Caraudi">
<span>
<img src="{{ asset('img/icons/car-icon-02.svg') }}" alt="Audi">
</span>
Audi
</a>
</li>
<li>
<a data-bs-toggle="tab" href="#Carhonda">
<span>
<img src="{{ asset('img/icons/car-icon-03.svg') }}" alt="Honda">
</span>
Honda
</a>
</li>
<li>
<a data-bs-toggle="tab" href="#Cartoyota">
<span>
<img src="{{ asset('img/icons/car-icon-04.svg') }}" alt="Toyota">
</span>
Toyota
</a>
</li>
<li>
<a data-bs-toggle="tab" href="#Caracura">
<span>
<img src="{{ asset('img/icons/car-icon-05.svg') }}" alt="Acura">
</span>
Acura
</a>
</li>
<li>
<a data-bs-toggle="tab" href="#Cartesla">
<span>
<img src="{{ asset('img/icons/car-icon-06.svg') }}" alt="Tesla">
</span>
Tesla
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="tab-content">
<div class="tab-pane active" id="Carmazda">
<div class="row">

<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Toyota</span>
<a href="javascript:void(0)" class="fav-icon">
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
<a href="listing-details.html">Toyota Camry SE 350</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Germany
</div>
<div class="listing-price">
<h6>$400 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-02.jpg')}}" class="img-fluid" alt="KIA">
</a>
<div class="fav-item">
<span class="featured-text">KIA</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-02.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Kia Soul 2016</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 KM"></span>
<p>22 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2016"></span>
<p>2016</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Belgium
</div>
<div class="listing-price">
<h6>$80 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-03.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Audi</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-03.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Audi A3 2019 new</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2019</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>4 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$45 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-04.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Ferrai</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-04.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Ferrari 458 MM Speciale</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="14 KM"></span>
<p>14 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Basic"></span>
<p>Basic</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2022"></span>
<p>2022</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$160 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-05.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Chevrolet</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-05.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">2018 Chevrolet Camaro</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="18 KM"></span>
<p>18 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>4 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Germany
</div>
<div class="listing-price">
<h6>$36 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-06.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Acura</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-06.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Acura Sport Version</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="12 KM"></span>
<p>12 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2013"></span>
<p>2013</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$30 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-07.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Chevrolet</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-07.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Chevrolet Pick Truck 3.5L</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2012"></span>
<p>2012</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Spain
</div>
<div class="listing-price">
<h6>$77 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-08.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Toyota</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-08.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Toyota Tacoma 4WD</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 miles"></span>
<p>22 miles</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2019</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Dallas, USA
</div>
<div class="listing-price">
<h6>$30 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-09.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Accura</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-10.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Acura RDX FWD</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 miles"></span>
<p>42 miles</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2021</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Dallas, USA
</div>
<div class="listing-price">
<h6>$80 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="tab-pane fade" id="Caraudi">
<div class="row">

<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-03.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Audi</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-03.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Audi A3 2019 new</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2019</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>4 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$45 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-04.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Ferrai</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-04.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Ferrari 458 MM Speciale</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="14 KM"></span>
<p>14 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Basic"></span>
<p>Basic</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2022"></span>
<p>2022</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$160 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-05.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Chevrolet</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-05.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">2018 Chevrolet Camaro</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="18 KM"></span>
<p>18 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>4 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Germany
</div>
<div class="listing-price">
<h6>$36 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-06.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Acura</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-06.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Acura Sport Version</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="12 KM"></span>
<p>12 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2013"></span>
<p>2013</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$30 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-07.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Chevrolet</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-07.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Chevrolet Pick Truck 3.5L</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2012"></span>
<p>2012</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Spain
</div>
<div class="listing-price">
<h6>$77 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-08.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Toyota</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-08.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Toyota Tacoma 4WD</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 miles"></span>
<p>22 miles</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2019</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Dallas, USA
</div>
<div class="listing-price">
<h6>$30 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Toyota</span>
<a href="javascript:void(0)" class="fav-icon">
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
<a href="listing-details.html">Toyota Camry SE 350</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Germany
</div>
<div class="listing-price">
<h6>$400 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-02.jpg')}}" class="img-fluid" alt="KIA">
</a>
<div class="fav-item">
<span class="featured-text">KIA</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-02.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Kia Soul 2016</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 KM"></span>
<p>22 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2016"></span>
<p>2016</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Belgium
</div>
<div class="listing-price">
<h6>$80 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-09.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Accura</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-10.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Acura RDX FWD</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 miles"></span>
<p>42 miles</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2021</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Dallas, USA
</div>
<div class="listing-price">
<h6>$80 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="tab-pane fade" id="Carhonda">
<div class="row">

<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-08.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Toyota</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-08.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Toyota Tacoma 4WD</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 miles"></span>
<p>22 miles</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2019</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Dallas, USA
</div>
<div class="listing-price">
<h6>$30 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Toyota</span>
<a href="javascript:void(0)" class="fav-icon">
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
<a href="listing-details.html">Toyota Camry SE 350</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Germany
</div>
<div class="listing-price">
<h6>$400 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-02.jpg')}}" class="img-fluid" alt="KIA">
</a>
<div class="fav-item">
<span class="featured-text">KIA</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-02.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Kia Soul 2016</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 KM"></span>
<p>22 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2016"></span>
<p>2016</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Belgium
</div>
<div class="listing-price">
<h6>$80 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-03.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Audi</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-03.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Audi A3 2019 new</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2019</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>4 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$45 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-04.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Ferrai</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-04.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Ferrari 458 MM Speciale</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="14 KM"></span>
<p>14 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Basic"></span>
<p>Basic</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2022"></span>
<p>2022</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$160 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-05.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Chevrolet</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-05.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">2018 Chevrolet Camaro</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="18 KM"></span>
<p>18 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>4 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Germany
</div>
<div class="listing-price">
<h6>$36 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-06.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Acura</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-06.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Acura Sport Version</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="12 KM"></span>
<p>12 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2013"></span>
<p>2013</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$30 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-07.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Chevrolet</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-07.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Chevrolet Pick Truck 3.5L</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2012"></span>
<p>2012</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Spain
</div>
<div class="listing-price">
<h6>$77 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-09.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Accura</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-08.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Acura RDX FWD</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 miles"></span>
<p>42 miles</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2021</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Dallas, USA
</div>
<div class="listing-price">
<h6>$80 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="tab-pane fade" id="Cartoyota">
<div class="row">

<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Toyota</span>
<a href="javascript:void(0)" class="fav-icon">
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
<a href="listing-details.html">Toyota Camry SE 350</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Germany
</div>
<div class="listing-price">
<h6>$400 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-02.jpg')}}" class="img-fluid" alt="KIA">
</a>
<div class="fav-item">
<span class="featured-text">KIA</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-02.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Kia Soul 2016</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 KM"></span>
<p>22 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2016"></span>
<p>2016</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Belgium
</div>
<div class="listing-price">
<h6>$80 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-03.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Audi</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-03.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Audi A3 2019 new</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2019</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>4 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$45 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-04.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Ferrai</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-04.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Ferrari 458 MM Speciale</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="14 KM"></span>
<p>14 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Basic"></span>
<p>Basic</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2022"></span>
<p>2022</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$160 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-05.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Chevrolet</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-05.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">2018 Chevrolet Camaro</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="18 KM"></span>
<p>18 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>4 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Germany
</div>
<div class="listing-price">
<h6>$36 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-06.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Acura</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-06.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Acura Sport Version</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="12 KM"></span>
<p>12 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2013"></span>
<p>2013</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$30 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-07.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Chevrolet</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-07.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Chevrolet Pick Truck 3.5L</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2012"></span>
<p>2012</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Spain
</div>
<div class="listing-price">
<h6>$77 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-08.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Toyota</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-08.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Toyota Tacoma 4WD</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 miles"></span>
<p>22 miles</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2019</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Dallas, USA
</div>
<div class="listing-price">
<h6>$30 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-09.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Accura</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-10.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Acura RDX FWD</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 miles"></span>
<p>42 miles</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2021</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Dallas, USA
</div>
<div class="listing-price">
<h6>$80 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="tab-pane fade" id="Caracura">
<div class="row">

<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Toyota</span>
<a href="javascript:void(0)" class="fav-icon">
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
<a href="listing-details.html">Toyota Camry SE 350</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Germany
</div>
<div class="listing-price">
<h6>$400 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-02.jpg')}}" class="img-fluid" alt="KIA">
</a>
<div class="fav-item">
<span class="featured-text">KIA</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-02.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Kia Soul 2016</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 KM"></span>
<p>22 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2016"></span>
<p>2016</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Belgium
</div>
<div class="listing-price">
<h6>$80 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-03.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Audi</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-03.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Audi A3 2019 new</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2019</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>4 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$45 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-04.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Ferrai</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-04.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Ferrari 458 MM Speciale</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="14 KM"></span>
<p>14 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Basic"></span>
<p>Basic</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2022"></span>
<p>2022</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$160 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-05.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Chevrolet</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-05.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">2018 Chevrolet Camaro</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="18 KM"></span>
<p>18 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>4 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Germany
</div>
<div class="listing-price">
<h6>$36 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-06.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Acura</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-06.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Acura Sport Version</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="12 KM"></span>
<p>12 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2013"></span>
<p>2013</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$30 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-07.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Chevrolet</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-07.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Chevrolet Pick Truck 3.5L</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2012"></span>
<p>2012</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Spain
</div>
<div class="listing-price">
<h6>$77 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-08.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Toyota</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-08.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Toyota Tacoma 4WD</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 miles"></span>
<p>22 miles</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2019</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Dallas, USA
</div>
<div class="listing-price">
<h6>$30 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-09.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Accura</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-10.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Acura RDX FWD</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 miles"></span>
<p>42 miles</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2021</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Dallas, USA
</div>
<div class="listing-price">
<h6>$80 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="tab-pane fade" id="Cartesla">
<div class="row">

<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-08.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Toyota</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-08.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Toyota Tacoma 4WD</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 miles"></span>
<p>22 miles</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2019</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Dallas, USA
</div>
<div class="listing-price">
<h6>$30 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Toyota</span>
<a href="javascript:void(0)" class="fav-icon">
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
<a href="listing-details.html">Toyota Camry SE 350</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Germany
</div>
<div class="listing-price">
<h6>$400 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-02.jpg')}}" class="img-fluid" alt="KIA">
</a>
<div class="fav-item">
<span class="featured-text">KIA</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-02.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Kia Soul 2016</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 KM"></span>
<p>22 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2016"></span>
<p>2016</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Belgium
</div>
<div class="listing-price">
<h6>$80 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-03.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Audi</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-03.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Audi A3 2019 new</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2019</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>4 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$45 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-04.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Ferrai</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-04.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Ferrari 458 MM Speciale</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="14 KM"></span>
<p>14 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Basic"></span>
<p>Basic</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2022"></span>
<p>2022</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$160 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-05.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Chevrolet</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-05.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">2018 Chevrolet Camaro</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="18 KM"></span>
<p>18 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>4 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Germany
</div>
<div class="listing-price">
<h6>$36 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-06.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Acura</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-06.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Acura Sport Version</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="12 KM"></span>
<p>12 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Diesel"></span>
<p>Diesel</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2013"></span>
<p>2013</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Newyork, USA
</div>
<div class="listing-price">
<h6>$30 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-07.jpg')}}" class="img-fluid" alt="Audi">
</a>
<div class="fav-item">
<span class="featured-text">Chevrolet</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-07.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Chevrolet Pick Truck 3.5L</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="Manual"></span>
<p>Manual</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2012"></span>
<p>2012</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Spain
</div>
<div class="listing-price">
<h6>$77 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-09.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">Accura</span>
<a href="javascript:void(0)" class="fav-icon">
<i class="feather-heart"></i>
</a>
</div>
</div>
<div class="listing-content">
<div class="listing-features">
<a href="javascript:void(0)" class="author-img">
<img src="{{ asset('img/profiles/avatar-08.jpg')}}" alt="author">
</a>
<h3 class="listing-title">
<a href="listing-details.html">Acura RDX FWD</a>
</h3>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="22 miles"></span>
<p>42 miles</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2019"></span>
<p>2021</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-location-details">
<div class="listing-price">
<span><i class="feather-map-pin"></i></span>Dallas, USA
</div>
<div class="listing-price">
<h6>$80 <span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</section>


<section class="section popular-car-type">
<div class="container">

<div class="section-heading" data-aos="fade-down">
<h2>Most Popular Cartypes</h2>
<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
</div>

<div class="row">
<div class="popular-slider-group">
<div class="owl-carousel popular-cartype-slider owl-theme">

<div class="listing-owl-item">
<div class="listing-owl-group">
<div class="listing-owl-img">
<img src="{{ asset('img/cars/mp-vehicle-01.png')}}" class="img-fluid" alt="Popular Cartypes">
</div>
<h6>Crossover</h6>
<p>35 Cars</p>
</div>
</div>


<div class="listing-owl-item">
<div class="listing-owl-group">
<div class="listing-owl-img">
<img src="{{ asset('img/cars/mp-vehicle-02.png')}}" class="img-fluid" alt="Popular Cartypes">
</div>
<h6>Sports Coupe</h6>
<p>45 Cars</p>
</div>
</div>


<div class="listing-owl-item">
<div class="listing-owl-group">
<div class="listing-owl-img">
<img src="{{ asset('img/cars/mp-vehicle-03.png')}}" class="img-fluid" alt="Popular Cartypes">
</div>
<h6>Sedan</h6>
<p>15 Cars</p>
</div>
</div>


<div class="listing-owl-item">
<div class="listing-owl-group">
<div class="listing-owl-img">
<img src="{{ asset('img/cars/mp-vehicle-04.png')}}" class="img-fluid" alt="Popular Cartypes">
</div>
<h6>Pickup</h6>
<p>17 Cars</p>
</div>
</div>


<div class="listing-owl-item">
<div class="listing-owl-group">
<div class="listing-owl-img">
<img src="{{ asset('img/cars/mp-vehicle-05.png')}}" class="img-fluid" alt="Popular Cartypes">
</div>
<h6>Family MPV</h6>
<p>24 Cars</p>
</div>
</div>

</div>
</div>
</div>

<div class="view-all text-center" data-aos="fade-down">
<a href="listing-grid.html" class="btn btn-view d-inline-flex align-items-center">View all Cars <span><i class="feather-arrow-right ms-2"></i></span></a>
</div>

</div>
</section>


<section class="section facts-number">
<div class="facts-left">
<img src="{{ asset('img/bg/facts-left.png')}}" class="img-fluid" alt="facts left">
</div>
<div class="facts-right">
<img src="{{ asset('img/bg/facts-right.png')}}" class="img-fluid" alt="facts right">
</div>
<div class="container">

<div class="section-heading" data-aos="fade-down">
<h2 class="title text-white">Facts By The Numbers</h2>
<p class="description text-white">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
</div>

<div class="counter-group">
<div class="row">
<div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
<div class="count-group flex-fill">
<div class="customer-count d-flex align-items-center">
<div class="count-img">
<img src="{{ asset('img/icons/bx-heart.svg"') }} alt="Icon">
</div>
<div class="count-content">
<h4><span class="counterUp">16</span>K+</h4>
<p>Happy Customers</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
<div class="count-group flex-fill">
<div class="customer-count d-flex align-items-center">
<div class="count-img">
<img src="{{ asset('img/icons/bx-car.svg"') }} alt="Icon">
</div>
<div class="count-content">
<h4><span class="counterUp">2547</span>+</h4>
<p>Count of Cars</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
<div class="count-group flex-fill">
<div class="customer-count d-flex align-items-center">
<div class="count-img">
<img src="{{ asset('img/icons/bx-headphone.svg"') }} alt="Icon">
</div>
<div class="count-content">
<h4><span class="counterUp">625</span>K+</h4>
<p>Car Center Solutions</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
<div class="count-group flex-fill">
<div class="customer-count d-flex align-items-center">
<div class="count-img">
<img src="{{ asset('img/icons/bx-history.svg"') }} alt="Icon">
</div>
<div class="count-content">
<h4><span class="counterUp">200</span>K+</h4>
<p>Total Kilometer</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="section popular-services">
<div class="container">

<div class="section-heading" data-aos="fade-down">
<h2>Recommended Car Rental deals</h2>
<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
</div>

<div class="row">
<div class="popular-slider-group">
<div class="owl-carousel rental-deal-slider owl-theme">

<div class="rental-car-item">
<div class="listing-item mb-0">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
</a>
</div>
<div class="listing-content">
<div class="listing-features">
<div class="fav-item-rental">
<span class="featured-text">$400/day</span>
</div>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
<h3 class="listing-title">
<a href="listing-details.html">Toyota Camry SE 350</a>
</h3>
<h6>Listed By : <span>Venis Darren</span></h6>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="rental-car-item">
<div class="listing-item mb-0">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-02.jpg')}}" class="img-fluid" alt="Toyota">
</a>
</div>
<div class="listing-content">
<div class="listing-features">
<div class="fav-item-rental">
<span class="featured-text">$400/day</span>
</div>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
<h3 class="listing-title">
<a href="listing-details.html">Toyota Camry SE 350</a>
</h3>
<h6>Listed By : <span>Venis Darren</span></h6>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>


<div class="rental-car-item">
<div class="listing-item mb-0">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-03.jpg')}}" class="img-fluid" alt="Toyota">
</a>
</div>
<div class="listing-content">
<div class="listing-features">
<div class="fav-item-rental">
<span class="featured-text">$400/day</span>
</div>
<div class="list-rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<span>(5.0)</span>
</div>
<h3 class="listing-title">
<a href="listing-details.html">Toyota Camry SE 350</a>
</h3>
<h6>Listed By : <span>Venis Darren</span></h6>
</div>
<div class="listing-details-group">
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-01.svg') }}" alt="Auto"></span>
<p>Auto</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-02.svg') }}" alt="10 KM"></span>
<p>10 KM</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-03.svg') }}" alt="Petrol"></span>
<p>Petrol</p>
</li>
</ul>
<ul>
<li>
<span><img src="{{ asset('img/icons/car-parts-04.svg') }}" alt="Power"></span>
<p>Power</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-05.svg') }}" alt="2018"></span>
<p>2018</p>
</li>
<li>
<span><img src="{{ asset('img/icons/car-parts-06.svg') }}" alt="Persons"></span>
<p>5 Persons</p>
</li>
</ul>
</div>
<div class="listing-button">
<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

<div class="view-all text-center" data-aos="fade-down">
<a href="listing-grid.html" class="btn btn-view d-inline-flex align-items-center">Go to all Cars <span><i class="feather-arrow-right ms-2"></i></span></a>
</div>

</div>
</section>


<section class="section why-choose popular-explore">
<div class="choose-left">
<img src="{{ asset('img/bg/choose-left.png')}}" class="img-fluid" alt="Why Choose Us">
</div>
<div class="container">

<div class="section-heading" data-aos="fade-down">
<h2>Why Choose Us</h2>
<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
</div>

<div class="why-choose-group">
<div class="row">
<div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
<div class="card flex-fill">
<div class="card-body">
<div class="choose-img choose-black">
<img src="{{ asset('img/icons/bx-selection.svg"') }} alt="Icon">
</div>
<div class="choose-content">
<h4>Easy & Fast Booking</h4>
<p>Completely carinate e business testing process whereas fully researched customer service. Globally extensive content with quality.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
<div class="card flex-fill">
<div class="card-body">
<div class="choose-img choose-secondary">
<img src="{{ asset('img/icons/bx-crown.svg"') }} alt="Icon">
</div>
<div class="choose-content">
<h4>Many Pickup Location</h4>
<p>Enthusiastically magnetic initiatives with cross-platform sources. Dynamically target testing procedures through effective.</p>
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
<p>Globally user centric method interactive. Seamlessly revolutionize unique portals corporate collaboration.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="section about-testimonial testimonials-section">
<div class="container">

<div class="section-heading" data-aos="fade-down">
<h2 class="title text-white">What People say about us? </h2>
<p class="description text-white">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
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
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
<img src="{{ asset('img/profiles/avatar-03.jpg')}}" class="img-fluid" alt="img">
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
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
<img src="{{ asset('img/profiles/avatar-04.jpg')}}" class="img-fluid" alt="img">
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
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
<img src="{{ asset('img/profiles/avatar-06.jpg')}}" class="img-fluid" alt="img">
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
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
</div>

</div>
</div>
</section>


<section class="section faq-section bg-light-primary">
<div class="container">

<div class="section-heading" data-aos="fade-down">
<h2>Frequently Asked Questions </h2>
<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
</div>

<div class="faq-info">
<div class="faq-card bg-white" data-aos="fade-down">
<h4 class="faq-title">
<a class="collapseds" data-bs-toggle="collapse" href="#faqOne" aria-expanded="true">What is about rental car deals?</a>
</h4>
<div id="faqOne" class="card-collapse collapse show">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
<div class="faq-card bg-white" data-aos="fade-down">
<h4 class="faq-title">
<a class="collapsed" data-bs-toggle="collapse" href="#faqTwo" aria-expanded="false">In which areas do you operate?</a>
</h4>
<div id="faqTwo" class="card-collapse collapse">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
<div class="faq-card bg-white" data-aos="fade-down">
<h4 class="faq-title">
<a class="collapsed" data-bs-toggle="collapse" href="#faqThree" aria-expanded="false">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium?</a>
</h4>
<div id="faqThree" class="card-collapse collapse">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
<div class="faq-card bg-white" data-aos="fade-down">
<h4 class="faq-title">
<a class="collapsed" data-bs-toggle="collapse" href="#faqFour" aria-expanded="false">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia?</a>
</h4>
<div id="faqFour" class="card-collapse collapse">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
<div class="faq-card bg-white" data-aos="fade-down">
<h4 class="faq-title">
<a class="collapsed" data-bs-toggle="collapse" href="#faqFive" aria-expanded="false">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor?</a>
</h4>
<div id="faqFive" class="card-collapse collapse">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
<div class="faq-card bg-white" data-aos="fade-down">
<h4 class="faq-title">
<a class="collapsed" data-bs-toggle="collapse" href="#faqSix" aria-expanded="false">eque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit?</a>
</h4>
<div id="faqSix" class="card-collapse collapse">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
<div class="faq-card bg-white" data-aos="fade-down">
<h4 class="faq-title">
<a class="collapsed" data-bs-toggle="collapse" href="#faqSeven" aria-expanded="false">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod?</a>
</h4>
<div id="faqSeven" class="card-collapse collapse">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
</div>
</div>
</section>


<section class="pricing-section pricing-page pricing-section-bottom">
<div class="container">

<div class="section-heading" data-aos="fade-down">
<h2>Transparent Pricing For you</h2>
<p>Choose a package that suits you</p>
</div>


<div class="plan-selected" data-aos="fade-down">
<h4>Monthly</h4>
<div class="status-toggle me-2 ms-2">
<input id="list-rating_1" class="px-4 check" type="checkbox" checked>
<label for="list-rating_1" class="px-4 checktoggle checkbox-bg">checkbox</label>
</div>
<h4>Annually</h4>
</div>

<div class="row">
<div class="col-lg-3 d-flex col-md-6 col-12" data-aos="fade-down">
<div class="price-card price-selected flex-fill">
<div class="price-head">
<h2>Save more with Good Plans</h2>
<p>Choose a plan and get onboard in Minutes, then get $100 with next payment</p>
</div>
<div class="price-body">
<img class="img-fluid" src="{{ asset('img/price-plan.png')}}" alt="Price Plan">
</div>
</div>
</div>
<div class="col-lg-3 d-flex col-md-6 col-12" data-aos="fade-down">
<div class="price-card flex-fill">
<div class="price-head">
<div class="price-level">
<h6>Essential</h6>
<p>For the basics</p>
</div>
<h4>$49</h4>
<span>Per user per month</span>
</div>
<div class="price-details">
<ul>
<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Get Starting message</li>
<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Min 1 month, extend anytime</li>
<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Rental car prices include tax</li>
<li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Extend or return anytime</li>
<li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Doorstep delivery in 2days</li>
<li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Car system included free of charge.</li>
<li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Min 1 month, extend anytime</li>
</ul>
<a href="login.html" class="btn viewdetails-btn">Request a demo</a>
</div>
</div>
</div>
<div class="col-lg-3 d-flex col-md-6 col-12" data-aos="fade-down">
<div class="price-card flex-fill active">
<div class="price-head">
<div class="price-level price-level-popular">
<h6>Recommended</h6>
<p>For the Users</p>
</div>
<h4>$95</h4>
<span>Per user per month</span>
</div>
<div class="price-details">
<ul>
<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Get Starting message</li>
<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Min 1 month, extend anytime</li>
<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Rental car prices include tax</li>
<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Extend or return anytime</li>
<li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Doorstep delivery in 2days</li>
<li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Car system included free of charge.</li>
<li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Min 1 month, extend anytime</li>
</ul>
<a href="login.html" class="btn viewdetails-btn btn-popular">Request a demo</a>
</div>
</div>
</div>
<div class="col-lg-3 d-flex col-md-6 col-12" data-aos="fade-down">
<div class="price-card flex-fill">
<div class="price-head">
<div class="price-level">
<h6>Pro</h6>
<p>For the Pro</p>
</div>
<h4>$154</h4>
<span>Per user per month</span>
</div>
<div class="price-details">
<ul>
<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Get Starting message</li>
<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Min 1 month, extend anytime</li>
<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Rental car prices include tax</li>
<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Extend or return anytime</li>
<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Doorstep delivery in 2days</li>
<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Car system included free of charge.</li>
<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Min 1 month, extend anytime</li>
</ul>



</div>
</section>

@endsection
