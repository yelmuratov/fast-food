<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>

  @livewireStyles
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=fallback" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- AdminLTE Theme -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('dist/css/custom-styles.css') }}">
</head> 
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light bg-light border-bottom shadow-sm">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/user-page" wire:navigate class="nav-link">User Page</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/logout" class="nav-link text-danger">Logout</a>
      </li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar bg-dark text-light elevation-4">
    <a href="#" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="Admin Logo" class="brand-image img-circle">
      <span class="brand-text font-weight-light">Food Management</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <li class="nav-item">
            <a href="/users" wire:navigate class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/attendance" wire:navigate class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Attendance</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/waiterboard" wire:navigate class="nav-link">
              <i class="nav-icon fas fa-chalkboard"></i>
              <p>Waiter Board</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/sections" wire:navigate class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Sections</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/workers" wire:navigate class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>Workers</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/categories" wire:navigate class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/foods" wire:navigate class="nav-link">
              <i class="nav-icon fas fa-utensils"></i>
              <p>Foods</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/orders" wire:navigate class="nav-link">
              <i class="nav-icon fas fa-receipt"></i>
              <p>Orders</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    {{$slot}}
  </div>

  <!-- Footer -->
  <footer class="main-footer bg-light text-dark">
    <strong>&copy; 2024 <a href="#">Food Management</a>.</strong> All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>

<!-- Scripts -->
@livewireScripts
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
</body>
</html>
