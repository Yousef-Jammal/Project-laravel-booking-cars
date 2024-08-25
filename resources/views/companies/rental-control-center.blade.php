@extends('masterPage')

@section('content')
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title">{{ $company->user->name }} Cars </h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home/</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $company->user->name }} Rental Control Center </li>
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
                <a class="nav-link {{ request()->is('company/dashboard') ? 'active' : '' }}" href="{{ route('company.dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('company/rental-control-center') ? 'active' : '' }}" href="{{ route('company.rental-control-center') }}">Rental Control Center</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('company/carControlCenter') ? 'active' : '' }}" href="{{ route('company.carControlCenter') }}">Cars Control Center</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">My cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('company/user-info') ? 'active' : '' }}" href="{{ route('company.user-info') }}">Edit Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Log-out</a>
            </li>
        </ul>
    </div>
</div>

<div class="container mt-5">
    <h2>Rental Control Center</h2>
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
        @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif





        @foreach ($rentals as $rental)
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="imgcontainercardaseel col-md-4">
                @if($rental->car->images->isNotEmpty())
                {{--  {{url("/car_images/".$car->images->first()->name)}}  --}}
                <img src="{{ url("/car_images/". $car->images->first()->name) }}" class="cardimgaseel card-img" alt="{{ $car->images->first()->name }}">
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
                        <p class="card-text"><strong>Rented by:</strong> {{ $rental->user->name }}</p>
                        <p class="card-text"><strong>Rental Period:</strong> {{ $rental->rent_start }} to {{ $rental->rent_end }}</p>
                    </div>
                    <p class="card-text"><strong>Status:</strong></p>

                    <form class="listAseel  d-flex" action="{{ route('company.update-rental-status', $rental->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="statusfeildaseel form-group d-flex">
                            <select name="status_id" class="form-control">
                                @foreach($statuses as $status)
                                <option value="{{ $status->id }}" {{ $rental->status_id == $status->id ? 'selected' : '' }}>
                                    {{ $status->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="statusbtnaseel btn btn-primary">Update Status</button>
                    </form>



                    {{-- <form class="listAseel d-flex" action="{{ route('company.update-rental-status', $rental->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="statusfeildaseel form-group d-flex">
                        <select name="status_id" class="form-control status-dropdown {{ strtolower($rental->status->name) }}">
                            @foreach ($statuses as $status)
                            <option value="{{ $status->id }}" class="status-option {{ strtolower($status->name) }}"
                                {{ $rental->status_id == $status->id ? 'selected' : '' }}>
                                {{ strtoupper($status->name) }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="statusbtnaseel btn btn-primary d-none">Update Status</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection