<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TUPOP GAMING</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <script defer src="script.js"></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <div class="navbar-brand">
        <a class="navbar-brand" href="#"><i class="bi bi-globe2"></i></a>
        <a class="navbar-brand" href="#"><strong>TUPOP GAMING</strong></a>
    </div>
    <div class="col-md-6 col-12">
        <input type="text" class="form-control" placeholder="Search">
    </div>
    <div>
      <button class="btn btn-dark me-2">Sign In</button>
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
    <a class="btn btn-dark" href="<?= base_url('event') ?>" role="button">Event</a>
    <a class="btn btn-outline-dark ms-4" href="<?= base_url('#') ?>" role="button"><u>Artikel</u></a>
</section>

<!-- Artikel Cards -->
<div class="container my-4">
  <div class="row g-3">
    <!-- Card 1 -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card bg-light text-dark h-100">
        <img src="<?= base_url('asset/img/Artikel_1.png') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Judul Card</h6>
          <p class="card-text">Deskripsi singkat atau konten lainnya.</p>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-dark btn-sm">Lihat Detail</button>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card bg-light text-dark h-100">
        <img src="<?= base_url('asset/img/Artikel_2.png') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Build Kimmy</h6>
          <p class="card-text">EXPONENTIAL LAB #5</p>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-dark btn-sm">Lihat Detail</button>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card bg-light text-dark h-100">
        <img src="<?= base_url('asset/img/Artikel_3.png') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Build Kimmy</h6>
          <p class="card-text">EXPONENTIAL LAB #5</p>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-dark btn-sm">Lihat Detail</button>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card bg-light text-dark h-100">
        <img src="<?= base_url('asset/img/Artikel_4.png') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Build Kimmy</h6>
          <p class="card-text">EXPONENTIAL LAB #5</p>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-dark btn-sm">Lihat Detail</button>
        </div>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card bg-light text-dark h-100">
        <img src="<?= base_url('asset/img/Artikel_5.png') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Build Kimmy</h6>
          <p class="card-text">EXPONENTIAL LAB #5</p>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-dark btn-sm">Lihat Detail</button>
        </div>
      </div>
    </div>

    <!-- Card 6 -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card bg-light text-dark h-100">
        <img src="<?= base_url('asset/img/Artikel_6.png') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Build Kimmy</h6>
          <p class="card-text">EXPONENTIAL LAB #5</p>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-dark btn-sm">Lihat Detail</button>
        </div>
      </div>
    </div>
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
