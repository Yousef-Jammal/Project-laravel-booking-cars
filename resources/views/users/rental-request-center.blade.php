@extends('masterPage')

@section('content')
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">{{ $user->name }} Dashboard </h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home/</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $user->name }} Booking Requests </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
<div class="dashboard-nav">
            <ul class="nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('user/user-info') ? 'active' : '' }}" href="{{ route('user.user-info') }}">Edit Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('user/rental-request-center') ? 'active' : '' }}" href="{{ route('user.rental-request-center') }}">Rental Requests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('user/rental-history-center') ? 'active' : '' }}" href="{{ route('user.rental-history-center') }}">Rental History</a>
            </li>


            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Log-out</a>
                </li> --}}
            </ul>
        </div>
    </div>

    <div class="container mt-5">
        <h2>Booking Requests</h2>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @foreach($rentals as $rental)
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="imgcontainercardaseel col-md-4">
                        @if($rental->car->images->isNotEmpty())
                            <img src='{{ url("/car_images/". $rental->car->images->first()->name) }}' class="cardimgaseel card-img" alt="{{ $rental->car->images->first()->name }}">
                        @else
                            <img src="{{ asset('storage/default.png') }}" class="cardimgaseel card-img" alt="{{ $rental->car->brand }}">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="aseelcardlist card-body">
                            <div class="listAseel blog-list-title d-flex">
                                <h3><a href="">{{ $rental->car->brand->name  }} {{ $rental->car->model }}</a></h3>
                                <h6>Category : <span>{{ $rental->car->brand->name }}</span></h6>
                            </div>
                            <div class="listAseel blog-list-head d-flex">
                                <p class="card-text"><strong>Owned by:</strong> {{ $rental->car->user->name }}</p>
                                <p class="card-text"><strong>Rental Period:</strong> {{ $rental->rent_start }} to {{ $rental->rent_end }}</p>
                            </div>
                            <p class="card-text"><strong>Status:</strong></p>


                                <div style="font-weight: bolder; font-size:1rem; color:#0A58CA; text-decoration:underline;" class="statusfeildaseel form-group d-flex">

                                                {{ $rental->status->name }}

                                </div></p>
                                <a class=" actionbtnaseel btn btn-primary" href="{{ route('company.listing-details', $rental->car_id) }}">Re-book</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
