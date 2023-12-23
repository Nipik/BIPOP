<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/errors/404.css') }}">
    <title>404 PAGE NOT FOUND</title>
</head>
<body>
    <section>
      <div class="container">
        <div class="text">
          <h1>Page Not Found</h1>
          <p>We can't seem to find the page you're looking for. Please check the URL for any typos.</p>
          <div class="input-box">
            <input type="text" placeholder="Search...">
            <button><i class="fa-solid fa-search"></i></button>
          </div>
          <ul class="menu">
            <li><a href="{{ route('home') }}">Go to Homepage</a></li>
          </ul>
        </div>
        <div><img class="image" src="https://omjsblog.files.wordpress.com/2023/07/errorimg.png" alt=""></div>
      </div>
      </div>
    </section>
</body>
</html>
