<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced File Upload Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            max-width: 600px;
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

        button,
        a {
            display: inline-block;
            text-align: center;
            padding: 10px 20px;
            margin-top: 20px;
            margin-right: 10px;
            border-radius: 4px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s ease;
        }

        button:hover,
        a:hover {
            background-color: #0056b3;
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
    </style>
</head>

<body>
    <form action="{{ route('admin_store_car') }}" method="POST">
        @csrf

        <label for="user_id">User Name:</label>
        <select name="user_id" >
            <option value="" disabled selected>Please Select a User</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <label for="availability">Availability:</label>
        <input type="text" id="availability" name="availability"  required><br>

        <label for="brand_id">Brand ID:</label>
        <select name="brand_id" >
            <option value="" disabled selected>Please Select a Brand</option>
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required><br>

        <label for="body">Body:</label>
        <input type="text" id="body" name="body" required><br>

        <label for="ac">AC:</label>
        <input type="text" id="ac" name="ac" required><br>

        <label for="door">Door:</label>
        <input type="number" id="door" name="door" required><br>

        <label for="mileage">Mileage:</label>
        <input type="number" id="mileage" name="mileage" required><br>

        <label for="fuel_type">Fuel Type:</label>
        <input type="text" id="fuel_type" name="fuel_type" required><br>

        <label for="make">Make:</label>
        <input type="text" id="make" name="make" required><br>

        <label for="transmission">Transmission:</label>
        <input type="text" id="transmission" name="transmission" required><br>

        <label for="drivetrain">Drivetrain:</label>
        <input type="text" id="drivetrain" name="drivetrian" required><br>

        <label for="vin">VIN:</label>
        <input type="text" id="vin" name="vin" required><br>

        <label for="brake">Brake:</label>
        <input type="text" id="brake" name="brake" required><br>

        <label for="year">Year:</label>
        <input type="number" id="year" name="year" required><br>

        <label for="engine_hp">Engine HP:</label>
        <input type="number" id="engine_hp" name="engine_hp" required><br>

        <label for="rating">Rating:</label>
        <input type="number" step="0.01" id="rating" name="rating" required><br>

        <label for="num_of_ratings">Number of Ratings:</label>
        <input type="number" id="num_of_ratings" name="num_of_ratings" required><br>

        <label for="price_per_day">Price per Day:</label>
        <input type="number" step="0.01" id="price_per_day" name="price_per_day" required><br>

        <label for="date_created">Date Created:</label>
        <input type="date" id="date_created" name="date_created" required><br>

        <button type="submit">Create</button>
        <a href="{{ route('admin_cars') }}">Back</a>
    </form>
</body>

</html>
