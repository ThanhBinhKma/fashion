<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('dashboard/material-dashboard.css?v=2.1.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('dashboard/demo.css')}}" rel="stylesheet" />
   @yield('style')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('dashboard/sidebar-1.jpg')}}">
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.product')}}">
              <i class="material-icons"></i>
              <p>Product</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.color')}}">
              <i class="fas fa-palette"></i>
              <p>Color</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.bill')}}">
              <p>Bill</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.logout')}}">
              <p>Log out</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('admin.logout')}}">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
             @yield('content')
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="#">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="#">
                  About Us
                </a>
              </li>
              <li>
                <a href="#">
                  Blog
                </a>
              </li>
              <li>
                <a href="#">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="{{asset('dashboard/jquery.min.js')}}"></script>
  <script src="{{asset('dashboard/popper.min.js')}}"></script>
  <script src="{{asset('dashboard/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{asset('dashboard/jasny-bootstrap.min.js')}}"></script>
  <script src="{{asset('dashboard/material-dashboard.js?v=2.1.1')}}" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('dashboard/demo.js')}}"></script>
  @yield('script')
</body>

</html>
