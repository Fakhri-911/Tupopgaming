<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #d3d3d3;
      font-family: 'Inter', sans-serif;
    }

    .login-container {
      max-width: 420px;
      margin: 50px auto;
      background-color: #fff;
      padding: 2rem;
      border-radius: 12px;
      position: relative;
    }

    .back-arrow {
      position: absolute;
      top: 15px;
      left: 15px;
      font-size: 1.2rem;
      cursor: pointer;
    }

    .icon {
      font-size: 50px;
      display: block;
      margin-bottom: 10px;
    }

    .form-label {
      font-weight: 500;
    }

    .divider {
      display: flex;
      align-items: center;
      text-align: center;
      margin: 1.5rem 0;
    }

    .divider::before,
    .divider::after {
      content: '';
      flex: 1;
      height: 1px;
      background: #000;
    }

    .divider span {
      margin: 0 10px;
      font-weight: 500;
    }

    .google-btn {
      background: #fff;
      border: 1px solid #ccc;
      width: 100%;
    }

    .footer-text {
      font-size: 0.75rem;
      text-align: center;
      margin-top: 1.5rem;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-container shadow">
      <a href="<?= base_url('/') ?>"><span class="back-arrow" style="color: black">&larr;</span></a>
      <div class="text-center">
        <div class="icon">&#127760;</div>
        <h3 class="fw-bold">Login</h3>
        <p class="text-muted">Masuk dengan akun yang telah Kamu daftarkan</p>
      </div>

      <form action="<?= base_url('/login/auth') ?>" method="post">
        
        <?php if ($errors = session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error): ?>
                    <?= $error ?><br>
                <?php endforeach ?>
            </div>
        <?php elseif ($error = session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Email" name="email" required autofocus>
        </div>
        <div class="mb-2">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="ingatSaya">
            <label class="form-check-label" for="ingatSaya">Ingat Saya</label>
          </div>
          <a href="<?= base_url('/forget') ?>" class="text-decoration-none text-primary small">Lupa Kata Sandi?</a>
        </div>

        <button type="submit" class="btn btn-dark w-100 mb-2">Login</button>

        <p class="text-center small">Belum Punya Akun? <a href="<?= base_url('/register') ?>" class="text-primary">Daftar Sekarang</a></p>

        <div class="divider"><span>Atau</span></div>

        <button type="button" class="btn google-btn d-flex align-items-center justify-content-center">
          <img src="https://img.icons8.com/color/16/000000/google-logo.png" class="me-2" />
          Lanjutkan dengan Google
        </button>
      </form>

      <p class="footer-text mt-4">©2025 Tugas Besar IMK. All Rights Reserved</p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
