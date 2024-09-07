@extends('admin.master')
@section('pageName', 'Users Mangment')

@section('admin_style')
<style>
        body {
            background-color: #f7f9fc;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1180px;
            margin: auto;
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
h1{
            margin-bottom: 20px !important;
            font-size: 24px !important;
            color: #333 !important;
        }
</style>
@endsection
@section('content')
<h1>Update car</h1>
    <form action="{{ route('admin_update_car', $car->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="user_id">User Name:</label>
        <select name="user_id" id="">
            <option value="" disabled selected>Please Select a User</option>
            @foreach ($users as $user)
        <option value="{{ $user->id }}" @if ($user->id == $car->user_id) selected @endif>{{ $user->name }}</option>
    @endforeach
</select>

<label for="availability">Availability:</label>
<input type="text" id="availability" name="availability" value="{{ $car->availability }}" required><br>

<label for="brand_id">Brand ID:</label>
<select name="brand_id" id="">
    <option value="" disabled selected>Please Select a Brand</option>
    @foreach ($brands as $brand)
    <option value="{{ $brand->id }}" @if ($brand->id == $car->brand_id) selected @endif>{{ $brand->name }}</option>
    @endforeach
</select>





        <label for="model">Model:</label>
        <input type="text" id="model" name="model" value="{{ $car->model }}" required><br>

        <label for="body">Body:</label>
        <input type="text" id="body" name="body" value="{{ $car->body }}" required><br>

        <label for="ac">AC:</label>
        <input type="text" id="ac" name="ac" value="{{ $car->ac }}" required><br>

        <label for="door">Door:</label>
        <input type="number" id="door" name="door" value="{{ $car->door }}" required><br>

        <label for="mileage">Mileage:</label>
        <input type="number" id="mileage" name="mileage" value="{{ $car->mileage }}" required><br>

        <label for="fuel_type">Fuel Type:</label>
        <input type="text" id="fuel_type" name="fuel_type" value="{{ $car->fuel_type }}" required><br>

        <label for="make">Make:</label>
        <input type="text" id="make" name="make" value="{{ $car->make }}" required><br>

        <label for="transmission">Transmission:</label>
        <input type="text" id="transmission" name="transmission" value="{{ $car->transmission }}" required><br>

        <label for="drivetrain">Drivetrain:</label>
        <input type="text" id="drivetrain" name="drivetrian" value="{{ $car->drivetrian }}" required><br>

        <label for="vin">VIN:</label>
        <input type="text" id="vin" name="vin" value="{{ $car->vin }}" required><br>

        <label for="brake">Brake:</label>
        <input type="text" id="brake" name="brake" value="{{ $car->brake }}" required><br>

        <label for="year">Year:</label>
        <input type="number" id="year" name="year" value="{{ $car->year }}" required><br>

        <label for="engine_hp">Engine HP:</label>
        <input type="number" id="engine_hp" name="engine_hp" value="{{ $car->engine_hp }}" required><br>

        <label for="rating">Rating:</label>
        <input type="number" step="0.01" id="rating" name="rating" value="{{ $car->rating }}" required><br>

        <label for="num_of_ratings">Number of Ratings:</label>
        <input type="number" id="num_of_ratings" name="num_of_ratings" value="{{ $car->num_of_ratings }}" required><br>

        <label for="price_per_day">Price per Day:</label>
        <input type="number" step="0.01" id="price_per_day" name="price_per_day" value="{{ $car->price_per_day }}" required><br>

        <button class="my_btn_form" type="submit">Update</button>
        <a class="my_a_form" href="{{ route('admin_cars') }}">Back</a>
    </form>
@endsection
