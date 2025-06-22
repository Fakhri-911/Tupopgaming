<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TUPOP GAMING</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <script defer src="script.js"></script>
</head>
  <style>
    .banner-img {
      width: 100%;
      border-radius: 10px;
    }
    .tournament-card img {
      border-radius: 10px;
    }
    .section-title {
      font-weight: bold;
      margin-top: 30px;
    }
    footer {
      background: #dcdcdc;
      padding: 40px 20px;
    }
    .social-icons i {
      font-size: 24px;
      margin: 0 10px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
  <div class="container">
    <div class="navbar-brand">
        <a class="navbar-brand" href="#"><i class="bi bi-globe2"></i></a>
        <a class="navbar-brand" href="#"><strong>TUPOP GAMING</strong></a>
    </div>
    <div class="col-md-6 col-12">
        <input type="text" class="form-control" placeholder="Search">
    </div>

    <!-- User Greeting and Logout Button -->
    <div>      
      <?php if (session()->get('logged_in')): ?>
        <a href="<?= base_url('auth/logout') ?>" class="btn btn-danger me-2">Logout</a>
      <?php else: ?>
        <a href="<?= base_url('login') ?>" class="btn btn-dark me-2">Sign In</a>
        <a href="<?= base_url('register') ?>" class="btn btn-outline-primary me-2">Register</a>
      <?php endif; ?>
      <img src="https://flagcdn.com/id.svg" alt="ID" width="24" />
    </div>

  </div>
</nav>

<!-- Banner -->
<div id="carouselExampleAutoplaying" class="carousel slide rounded-3 shadow-sm my-4 mx-2" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('asset/img/Banner_1.png') ?>" class="card-img-top" alt="Banner">
    </div>
    <div class="carousel-item">
        <img src="<?= base_url('asset/img/Banner_2.png') ?>" class="card-img-top" alt="Banner">
    </div>
    <div class="carousel-item">
        <img src="<?= base_url('asset/img/Banner_3.png') ?>" class="card-img-top" alt="Banner">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Navigation Buttons -->
<section class="container text-center mb-3 ">
    <a class="btn btn-dark me-4" href="<?= base_url('/') ?>" role="button">Top Up</a>
    <a class="btn btn-outline-dark" href="#" role="button"><u>Event</u></a>
    <a class="btn btn-dark ms-4" href="<?= base_url('artikel') ?>" role="button">Artikel</a>
</section>

<!-- Event Sedang Berlangsung -->
<div class="container my-4">
  <h3 class="fw-bold my-3">Acara sedang berlangsung</h3>
  <div class="card mb-3">
    <img src="<?= base_url('asset/img/Slider.png') ?>" class="card-img-top" style="height: 55vh;" alt="Event">
    <div class="card-body d-flex align-items-center">
        <div class="me-3">
            <img src="<?= base_url('asset/img/BS_Icon.png') ?>" alt="Event Logo" style="width: 80px; border-radius: 10px;">
        </div>
        <div>
            <h5 class="mb-1">Blood Strike - FPS untuk Semua</h5>
            <p class="mb-0 text-muted">NetEase Games</p>
        </div>
    </div>
  </div>
</div>

<!-- Tournament Section -->
<div class="container">
  <h3 class="section-title">Tournament</h3>
  <div class="row row-cols-2 row-cols-md-4 g-3">
    <!-- Card Tournament -->
    <div class="col">
      <div class="card tournament-card">
        <img src="<?= base_url('asset/img/Event_1.png') ?>" class="card-img-top" alt="Tournament 1">
      </div>
    </div>
    <div class="col">
      <div class="card tournament-card">
        <img src="<?= base_url('asset/img/Event_2.png') ?>" class="card-img-top" alt="Tournament 2">
      </div>
    </div>
    <div class="col">
      <div class="card tournament-card">
        <img src="<?= base_url('asset/img/Event_3.png') ?>" class="card-img-top" alt="Tournament 3">
      </div>
    </div>
    <div class="col">
      <div class="card tournament-card">
        <img src="<?= base_url('asset/img/Event_4.png') ?>" class="card-img-top" alt="Tournament 4">
      </div>
    </div>
    <div class="col">
      <div class="card tournament-card">
        <img src="<?= base_url('asset/img/Event_5.png') ?>" class="card-img-top" alt="Tournament 5">
      </div>
    </div>
    <div class="col">
      <div class="card tournament-card">
        <img src="<?= base_url('asset/img/Event_6.png') ?>" class="card-img-top" alt="Tournament 6">
      </div>
    </div>
    <div class="col">
      <div class="card tournament-card">
        <img src="<?= base_url('asset/img/Event_7.png') ?>" class="card-img-top" alt="Tournament 7">
      </div>
    </div>
    <div class="col">
      <div class="card tournament-card">
        <img src="<?= base_url('asset/img/Event_8.png') ?>" class="card-img-top" alt="Tournament 8">
      </div>
    </div>
  </div>
  <div class="text-center mt-5 mb-5">
    <button class="btn btn-dark">Tampilkan lainnya...</button>
  </div>
</div>

<!-- About Section -->
<section class="bg-light py-5">
  <div class="container text-center">
    <h4>TUPOP GAMING</h4>
    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
  </div>
</section>

<!-- Social Media -->
<section class="bg-light pb-5">
  <div class="container text-center">
    <h5>OUR SOCIAL MEDIA</h5>
    <div class="d-flex justify-content-center gap-3 mt-3">
      <i class="bi bi-instagram fs-4"></i>
      <i class="bi bi-facebook fs-4"></i>
      <i class="bi bi-tiktok fs-4"></i>
      <i class="bi bi-youtube fs-4"></i>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
  <small>&copy; 2025 Tupop Gaming. All Right Reserved</small>
</footer>


<!-- Bootstrap & Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
