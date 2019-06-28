<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Font Awesome Icons -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="css/creative.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/css/foundation.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
<div class="container">
  <div class="col-md-4">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar accordion" id="accordionSidebar">
            <hr>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html"></a>
            <hr class="sidebar-divider my-0">
            <hr>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
              <a class="nav-link" href="/admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Manage</span>
              </a>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a href="/admin"><h6 class="collapse-header">Manage Profile</h6></a>
                </div>
                <div class="bg-white py-2 collapse-inner rounded">
                  <a href="/admin/usermanage"><h6 class="collapse-header">Manage Users</h6>
                </div>
                <div class="bg-white py-2 collapse-inner rounded">
                  <a href="/admin/content"><h6 class="collapse-header">Manage Content</h6>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Create</span>
              </a>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a href="/register"><h6 class="collapse-header">Create User</h6>
                  <a href="/admin/content/create"><h6 class="collapse-header">Create Content</h6>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/gallary">
                <i class="fas fa-fw fa-table"></i>
                <span>Gallary</span></a>
            </li>
  </ul>       
</div>
<div id="adminapp" >
      @include('inc.messages')

        <div class="col-md-12">
            @yield('admincontent')
        </div>
</div>
</div>
</body>
</html>