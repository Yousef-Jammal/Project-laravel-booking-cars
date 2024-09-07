@extends('admin.master')
@section('pageName', 'Users Mangment')

@section('admin_style')
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}
.container {
    /* max-width: 600px; */
    margin: 0 auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 600px !important;
    height: 400px !important;
}
h1 {
    margin-bottom: 20px !important;
    font-size: 24px !important;
    color: #333 !important;
}
.form-group {
    margin-bottom: 15px !important;
}
.form-group label {
    display: block !important;
    font-weight: bold !important;
    color: #333 !important;
    margin-bottom: 5px !important;
}
.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="tel"],
.form-group input[type="password"],
.form-group input[type="file"] {
    width: 90% !important;
    padding: 8px !important;
    border: 1px solid #ddd !important;
    border-radius: 4px !important;
    background-color: #f4f4f4 !important;
    color: #333 !important;
}
.form-group img {
    max-width: 100px !important;
    margin-top: 10px !important;
    display: none !important;
    border-radius: 4px !important;
}
.submit-button,
.back-button {
    background-color: #ffa736 !important;
    color: white !important;
    padding: 10px 20px !important;
    text-decoration: none !important;
    border-radius: 4px !important;
    cursor: pointer !important;
    display: inline-block !important;
    margin: 20px 10px 0 !important;
    border: none !important;
    text-align: center !important;
}
.submit-button:hover,
.back-button:hover {
    background-color: #f99c23 !important;
}
.button-container {
    display: flex !important;
    /* justify-content: space-between !important; */
}
form{
    background-color: white;
    padding: 12px;
    border-radius: 12px;
    box-shadow: 1px 1px 5px #0000001a;
}
</style>
@endsection

@section('content')
    {{-- <div class="my_container" > --}}
        <h1>Create User</h1>
        <form action="{{ route('admin_store_user') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)">
                <img id="preview" src="#" alt="Image Preview">
            </div>
            <div class="button-container">
                <button type="submit" class="submit-button">Create User</button>
                <a href="{{ route('admin_users') }}" class="back-button">Back</a>
            </div>
        </form>
    {{-- </div> --}}
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
</script>
@endsection

