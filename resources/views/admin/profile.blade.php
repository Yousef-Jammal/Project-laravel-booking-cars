@extends('admin.master')
@section('pageName', 'Profile')
@section('admin_style')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .profile-container {
        max-width: 700px;
        margin: 20px auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .profile-header {
        display: flex;
        align-items: center;
        justify-content: center;
        border-bottom: 2px solid #ddd;
        padding-bottom: 20px;
        margin-bottom: 20px;
    }
    .profile-header img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-right: 20px;
        border: 4px solid #ff660079;
    }
    .profile-header h1 {
        margin: 0;
        font-size: 24px;
        color: #333;
        font-weight: bold;
    }
    .profile-header p {
        margin: 5px 0;
        color: #777;
    }
    .profile-content {
        font-size: 16px;
        color: #333;
    }
    .profile-content label {
        font-weight: bold;
        color: #ff6600;
    }
    .profile-content input, .profile-content select, .profile-content textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0 20px 0;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .profile-content textarea {
        resize: vertical;
    }
    .profile-content
    button,
    .my_a {
        background-color: #ff6600;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        margin-left: 10px;
    }
    .profile-content button:hover, .my_a:hover {
        background-color: #e65c00;
        color: #fff;
    }
    .profile-content .form-group {
        margin-bottom: 20px;
    }
    .profile-content .form-group input,
    .profile-content .form-group select,
    .profile-content .form-group textarea {
        font-size: 16px;
    }
    .my_perent_a_b{
        display: flex;
        /* justify-content: center; */
        align-items: center;
        /* background-color: blue; */
    }
</style>
@endsection
@section('content')

<div class="profile-container">
    <div class="profile-header">
        <img src="{{ asset('user_images/'. $user->image) }}">
    </div>
    <div class="profile-content">
        <div class="form-group">
            <form action="">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ $user->name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="number" id="phone" name="phone" value="{{ $user->phone }}" required>
                </div>

                <div class="form-group my_perent_a_b">
                    <button id="update-button">Update Profile</button>
                    <a class="my_a" href="{{ route('showResetPass', $user->name) }}">Reset Password</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

