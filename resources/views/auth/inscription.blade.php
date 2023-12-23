<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
</head>
<body>
    <div class="wrapper">
      <form method="POST" action="{{ route('inscription.store') }}" enctype="multipart/form-data">
            @csrf
            <h2>Inscription</h2>

            <div class="input-field">
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus aria-labelledby="name">
                <label for="name">{{ __('Name') }}</label>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-field">
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus aria-labelledby="email">
                <label for="email">{{ __('E-Mail Address') }}</label>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-field">
              <input id="password" type="password" name="password" required autocomplete="current-password" aria-labelledby="password">
                <label for="password">{{ __('Password') }}</label>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-field">
                <input id="password_confirmation" type="password" name="password_confirmation" required aria-labelledby="password_confirmation">
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-field">
              <label for="image" class="image-label">{{ __('Profile Image') }}</label>
              <input id="image" type="file" name="image" accept="image/*" aria-labelledby="image">
              @error('image')
                 <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>   
          @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
          @endif       
            <button type="submit">{{ __('Inscription') }}</button>
            <a href="{{route('home')}}" class="home">Home</a>
        </form>
    </div>
</body>
</html>
