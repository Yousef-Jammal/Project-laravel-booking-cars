@extends('admin.master')
@section('pageName', 'View car')

@section('admin_style')
        <style>
        body {
            background-color: #f7f9fc;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        form {
            width: 90%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* max-width: 600px;
            margin: auto; */
            width: 99% !important;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }


        .my_btn_form,
        .my_a_form {
            display: inline-block;
            text-align: center;
            padding: 10px 20px;
            margin-top: 20px;
            margin-right: 10px;
            border-radius: 4px;
            text-decoration: none;
            color: #fff;
            background-color: #ffa736 !important;
            border: none;
            transition: background-color 0.3s ease;
        }


        .my_btn_form:hover,
        .my_a_form:hover {
            background-color: #f99c23 !important;
            color: #fff;
        }
        h1{
            margin-bottom: 20px !important;
            font-size: 24px !important;
            color: #333 !important;
        }
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            font-family: Arial, sans-serif;
            font-size: 16px;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;base64,...'); /* Custom arrow icon */
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 12px;
        }
        form p{
            margin-left: 20px;
            font-weight: 600;
            color: black;
        }
        .car-details-container {
        display: flex;
        flex-direction: column;
        gap: 10px;
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        max-width: 600px;
        margin: auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .detail-item {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #ddd;
    }

    label {
        font-weight: bold;
        color: #333;
    }

    p {
        margin: 0;
        color: #555;
    }

    a.my_a_form {
        display: inline-block;
        padding: 10px 15px;
        background-color: #ff6b35;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
        margin-top: 20px;
    }

    a.my_a_form:hover {
        background-color: #ff5100;
    }
    </style>
@endsection
@section('content')
<h1>View car</h1>
<div class="car-details-container">
    <div class="detail-item">
        <label for="user_id">User Name:</label>
        <p id="user_id">{{ $car->user->name }}</p>
    </div>

    <div class="detail-item">
        <label for="availability">Availability:</label>
        <p id="availability">{{ $car->availability }}</p>
    </div>

    <div class="detail-item">
        <label for="brand_id">Brand:</label>
        <p id="brand_id">{{ $car->brand->name }}</p>
    </div>

    <div class="detail-item">
        <label for="model">Model:</label>
        <p id="model">{{ $car->model }}</p>
    </div>

    <div class="detail-item">
        <label for="body">Body:</label>
        <p id="body">{{ $car->body }}</p>
    </div>

    <div class="detail-item">
        <label for="ac">AC:</label>
        <p id="ac">{{ $car->ac }}</p>
    </div>

    <div class="detail-item">
        <label for="door">Door:</label>
        <p id="door">{{ $car->door }}</p>
    </div>

    <div class="detail-item">
        <label for="mileage">Mileage:</label>
        <p id="mileage">{{ $car->mileage }}</p>
    </div>

    <div class="detail-item">
        <label for="fuel_type">Fuel Type:</label>
        <p id="fuel_type">{{ $car->fuel_type }}</p>
    </div>

    <div class="detail-item">
        <label for="make">Make:</label>
        <p id="make">{{ $car->make }}</p>
    </div>

    <div class="detail-item">
        <label for="transmission">Transmission:</label>
        <p id="transmission">{{ $car->transmission }}</p>
    </div>

    <div class="detail-item">
        <label for="drivetrain">Drivetrain:</label>
        <p id="drivetrain">{{ $car->drivetrain }}</p>
    </div>

    <div class="detail-item">
        <label for="vin">VIN:</label>
        <p id="vin">{{ $car->vin }}</p>
    </div>

    <div class="detail-item">
        <label for="brake">Brake:</label>
        <p id="brake">{{ $car->brake }}</p>
    </div>

    <div class="detail-item">
        <label for="year">Year:</label>
        <p id="year">{{ $car->year }}</p>
    </div>

    <div class="detail-item">
        <label for="engine_hp">Engine HP:</label>
        <p id="engine_hp">{{ $car->engine_hp }}</p>
    </div>

    <div class="detail-item">
        <label for="rating">Rating:</label>
        <p id="rating">{{ $car->rating }}</p>
    </div>

    <div class="detail-item">
        <label for="num_of_ratings">Number of Ratings:</label>
        <p id="num_of_ratings">{{ $car->num_of_ratings }}</p>
    </div>

    <div class="detail-item">
        <label for="price_per_day">Price per Day:</label>
        <p id="price_per_day">{{ $car->price_per_day }}</p>
    </div>

    <a class="my_a_form" href="{{ route('admin_cars') }}">Back</a>
</div>


@endsection
