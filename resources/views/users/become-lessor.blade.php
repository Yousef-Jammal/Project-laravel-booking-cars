{{-- resources/views/users/become-lessor.blade.php --}}
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

<div class="container mt-5">
    <h2>Become a Lessor</h2>


    @php
        $id =Auth::user()->id ;
    @endphp
    <form action="{{ route('user.submit-become-lessor', $id ) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="description">Description about you:</label>
            <input type="text" class="form-control" id="description" name="user_description" required>
        </div>


        <div class="form-group mt-3">
            <label for="car_image">Personal ID photo :</label>
            <input type="file" class="form-control-file" id="car_image" name="Personal_ID_photo" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
</div>
<br>
<br>

@endsection
