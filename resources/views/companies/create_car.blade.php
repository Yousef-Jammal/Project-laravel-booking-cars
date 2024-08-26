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



<div class="container">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h4 class="titleCreateAseel">Create a New Car</h4>
                <div class="progress-indicator mb-4">
                    <div class="step-indicator active">
                        <div class="step-number">1</div>
                        <div class="step-title">Car Basic Details</div>
                    </div>
                    <div class="step-indicator">
                        <div class="step-number">2</div>
                        <div class="step-title">Car Features</div>
                    </div>
                    <div class="step-indicator">
                        <div class="step-number">3</div>
                        <div class="step-title">Car Images</div>
                    </div>
                </div>
                <form class="carCreateAseel" method="POST" action="{{ route('company.store_car') }}" enctype="multipart/form-data">
                    @csrf
                    
                
                    <!-- Step 1: Car Basic Details -->
                    <div id="step-1" class="form-step active">
                        <div class="card">
                            <div class="card-header">
                                <h3>Step 1: Car Basic Details</h3>
                            </div>
                            <div class="card-body">
                                <!-- Fields for Step 1 -->
                                <div class="row">
                                    <!-- Fields are grouped in rows of 3 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="brand_id">Brand</label>
                                            <select name="brand_id" id="brand_id" class="form-control" required>
                                                @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="model">Model</label>
                                            <input type="text" name="model" id="model" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="body">Body</label>
                                            <input type="text" name="body" id="body" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- More fields ... -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="ac">AC</label>
                                            <select name="ac" id="ac" class="form-control" required>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="door">Door</label>
                                            <input type="number" name="door" id="door" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="mileage">Mileage</label>
                                            <input type="number" name="mileage" id="mileage" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- More fields ... -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="fuel_type">Fuel Type</label>
                                            <input type="text" name="fuel_type" id="fuel_type" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="make">Make</label>
                                            <input type="text" name="make" id="make" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="transmission">Transmission</label>
                                            <input type="text" name="transmission" id="transmission" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- More fields ... -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="drivetrain">Drivetrain</label>
                                            <input type="text" name="drivetrain" id="drivetrain" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="vin">VIN</label>
                                            <input type="text" name="vin" id="vin" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="brake">Brake</label>
                                            <input type="text" name="brake" id="brake" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- More fields ... -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="year">Year</label>
                                            <input type="number" name="year" id="year" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="engine_hp">Engine HP</label>
                                            <input type="number" name="engine_hp" id="engine_hp" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="price_per_day">Price Per Day</label>
                                            <input type="number" name="price_per_day" id="price_per_day" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button to go to the next step -->
                                <button type="button" class="btn btn-warning next-step">Next</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Step 2: Car Features -->
<div id="step-2" class="form-step">
    <div class="card">
        <div class="card-header">
            <h5>Step 2: Car Features</h5>
        </div>
        <div class="card-body">
            <div id="feature-input-container">
                <!-- Feature Input 1 -->
                <div class="form-group feature-input">
                    <label for="feature1">Feature 1</label>
                    <input type="text" class="form-control" name="features[]" id="feature1" placeholder="Enter a feature">
                </div>

                <!-- Feature Input 2 -->
                <div class="form-group feature-input">
                    <label for="feature2">Feature 2</label>
                    <input type="text" class="form-control" name="features[]" id="feature2" placeholder="Enter a feature">
                </div>

                <!-- Feature Input 3 -->
                <div class="form-group feature-input">
                    <label for="feature3">Feature 3</label>
                    <input type="text" class="form-control" name="features[]" id="feature3" placeholder="Enter a feature">
                </div>
            </div>

            <!-- Button to Add More Features -->
            <button type="button" class="btn btn-secondary" id="add-feature-button">
                <i class="fas fa-plus"></i> Add More Features
            </button>

            <button type="button" class="btn btn-secondary prev-step mt-3">Previous</button>
            <button type="button" class="btn btn-primary next-step mt-3">Next</button>
        </div>
    </div>
