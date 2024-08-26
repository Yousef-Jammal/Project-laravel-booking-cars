<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('admin_update_user', $user->id)}}" method="post">
        @csrf
        @method('PUT')
        name:<input type="text" name="name" value="{{$user->name}}">
        email:<input type="email" name="email" value="{{$user->email}}">
        phone:<input type="number" name="phone" value="{{$user->phone}}">
        password:<input type="text" name="password" value="{{$user->password}}">
        image:<input type="file" name="image" value="{{$user->image}}">
        <input type="submit" >
    </form>
</body>
</html>
