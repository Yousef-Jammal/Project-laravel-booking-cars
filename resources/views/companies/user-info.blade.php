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
    <li class="breadcrumb-item active" aria-current="page">{{ $company->user->name }} User Information
    </li>
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
                <a class="nav-link {{ request()->is('company/availability_center') ? 'active' : '' }}" href="{{ route('company.availabilityCenter') }}">Availability Control Center</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('company/user-info') ? 'active' : '' }}" href="{{ route('company.user-info') }}">Edit Profile</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Log-out</a>
                </li> --}}
            </ul>
        </div>
</div>

<div class="container mt-5">
    <h2>User Information</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('company.user-info.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Profile Image</label>
            <div class="mb-3">
                <img src="{{url("/user_images/".$user->image) }}" alt="Profile Image" class="img-thumbnail" width="150">
            </div>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <div class="form-group mt-3">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $company->location }}">
        </div>

        <div class="form-group mt-3">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
        </div>

        <div class="form-group mt-3">
            <label for="description">About</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ $company->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Save Changes</button>
    </form>
</div>
<br>
<br>

@endsection
