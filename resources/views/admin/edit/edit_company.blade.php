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
    <form action="{{ route('admin_update_company', $compnaies->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="user_id">Owner:</label>
        <select name="user_id">
            <option value=""  selected>Please Select a User</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}" @if ($user->id == $compnaies->user_id ) selected @endif>{{ $user->name }}</option>
            @endforeach
        </select>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value="{{ $compnaies->location }}" ><br>


        <label for="description">Description:</label>
        <input type="text" id="description" name="description" value="{{ $compnaies->description }}" ><br>

        <label for="rating">Rating:</label>
        <input type="text" value="{{ $compnaies->rating }}" id="rating" name="rating" value="{{ $compnaies->description }}" ><br>

        <label for="num_of_ratings">Number of ratings:</label>
        <input type="text" value="{{ $compnaies->num_of_ratings }}" id="num_of_ratings" name="num_of_ratings" value="{{ $compnaies->description }}" ><br>

        <button type="submit">Update</button>
        <a href="{{ route('admin_companies') }}">Back</a>
    </form>


</body>

</html>
