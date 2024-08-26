<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
        <form action="{{route('admin_update_car', $car->id)}}" method="POST">
        @method('PUT')
        <!-- Include a CSRF token for Laravel -->
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="user_id" class="form-label">User ID</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input value="{{$car->user_id }}" type="number"  class="form-control" id="user_id" name="user_id" placeholder="Enter User ID" required>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="availability" class="form-label">Availability</label>
                <input value="{{$car->availability }}" type="text" class="form-control" id="availability" name="availability" placeholder="Available/Unavailable" maxlength="255" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input value="{{$car->brand }}" type="text" class="form-control" id="brand" name="brand" placeholder="Enter Car Brand" maxlength="255" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="model" class="form-label">Model</label>
                <input value="{{$car->model }}" type="text" class="form-control" id="model" name="model" placeholder="Enter Car Model" maxlength="255" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="body" class="form-label">Body Type</label>
                <input value="{{$car->body }}" type="text" class="form-control" id="body" name="body" placeholder="Enter Body Type" maxlength="255" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="ac" class="form-label">AC</label>
                <input value="{{$car->ac }}" type="text" class="form-control" id="ac" name="ac" placeholder="Yes/No" maxlength="255" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="door" class="form-label">Number of Doors</label>
                <input value="{{$car->door }}" type="number" class="form-control" id="door" name="door" placeholder="Enter Number of Doors" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="mileage" class="form-label">Mileage (KM)</label>
                <input value="{{$car->mileage }}" type="number" class="form-control" id="mileage" name="mileage" placeholder="Enter Mileage" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="fuel_type" class="form-label">Fuel Type</label>
                <input value="{{$car->fuel_type }}" type="text" class="form-control" id="fuel_type" name="fuel_type" placeholder="Enter Fuel Type" maxlength="255" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="make" class="form-label">Make</label>
                <input value="{{$car->make }}" type="text" class="form-control" id="make" name="make" placeholder="Enter Car Make" maxlength="255" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="transmission" class="form-label">Transmission</label>
                <input value="{{$car->transmission }}" type="text" class="form-control" id="transmission" name="transmission" placeholder="Automatic/Manual" maxlength="255" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="drivetrian" class="form-label">Drivetrain</label>
                <input value="{{$car->drivetrian }}" type="text" class="form-control" id="drivetrian" name="drivetrian" placeholder="Enter Drivetrain" maxlength="255" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="vin" class="form-label">VIN</label>
                <input value="{{$car->vin }}" type="text" class="form-control" id="vin" name="vin" placeholder="Enter VIN Number" maxlength="255" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="brake" class="form-label">Brake Type</label>
                <input value="{{$car->brake }}" type="text" class="form-control" id="brake" name="brake" placeholder="Enter Brake Type" maxlength="255" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="year" class="form-label">Year</label>
                <input value="{{$car->year }}" type="number" class="form-control" id="year" name="year" placeholder="Enter Year" min="1900" max="2100" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="engine_hp" class="form-label">Engine HP</label>
                <input value="{{$car->engine_hp }}" type="number" class="form-control" id="engine_hp" name="engine_hp" placeholder="Enter Engine Horsepower" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input value="{{$car->rating }}" type="number" class="form-control" id="rating" name="rating" placeholder="Enter Rating" step="0.01" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="num_of_ratings" class="form-label">Price per Day</label>
                <input value="{{$car->price_per_day }}" type="number" class="form-control" id="num_of_ratings" name="price_per_day" placeholder="Enter Number of Ratings" required>
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
