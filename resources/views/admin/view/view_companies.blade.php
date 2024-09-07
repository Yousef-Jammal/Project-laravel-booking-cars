@extends('admin.master')
@section('pageName', 'View company')

@section('admin_style')
<style>
        body {
            background-color: #f7f9fc;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .my_div {
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
        h1{
            margin-bottom: 20px !important;
            font-size: 24px !important;
            color: #333 !important;
        }
        .my_div hr{
            background-color: black;
            height: 1px !important;
            border: none !important;
            margin: 0 !important;
            padding: 0 !important;

        }
    </style>
@endsection
@section('content')
<h1>View company</h1>
<div class="my_div">
    <label for="user_id">Owner:</label>
    <p id="user_id">{{ $compnaies->user->name }}</p><hr style="line-height: 1.6!important;">


    <label for="location">Location:</label>
    <p id="location">{{ $compnaies->location }}</p><hr style="line-height: 1.6!important;">


    <label for="description">Description:</label>
    <p id="description">{{ $compnaies->description }}</p><hr style="line-height: 1.6!important;">


    <label for="rating">Rating:</label>
    <p id="rating">{{ $compnaies->rating }}</p><hr style="line-height: 1.6!important;">

    <label for="num_of_ratings">Number of ratings:</label>
    <p id="num_of_ratings">{{ $compnaies->num_of_ratings }}</p><hr style="line-height: 1.6!important;">

    <a class="my_a_form" href="{{ route('admin_companies') }}">Back</a>
</div>

@endsection
