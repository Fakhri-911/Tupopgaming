<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tupop Gaming</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f9f9f9;
        }
        .game-card img {
            border-radius: 10px;
        }
        .footer {
            background-color: #222;
            color: #fff;
            padding: 30px 0;
            text-align: center;
        }
        .footer a {
            color: #fff;
            margin: 0 10px;
        }
        .category-buttons .btn {
            margin-right: 5px;
        }
        .banner img {
            width: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
    <a class="navbar-brand " href="#"><i class="fas fa-globe"></i></a>
    <form class="d-flex mx-auto" style="width: 60%;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    </form>
    <button class="navbar-toggler" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    
</nav>

<!-- Banner -->
<div class="container my-3 banner">
    <img src="https://www.pubgmobile.com/images/event/teamup/m/landscape_banner_1.jpg" alt="Banner" class="img-fluid" width="100%" height="">
</div>

<!-- Kategori -->
<div class="container text-center my-3 category-buttons">
    <button class="btn btn-dark">Top Up</button>
    <button class="btn btn-dark">Event</button>
    <button class="btn btn-dark">Artikel</button>
</div>

<!-- Konten Game Cards -->
<div class="container">
    <div class="row g-3">
        <?php
        $games = [
            ['img' => 'https://play-lh.googleusercontent.com/zCSGnBtZk0Lmp1BAbyaZfLktDzHmC6oke67qzz3G1lBegAF2asyt5KzXOJ2PVdHDYkU'],
            ['img' => 'https://via.placeholder.com/150x200?text=PUBG'],
            ['img' => 'https://via.placeholder.com/150x200?text=Honor+of+Kings'],
            ['img' => 'https://via.placeholder.com/150x200?text=Free+Fire'],
            ['img' => 'https://via.placeholder.com/150x200?text=Genshin+Impact'],
            ['img' => 'https://via.placeholder.com/150x200?text=Magic+Chess'],
        ];
        foreach ($games as $game): ?>
            <div class="col-4 text-center game-card">
                <img src="<?= $game['img'] ?>" class="img-fluid" alt="Game Image">
            </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mt-3">
        <button class="btn btn-secondary">Tampilkan lainnya...</button>
    </div>
</div>

<!-- Footer -->
<div class="footer mt-5">
    <div class="container">
        <h5><i class="fas fa-globe"></i> TUPOP GAMING</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="social-icons mb-2">
            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="#"><i class="fab fa-tiktok fa-2x"></i></a>
            <a href="#"><i class="fab fa-youtube fa-2x"></i></a>
        </div>
        <p>&copy;2025 Tupas Besar INK. All Rights Reserved</p>
    </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
