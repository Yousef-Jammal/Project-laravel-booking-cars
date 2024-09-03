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
        input[type="date"],
        select {
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

        #preview {
            display: none; /* Hidden by default */
            max-width: 40px;
        }
    </style>
</head>

<body>
    <form action="{{ route('admin_store_company') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="user_id">Owner:</label>
        <select name="user_id">
            <option value="" disabled selected>Please Select a User</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required><br>

        <label for="description">Description:</label>
        <input type="text" id="description" name="description" required><br>


        <input value="0" type="hidden" id="rating" name="rating">
        <input value="0" type="hidden" id="num_of_ratings" name="num_of_ratings" >

        <button type="submit">Create</button>
        <a href="{{ route('admin_companies') }}">Back</a>
    </form>


</body>

</html>
