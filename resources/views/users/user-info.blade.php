@extends('masterPage')

@section('content')
<style>
.btn-primary {

margin-bottom: 2%;}

..btn-secondary {
    background-color: #ffa633; /* Custom color */
    color: #fff; /* Text color */
    padding: 10px 20px; /* Adjust padding */
    border-radius: 5px; /* Rounded corners */
    text-align: center; /* Center align text */
    font-size: 16px; /* Font size */
    font-weight: bold; /* Bold text */
    text-decoration: none; /* Remove underline */
    display: inline-block; /* Make sure the button displays correctly */
    transition: background-color 0.3s ease; /* Smooth color transition on hover */
}

.btn-secondary:hover {
    background-color: #e69c2d; /* Darker color on hover */
    text-decoration: none; /* Ensure no underline on hover */
}


</style>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title">{{ $user->name }} Cars</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $user->name }} User Information</li>
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
                <a class="btn btn-secondary" href="{{ route('user.become-lessor') }}">Have a Car? Become a Lessor</a>
            </li>
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

    <form action="{{ route('user.user-info.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Profile Image</label>
            <div class="mb-3">
                <img src="{{ url('/user_images/' . $user->image) }}" alt="Profile Image" class="img-thumbnail" width="150">
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
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
        </div>

        <button type="submit" class="btn btn-primary mt-4">Save Changes</button>
    </form>
<br>
    <script>
        (() => {
            'use strict';

            const themeSwitcher = {
                init: function() {
                    this.wrapper = document.getElementById('theme-switcher-wrapper');
                    this.button = document.getElementById('theme-switcher-button');
                    this.theme = this.wrapper.querySelectorAll('[data-theme]');
                    this.themes = ['theme-orange', 'theme-purple', 'theme-green', 'theme-blue'];
                    this.events();
                    this.start();
                },
                events: function() {
                    this.button.addEventListener('click', this.displayed.bind(this), false);
                    this.theme.forEach(theme => theme.addEventListener('click', this.themed.bind(this), false));
                },
                start: function() {
                    let theme = this.themes[Math.floor(Math.random() * this.themes.length)];
                    document.body.classList.add(theme);
                },
                displayed: function() {
                    this.wrapper.classList.toggle('is-open');
                },
                themed: function(e) {
                    this.themes.forEach(theme => document.body.classList.remove(theme));
                    document.body.classList.add(`theme-${e.currentTarget.dataset.theme}`);
                }
            };

            themeSwitcher.init();
        })();
    </script>

</div>

@endsection
