@extends('masterPage')

@section('content')
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">{{ $user->name }} Dashboard</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $user->name }} Rental History Center</li>
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
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Log-out</a>
                </li> -->
            </ul>
        </div>
    </div>

    <div class="container mt-5">
        <h2>Rental History Center</h2>

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

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Car</th>
                    <th>Owned by</th>
                    <th>Rental Period</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rentals as $rental)
                    <tr>
                        <td>
                            @if($rental->car->images->isNotEmpty())
                                <img src="{{ url('/car_images/' . $rental->car->images->first()->name) }}" class="img-thumbnail" alt="{{ $rental->car->images->first()->name }}" style="max-width: 100px;">
                            @else
                                <img src="{{ asset('storage/default.png') }}" class="img-thumbnail" alt="{{ $rental->car->brand }}" style="max-width: 100px;">
                            @endif
                            {{ $rental->car->brand->name }} {{ $rental->car->model }}
                        </td>
                        <td>{{ $rental->car->user->name }}</td>
                        <td>{{ $rental->rent_start }} to {{ $rental->rent_end }}</td>
                        <td>
                            <span class="badge" style="color: {{ $rental->status->color }}; background-color: #e9ecef; padding: 0.5rem 1rem; border-radius: 0.25rem;">
                                {{ $rental->status->name }}
                            </span>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('company.listing-details', $rental->car_id) }}">Re-book</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<br>
<br>

@endsection
