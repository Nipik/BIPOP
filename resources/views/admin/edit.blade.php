<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/admin/edit.css') }}">
    <title>Edit</title>
</head>
<body>
    <div class="container">
        <h1>Edit User</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.update', $user) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
            </div>
            <div>
                <label for="image">Image:</label>
                <input type="file" name="image" id="image">
            </div>
            <button type="submit">Update User</button>
        </form>
    </div>  
</body>
</html>
