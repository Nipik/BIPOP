<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
</head>
<body>
  <div class="wrapper">
    <form method="POST" action="{{ route('login.login') }}">
      @csrf
      <h2>Login</h2>
      <div class="input-field">
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        <label for="email">{{ __('E-Mail Address') }}</label>
      </div>
      <div class="input-field">
        <input id="password" type="password" name="password" required autocomplete="current-password">
        <label for="password">{{ __('Password') }}</label>
        <br>
      </div>
      @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
        @endif
      <button type="submit">{{ __('Login') }}</button>
      <br>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
      <div class="register">
        <p>Don't have an account? <a href="{{ route('inscription') }}">Register</a></p>
        <a href="{{route('home')}}" class="home">Home</a>
      </div>
    </form>
  </div>
</body>
</html>
