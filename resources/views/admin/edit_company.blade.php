<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('admin_update_company', $company->id)}}" method="post">
        @csrf
        @method('PUT')
        {{-- name:<input type="text" name="name" value="{{$company->user->name}}"> --}}
        number:<input type="number" name="user_id" value="{{$company->user_id}}">
        location:<input type="text" name="email" value="{{$company->location}}">
        description:<input type="text" name="phone" value="{{$company->description}}">
        {{-- image:<input type="file" name="image" value="{{$company->image}}"> --}}
        <input type="submit" >
    </form>
</body>
</html>