</div>

               

 <!-- Step 3: Car Images -->
    <div id="step-3" class="form-step">
    <div class="card">
        <div class="card-header">

        <h5>Step 3: Car Images</h5>
        </div>
        <div class="card-body">

        <div id="image-input-container">
            <!-- Image Input 1 -->
            <div class="form-group image-input">
                <label for="image1">Upload Image 1</label>
                <input type="file" class="form-control" name="images[]" id="image1" onchange="previewFile(this)">
                <div id="preview1" class="preview mt-2"></div>
            </div>

            <!-- Image Input 2 -->
            <div class="form-group image-input">
                <label for="image2">Upload Image 2</label>
                <input type="file" class="form-control" name="images[]" id="image2" onchange="previewFile(this)">
                <div id="preview2" class="preview mt-2"></div>
            </div>

            <!-- Image Input 3 -->
            <div class="form-group image-input">
                <label for="image3">Upload Image 3</label>
                <input type="file" class="form-control" name="images[]" id="image3" onchange="previewFile(this)">
                <div id="preview3" class="preview mt-2"></div>
            </div>
        </div>

        <!-- Button to Add More Images -->
        <button type="button" class="btn btn-secondary" id="add-image-button">
            <i class="fas fa-plus"></i> Add More Images
        </button>

        <button type="submit" class="btn btn-success mt-3">Submit</button>
    
        </div>
    </div>
    </div>

                    <!-- Step 3: Car Images -->
                    {{-- <div id="step-3" class="form-step">
                        <h5>Step 3: Car Images</h5>
                        <div class="form-group">
                            <label for="images">Upload Images</label>
                            <input type="file" class="form-control" name="images[]" id="images" multiple>
                        </div>
                        <button type="button" class="btn btn-secondary prev-step">Previous</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div> --}}
                </form>
                
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const nextSteps = document.querySelectorAll('.next-step');
        const prevSteps = document.querySelectorAll('.prev-step');
        const steps = document.querySelectorAll('.form-step');
        const indicators = document.querySelectorAll('.step-indicator');
    
        let currentStep = 0;
    
        nextSteps.forEach(button => {
            button.addEventListener('click', () => {
                if (currentStep < steps.length - 1) {
                    steps[currentStep].classList.remove('active');
                    indicators[currentStep].classList.remove('active');
                    currentStep++;
                    steps[currentStep].classList.add('active');
                    indicators[currentStep].classList.add('active');
                }
            });
        });
    
        prevSteps.forEach(button => {
            button.addEventListener('click', () => {
                if (currentStep > 0) {
                    steps[currentStep].classList.remove('active');
                    indicators[currentStep].classList.remove('active');
                    currentStep--;
                    steps[currentStep].classList.add('active');
                    indicators[currentStep].classList.add('active');
                }
            });
        });
    });
    
</script>


<script>
    let imageCount = 3;

    function previewFile(input) {
        const previewId = input.id.replace('image', 'preview');
        const preview = document.getElementById(previewId);
        const file = input.files[0];

        // Clear previous preview
        preview.innerHTML = '';

        if (file) {
            const reader = new FileReader();

            reader.onloadend = function() {
                const img = document.createElement('img');
                img.src = reader.result;
                img.style.maxWidth = '100px';
                img.style.marginTop = '10px';
                preview.appendChild(img);
            };

            reader.readAsDataURL(file); // Read the file as a data URL
        }
    }

    document.getElementById('add-image-button').addEventListener('click', function() {
        imageCount++;
        const container = document.getElementById('image-input-container');

        const newInputDiv = document.createElement('div');
        newInputDiv.classList.add('form-group', 'image-input');

        const newLabel = document.createElement('label');
        newLabel.setAttribute('for', 'image' + imageCount);
        newLabel.textContent = 'Upload Image ' + imageCount;

        const newInput = document.createElement('input');
        newInput.type = 'file';
        newInput.classList.add('form-control');
        newInput.name = 'images[]';
        newInput.id = 'image' + imageCount;
        newInput.setAttribute('onchange', 'previewFile(this)');

        const newPreviewDiv = document.createElement('div');
        newPreviewDiv.id = 'preview' + imageCount;
        newPreviewDiv.classList.add('preview', 'mt-2');

        newInputDiv.appendChild(newLabel);
        newInputDiv.appendChild(newInput);
        newInputDiv.appendChild(newPreviewDiv);

        container.appendChild(newInputDiv);
    });
</script>

<script>
    let featureCount = 3;

    document.getElementById('add-feature-button').addEventListener('click', function() {
        featureCount++;
        const container = document.getElementById('feature-input-container');

        const newInputDiv = document.createElement('div');
        newInputDiv.classList.add('form-group', 'feature-input');

        const newLabel = document.createElement('label');
        newLabel.setAttribute('for', 'feature' + featureCount);
        newLabel.textContent = 'Feature ' + featureCount;

        const newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.classList.add('form-control');
        newInput.name = 'features[]';
        newInput.id = 'feature' + featureCount;
        newInput.placeholder = 'Enter a feature';

        newInputDiv.appendChild(newLabel);
        newInputDiv.appendChild(newInput);

        container.appendChild(newInputDiv);
    });
</script>

@endsection
