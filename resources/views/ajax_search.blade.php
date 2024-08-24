
<div class="row">


<input type="hidden" name="for_fav">
    {{--  result --}}
@foreach ($cars as $car)                     {{--  start --}}

<div class="col-lg-4 col-md-6 col-12">    {{--  this is a problim  ==>>  data-aos="fade-down"  --}}
<div class="listing-item">
<div class="listing-img">
<a href="listing-details.html">
<img src="{{ asset('img/cars/car-01.jpg')}}" class="img-fluid" alt="Toyota">
</a>
<div class="fav-item">
<span class="featured-text">{{ $car->brand }}</span>
<a href="javascript:void(0)" class="fav-icon" id="{{ $car->id }}" onclick="my_favorte_home(this)">
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
<a href="listing-details.html">{{ $car->brand }} {{ $car->model }} {{ $car->year }}</a>
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
<span><i class="feather-map-pin"></i></span>Germany   {{--  i want join with comapnie  --}}
</div>
<div class="listing-price">
<h6>${{ $car->price_per_day }}<span>/ Day</span></h6>
</div>
</div>
<div class="listing-button">
<a href="{{ route('pruduct_details', $car->id ) }}" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
</div>
</div>
</div>
</div>

@endforeach

