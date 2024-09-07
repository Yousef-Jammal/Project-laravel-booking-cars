@extends('admin.master')
@section('pageName', 'Creatr car')

@section('admin_style')
<style>
        body {
            background-color: #f7f9fc;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1{
            margin-bottom: 20px !important;
            font-size: 24px !important;
            color: #333 !important;
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
        form
        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
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

        #preview {
            display: none; /* Hidden by default */
            max-width: 40px;
        }
    </style>
@endsection

@section('content')
<h1>Create car</h1>
<form action="{{ route('admin_store_car') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="user_id">User Name:</label>
    <select name="user_id">
        <option value="" disabled selected>Please Select a User</option>
        @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>

    <label for="availability">Availability:</label>
    <select id="availability" name="availability" required>
        <option value="available">Available</option>
        <option value="not_available">Not Available</option>
    </select>

    <label for="brand_id">Brand:</label>
    <select name="brand_id">
        <option value="" disabled selected>Please Select a Brand</option>
        @foreach ($brands as $brand)
        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
        @endforeach
    </select>

    <label for="model">Model:</label>
    <input type="text" id="model" name="model" required><br>


    <label for="body">Body:</label>
        <select id="body" name="body" required>
            <option value="Sedan">Sedan</option>
            <option value="Coupe">Coupe</option>
            <option value="Hatchback">Hatchback</option>
            <option value="SUV">SUV</option>
            <option value="Convertible">Convertible</option>
            <option value="Wagon">Wagon</option>
            <option value="Pickup Truck">Pickup Truck</option>
            <option value="Minivan">Minivan</option>
            <option value="Crossover">Crossover</option>
            <option value="Roadster">Roadster</option>
            <option value="Van">Van</option>
            <option value="Sports Car">Sports Car</option>
            <option value="Luxury Car">Luxury Car</option>
            <option value="Off-Road Vehicle">Off-Road Vehicle</option>
            <option value="Compact">Compact</option>
        </select>


        <label for="ac">AC:</label>
        <select id="ac" name="ac" required>
            <option value="yes">yes</option>
            <option value="no">no</option>
        </select>

        <label for="door">Door:</label>
        <select id="door" name="door" required>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>

        <label for="mileage">Mileage:</label>
        <input type="number" id="mileage" name="mileage" required><br>

        <label for="fuel_type">Fuel Type:</label>
        <select id="fuel_type" name="fuel_type" required>
            <option value="petrol">Petrol</option>
            <option value="diesel">Diesel</option>
            <option value="electric">Electric</option>
            <option value="hybrid">Hybrid</option>
        </select>

        <label for="make">Make:</label>
        <select id="make" name="make">
            <option value="Toyota">Toyota</option>
            <option value="Honda">Honda</option>
            <option value="Ford">Ford</option>
            <option value="Chevrolet">Chevrolet</option>
            <option value="Tesla">Tesla</option>
            <option value="BMW">BMW</option>
            <option value="Mercedes-Benz">Mercedes-Benz</option>
            <option value="Audi">Audi</option>
            <option value="Nissan">Nissan</option>
            <option value="Hyundai">Hyundai</option>
            <option value="Kia">Kia</option>
            <option value="Volkswagen">Volkswagen</option>
            <option value="Subaru">Subaru</option>
            <option value="Mazda">Mazda</option>
            <option value="Lexus">Lexus</option>
            <option value="Jeep">Jeep</option>
            <option value="Porsche">Porsche</option>
            <option value="Jaguar">Jaguar</option>
            <option value="Land Rover">Land Rover</option>
            <option value="Volvo">Volvo</option>
        </select>

        <label for="transmission">Transmission:</label>
        <select id="transmission" name="transmission">
            <option value="Automatic">Automatic</option>
            <option value="Manual">Manual</option>
            <option value="Semi-Automatic">Semi-Automatic</option>
            <option value="CVT">CVT (Continuously Variable Transmission)</option>
            <option value="Dual-Clutch Transmission">Dual-Clutch Transmission (DCT)</option>
            <option value="Tiptronic">Tiptronic</option>
            <option value="Electric Drive">Electric Drive</option>
            <option value="Automated Manual Transmission">Automated Manual Transmission (AMT)</option>
            <option value="Hybrid Transmission">Hybrid Transmission</option>
            <option value="Direct Shift Gearbox">Direct Shift Gearbox (DSG)</option>
        </select>


        <label for="drivetrian">Drivetrian:</label>
        <input type="text" id="drivetrian" name="drivetrian" required><br>

        <label for="vin">VIN:</label>
        <input type="text" id="vin" name="vin" required><br>

        <label for="brake">Brake:</label>
        <select id="brake" name="brake" required>
            <option value="Disc">Disc</option>
            <option value="Drum">Drum</option>
            <option value="ABS (Anti-lock Braking System)">ABS (Anti-lock Braking System)</option>
            <option value="Carbon Ceramic">Carbon Ceramic</option>
            <option value="Hydraulic">Hydraulic</option>
            <option value="Electric">Electric</option>
            <option value="Air Brake">Air Brake</option>
            <option value="Regenerative">Regenerative</option>
            <option value="Magnetic">Magnetic</option>
            <option value="Vacuum">Vacuum</option>
        </select>


        <label for="year">Year:</label>
        <select id="year" name="year" required>
            @for ($year = 1990; $year <= 2025; $year++)
            <option value="{{ $year }}">{{ $year }}</option>
            @endfor
        </select>

        <label for="engine_hp">Engine HP:</label>
        <input type="number" id="engine_hp" name="engine_hp" required><br>


        <input value="0" type="hidden" id="rating" name="rating">
        <input value="0" type="hidden" id="num_of_ratings" name="num_of_ratings" >
        <input value="accepted" type="hidden" id="status" name="status" >

        <label for="price_per_day">Price per Day:</label>
        <input type="number" step="0.01" id="price_per_day" name="price_per_day" required><br>

        @php
            $dateNow = date('y-m-d');
            @endphp
        <input type="hidden" value="{{ $dateNow }}" name="date_created">


        <div class="form-group">
            <label for="image" style="background: #bcbcbc;
                                        width: 120px;
                                        height: 33px;
                                        border-radius: 27px;
                                        display: flex;
                                        justify-content: center;
                                        cursor: pointer;
                                        align-items: center;
            ">Add Image</label>

            <input style="visibility: hidden;" type="file" id="image" name="file" onchange="previewImage(event)">
            <img id="preview" src="#" alt="Image Preview">
        </div>

        <button class="my_btn_form" type="submit">Create</button>
        <a class="my_a_form" href="{{ route('admin_cars') }}">Back</a>
    </form>
    @endsection



    @section('admin_scripts')
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const preview = document.getElementById('preview');
                preview.src = reader.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(event.target.files[0]);
        }

        window.onload = function() {
            const preview = document.getElementById('preview');
            if (!preview.src || preview.src === '#') {
                preview.style.display = 'none';
            }
        }
        </script>
@endsection
