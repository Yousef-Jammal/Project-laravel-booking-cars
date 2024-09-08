@extends('masterPage')
@section('content')

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title">Become a Lessor</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Become a Lessor</li>
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
            <li class="nav-item">
                <a class="btn btn-secondary" href="{{ route('user.become-lessor') }}">Have a Car? Create a company</a>
            </li>
        </ul>
    </div>
</div>

<div class="container mt-5">
    <h2>Become a Lessor</h2>


    @php
        $id =Auth::user()->id ;
    @endphp
<form action="{{ route('user.submit-become-lessor', $id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Company Description -->
    <div class="form-group">
        <label for="company_description">Company Description:</label>
        <textarea class="form-control" id="company_description" name="company_description" rows="3" required></textarea>
    </div>

    <!-- Company Location -->
    <div class="form-group mt-3">
        <label for="company_location">Company Location:</label>
        <input type="text" class="form-control" id="company_location" name="company_location" required>
    </div>

    <!-- Description About You -->
    <div class="form-group mt-3">
        <label for="description">Description About You:</label>
        <textarea class="form-control" id="description" name="user_description" rows="3" required></textarea>
    </div>

    <!-- User ID Image with Preview -->
    <div class="form-group mt-3">
        <label for="personal_id_photo">Personal ID Photo:</label>
        <input type="file" class="form-control-file" id="personal_id_photo" name="personal_id_photo" required>
        <!-- Image Preview -->
        <div class="mt-3">
            <img id="image_preview" src="#" alt="Your Image" style="display: none; max-width: 200px;">
        </div>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>

</div>
<br>
<br>

@endsection

@section('script')
<script>
    document.getElementById('personal_id_photo').addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('image_preview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
@endsection
