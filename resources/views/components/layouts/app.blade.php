<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gourmet Hub</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/new-favicon.png" rel="icon">
  <link href="assets/img/new-apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Lobster" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="assets/css/custom-style.css" rel="stylesheet">
  @livewireStyles
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="assets/img/logo.png" alt="Gourmet Hub" class="logo"> Gourmet Hub
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#menu" class="nav-link">Menu</a>
          </li>
          <li class="nav-item">
            <a href="/" wire:navigate class="nav-link">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero-section text-center text-white d-flex align-items-center" style="background: url('assets/img/hero-bg.jpg') no-repeat center center; background-size: cover;">
    <div class="container">
      <h1 class="display-4">Welcome to Gourmet Hub</h1>
      <p class="lead">Savor the taste of excellence, crafted with passion.</p>
      <a href="#menu" class="btn btn-primary mt-3">Explore Menu</a>
      <a href="#reserve" class="btn btn-secondary mt-3">Book a Table</a>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container-fluid">
    <div class="row">
        {{$slot}}
    </div>
  </div>

  <!-- Footer Section -->
  <footer class="bg-dark text-light pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4">
          <h3>Gourmet Hub</h3>
          <p>
            123 Culinary Street<br>
            Food City, FL 12345<br><br>
            <strong>Phone:</strong> +1 123 456 7890<br>
            <strong>Email:</strong> contact@gourmethub.com
          </p>
        </div>
        <div class="col-lg-4 mb-4">
          <h4>Quick Links</h4>
          <ul class="list-unstyled">
            <li><a href="#menu" class="text-light">Menu</a></li>
            <li><a href="#reserve" class="text-light">Reserve</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h4>Subscribe</h4>
          <p>Join our newsletter for the latest updates and offers.</p>
          <form>
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Your Email">
              <button class="btn btn-primary" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
      <div class="text-center py-4">
        &copy; 2024 Gourmet Hub. All Rights Reserved.
      </div>
    </div>
  </footer>

  <!-- JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/custom.js"></script>
  @livewireScripts
</body>

</html>
