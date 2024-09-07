@extends('admin.master')
@section('pageName', 'Users Mangment')

@section('admin_style')
    <style>
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

        .user-info {
            margin-bottom: 15px;
        }

        .user-info label {
            display: block;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .user-info p {
            margin: 0;
            padding: 8px;
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #333;
        }

        .user-info img {
            max-width: 100px;
            margin-bottom: 10px;
            display: block;
        }

        .back-button {
            background-color: #5cb85c;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
            display: inline-block;
            margin-top: 20px;
        }

        .back-button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>View User</h1>
        <div class="user-info">
            <label for="name">Name:</label>
            <p id="name">{{ $user->name }}</p>
        </div>
        <div class="user-info">
            <label for="email">Email:</label>
            <p id="email">{{ $user->email }}</p>
        </div>
        <div class="user-info">
            <label for="phone">Phone:</label>
            <p id="phone">{{ $user->phone }}</p>
        </div>
        <div class="user-info">
            <label for="image">Image:</label>
            <img id="image" src="{{ asset('/user_images/' . $user->image) }}" alt="User Image">
        </div>
        <a href="{{ route('admin_users') }}" class="back-button">Back to Users</a>
    </div>
</body>
</html>
