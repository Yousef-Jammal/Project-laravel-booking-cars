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
                        <li class="breadcrumb-item active" aria-current="page">{{ $company->user->name }} Dashboard </li>
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

<div class="container topCard">

    <div class="row">
        <!-- Deals this week Card -->
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Deals | This Week</h5>
                    <h3>{{ $dealsWeek }}</h3>
                    <p class="text-success">12% increase</p>
                </div>
            </div>
        </div>

        <!-- Revenue This Month Card -->
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Revenue | This Month</h5>
                    <h3>${{ number_format($revenueThisMonth, 2) }}</h3>
                    <p class="text-success">8% increase</p>
                </div>
            </div>
        </div>

        <!-- Customers This Year Card -->
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Customers | This Year</h5>
                    <h3>{{ $customersThisYear }}</h3>
                    <p class="text-danger">12% decrease</p>
                </div>
            </div>
        </div>
        <!-- New Total Cars Available Card -->
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Cars Available</h5>
                    <h3>{{ $totalCarsAvailable }}</h3>
                    <p class="text-info">Available for rent</p>
                </div>
            </div>
        </div>
        <!-- Recent Rentals | This Week -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Recent Rentals | This Week</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer</th>
                                <th>Car</th>
                                <th>Rent Start</th>
                                <th>Rent End</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentRentals as $rental)
                            <tr>
                                <td>#{{ $rental->id }}</td>
                                <td>{{ $rental->user->name }}</td>
                                <td>{{ $rental->car->brand->name }} {{ $rental->car->model }}</td>
                                <td>{{ $rental->rent_start }}</td>
                                <td>{{ $rental->rent_end }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Top Cars | This Month -->

    </div>
</div>
@endsection