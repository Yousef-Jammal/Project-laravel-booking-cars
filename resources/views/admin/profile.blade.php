@extends('admin.master')
@section('pageName', 'Profile')
@section('admin_style')
<style>
    /* CSS Styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .profile-container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .profile-header {
        display: flex;
        align-items: center;
        border-bottom: 2px solid #ddd;
        padding-bottom: 20px;
        margin-bottom: 20px;
    }
    .profile-header img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-right: 20px;
        border: 4px solid #ff660079; /* Orange border */
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
        color: #ff6600; /* Orange text for labels */
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
    .profile-content button {
        background-color: #ff6600; /* Orange button */
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }
    .profile-content button:hover {
        background-color: #e65c00; /* Darker orange on hover */
    }
    .profile-content .form-group {
        margin-bottom: 20px;
    }
    .profile-content .form-group input,
    .profile-content .form-group select,
    .profile-content .form-group textarea {
        font-size: 16px;
    }
</style>
@endsection
@section('content')

<div class="profile-container">
    <div class="profile-header">
        <img src="{{ asset('user_images/'. $user->image) }}">
        <div>
            <h1 id="user-name">{{$user->name}}</h1>
            <p id="user-email">{{ $user->email }}</p>
            <p id="user-phone">{{ $user->phone }}</p>
        </div>
    </div>
    <div class="profile-content">
        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea id="bio" rows="4">Lorem ipsum dolor sit amet.</textarea>
        </div>
        <button id="update-button">Update Profile</button>
    </div>
</div>

@endsection

