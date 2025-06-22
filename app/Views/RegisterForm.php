<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register</title>
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
            <h3 class="fw-bold">Register</h3>
        </div>

        <form action="<?= base_url('/register/authregister') ?>" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>      
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>      
            <div class="mb-3">
                <label for="password2" class="form-label">Ketik Ulang Password</label>
                <input type="password" class="form-control" id="password2" name="password2" placeholder="Password" required>
            </div>      
            <button type="submit" class="btn btn-dark w-100 mb-2">Register</button>
        </form>

      <p class="footer-text mt-4">©2025 Tugas Besar IMK. All Rights Reserved</p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
