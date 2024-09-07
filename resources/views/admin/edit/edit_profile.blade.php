@extends('admin.master')
@section('pageName', 'Users Mangment')

@section('admin_style')
<style>
        .form-group input[type="file"] {
            padding: 10px;
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group input[type="file"]::file-selector-button {
            background-color: #ffa736;
            color: white;
            border: none;
            padding: 8px 16px;
            margin-right: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group input[type="file"]::file-selector-button:hover {
            background-color: #ff9f22;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group input[type="submit"] {
            background-color: #ffa736;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #ff9e1e;
        }

        .form-group img {
            max-width: 100px;
            margin-bottom: 10px;
            display: block;
        }

        .form-group .toggle-password {
            position: absolute;
            top: 38px;
            right: 20px;
            cursor: pointer;
            user-select: none;
        }
        .my_show_hide{
            color: #686868;
            font-size: 13px;
            height: 22px;
            display: flex;
            align-items: center;
        }
        .my_show_hide:hover{
            color: black
        }
        .form-group_a{
            text-decoration: none;
        }
        .form-group_a:hover{
            color: black;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.259);
        }
        h1{
            margin-bottom: 20px !important;
            font-size: 24px !important;
            color: #333 !important;
        }
    </style>
@endsection

@section('content')
<h1>Edit User</h1>
<div class="container">

    <a href="{{ route('admin_users') }}" class="form-group_a"><- Go to back</a>
    <form action="{{ route('admin_update_user', $user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
        <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <span class="toggle-password my_show_hide" onclick="togglePassword()">Show</span>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <img id="preview-image" src="{{ asset('/user_images' . $user->image) }}" alt="User Image">
                <input type="file" id="image" name="image" onchange="previewImage(event)">
            </div>
            <div class="form-group">
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
@endsection

@section('admin_scripts')
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
                var output = document.getElementById('preview-image');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var passwordToggle = document.querySelector('.toggle-password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggle.textContent = 'Hide';
            } else {
                passwordInput.type = 'password';
                passwordToggle.textContent = 'Show';
            }
        }
        </script>
@endsection
