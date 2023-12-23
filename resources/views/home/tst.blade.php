<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BIPOP</title>
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <div class="menu">
        <div class="logo">
          <a href="{{ route('home') }}">BIPOP</a>
        </div>
        <ul>
          <li><a href="{{ route('inscription') }}">Inscription</a></li>
          <li><a href="{{ route('login') }}">Connexion</a></li>
          <li><a href="{{ route('admin.login') }}">Admin</a></li>
          <li><a href="{{ route('test') }}">Contact</a></li>
          <li><a href="#">Feedback</a></li>
        </ul>
      </div>
    </nav>
    <div class="img"></div>
    <div class="center">
      <div class="title">Send messages </div>
      <div class="sub_title">With BIPOP</div>
      <div class="btns">
        <button>Learn More</button>
        <button><a href="{{ route('inscription') }} " class="register">Inscription</a></button>
      </div>
    </div>
      @if(session('error'))
      <div class="alert alert-danger">
          {{ session('error') }}
      </div>
  @endif
  <br>
  @if(session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
  @endif
  </body>
</html>
