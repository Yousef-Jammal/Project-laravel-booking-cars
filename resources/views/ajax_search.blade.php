
    <div class="row" id="my_row">
        @foreach ($cars as $car)

        <div class="col-lg-4 col-md-6 col-12">
            <div class="listing-item">
                <div class="listing-img">
                    <a href="{{ route('cardetails.show', $car->id ) }}">
                        @php
                        $car_image = 'default.png';
                        if ($car->images->first()) {
                        if ($car->images->first()->name) {
                        $car_image = $car->images->first()->name;
                        }
                        }
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
                            <img src='{{ asset("user_images/".$car->user->image)}}' alt="author">
                        </a>
                        <h3 class="listing-title">
                            <a href="{{route('cardetails.show',$car->id)}}"> @php
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
