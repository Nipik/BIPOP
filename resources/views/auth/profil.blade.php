<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/auth/profil.css') }}">
    <title>Profile</title>
</head>
<body>
        <div class="main-content">
          <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
              <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{ route('profil') }}">User profile</a>
              <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                <div class="form-group mb-0">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input class="form-control" placeholder="Search" type="text">
                  </div>
                </div>
              </form>
              <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                  <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                      <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('storage/' . $user->image) }}">
                      </span>
                      <div class="media-body ml-2 d-none d-lg-block">
                        <span class="mb-0 text-sm  font-weight-bold"> {{ $user->name }}</span>
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                      <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                </li>
              </ul>
            </div>
          </nav>
          <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url('/images/cover.jpg'); background-size: cover; background-position: center top;">
            <span class="mask bg-gradient-default opacity-8"></span>
            <div class="container-fluid d-flex align-items-center">
              <div class="row">
                <div class="col-lg-7 col-md-10">
                  <h1 class="display-2 text-white">Hello {{ $user->name }}</h1>
                  <p class="text-white mt-0 mb-5">Welcom to BIPOP! this is your profile page you can find here your informations and you can also update it enjoy now!</p>
                  <a href="{{ route('profile.edit') }}" class="btn btn-info">Edit profile</a>
                  <p class="logout">Want to Logout?</p>
                  <a href="{{ route('logout') }}" class="btn-logout">Logout</a>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid mt--7">
            <div class="row">
              <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                  <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                      <div class="card-profile-image">
                          @if($user->image)
                          <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image" class="rounded-circle">
                          @endif
                      </div>
                    </div>
                  </div>
                  <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">                 
                  <div class="card-body">    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <form action="{{ route('profile.destroy') }}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{ route('confirm-delete') }}" class="btn-delete">Delete Account</a>
        </form>
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


