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
                        <li class="breadcrumb-item active" aria-current="page">{{ $company->user->name }} Rental Control Center/ Edit  </li>
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
    <h2>Edit Car</h2>
    <form action="{{ route('company.updateCar', $car->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Step 1: Car Basic Details -->
        <div class="aseel-card mb-4">
            <div class="aseel-card-header">
                <h3>Step 1: Car Basic Details</h3>
            </div>
            <div class="card-body">
                <div class="aseel-form-group">
                    <label for="brand_id">Brand</label>
                    <select name="brand_id" class="aseel-form-control" id="brand_id" required>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}" {{ $brand->id == $car->brand_id ? 'selected' : '' }}>{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="aseel-form-group">
                    <label for="model">Model</label>
                    <input type="text" name="model" class="aseel-form-control" id="model" value="{{ $car->model }}" required>
                </div>
                <div class="aseel-form-group">
                    <label for="body">Body</label>
                    <input type="text" name="body" class="aseel-form-control" id="body" value="{{ $car->body }}" required>
                </div>
                <div class="aseel-form-group">
                    <label for="ac">AC</label>
                    <select name="ac" class="aseel-form-control" id="ac" required>
                        <option value="Yes" {{ $car->ac == 'Yes' ? 'selected' : '' }}>Yes</option>
                        <option value="No" {{ $car->ac == 'No' ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                <div class="aseel-form-group">
                    <label for="door">Door</label>
                    <input type="number" name="door" class="aseel-form-control" id="door" value="{{ $car->door }}" required>
                </div>
                <div class="aseel-form-group">
                    <label for="mileage">Mileage</label>
                    <input type="number" name="mileage" class="aseel-form-control" id="mileage" value="{{ $car->mileage }}" required>
                </div>
                <div class="aseel-form-group">
                    <label for="fuel_type">Fuel Type</label>
                    <input type="text" name="fuel_type" class="aseel-form-control" id="fuel_type" value="{{ $car->fuel_type }}" required>
                </div>
                <div class="aseel-form-group">
                    <label for="make">Make</label>
                    <input type="text" name="make" class="aseel-form-control" id="make" value="{{ $car->make }}" required>
                </div>
                <div class="aseel-form-group">
                    <label for="transmission">Transmission</label>
                    <input type="text" name="transmission" class="aseel-form-control" id="transmission" value="{{ $car->transmission }}" required>
                </div>
                <div class="aseel-form-group">
                    <label for="drivetrain">Drivetrain</label>
                    <input type="text" name="drivetrain" class="aseel-form-control" id="drivetrain" value="{{ $car->drivetrain }}" required>
                </div>
                <div class="aseel-form-group">
                    <label for="vin">VIN</label>
                    <input type="text" name="vin" class="aseel-form-control" id="vin" value="{{ $car->vin }}" required>
                </div>
                <div class="aseel-form-group">
                    <label for="brake">Brake</label>
                    <input type="text" name="brake" class="aseel-form-control" id="brake" value="{{ $car->brake }}" required>
                </div>
                <div class="aseel-form-group">
                    <label for="year">Year</label>
                    <input type="number" name="year" class="aseel-form-control" id="year" value="{{ $car->year }}" required>
                </div>
                <div class="aseel-form-group">
                    <label for="engine_hp">Engine HP</label>
                    <input type="number" name="engine_hp" class="aseel-form-control" id="engine_hp" value="{{ $car->engine_hp }}" required>
                </div>
                <div class="aseel-form-group">
                    <label for="price_per_day">Price Per Day</label>
                    <input type="number" name="price_per_day" class="aseel-form-control" id="price_per_day" value="{{ $car->price_per_day }}" required>
                </div>
            </div>
        </div>

        <!-- Step 2: Car Features -->
        <div class="aseel-card mb-4">
            <div class="aseel-card-header">
                <h3>Step 2: Car Features</h3>
            </div>
            <div class="card-body">
                <div class="aseel-form-group">
                    <label for="features">Features</label>
                    @foreach($car->features as $feature)
                        <input type="text" class="aseel-form-control mb-2" name="features[]" value="{{ $feature->name }}" required>
                    @endforeach
                    <input type="text" class="aseel-form-control mb-2" name="features[]" placeholder="Add new feature">
                </div>
            </div>
        </div>

        <!-- Step 3: Car Images -->
        <div class="aseel-card mb-4">
            <div class="aseel-card-header">
                <h3>Step 3: Car Images</h3>
            </div>
            <div class="card-body">
                <div class="aseel-form-group">
                    <label for="image">Car Image</label>
                    <input type="file" name="image" class="aseel-form-control" id="image">
                    @if($car->images->isNotEmpty())
                        <img src="{{ asset('storage/' . $car->images->first()->name) }}" class="aseel-img-fluid mt-2" alt="Car Image">
                    @endif
                </div>
            </div>
        </div>

        <button type="submit" class="aseel-btn-primary">Update Car</button>
    </form>
</div>
@endsection
