<div class="sidebar p-3" id="sidebar">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="mb-0">GameTopUp</h4>
                <button class="btn btn-sm d-md-none" id="sidebarToggle">
                    <i class="fas fa-times text-white"></i>
                </button>
            </div>
            <hr class="my-2 bg-light">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('admin/dashboard') ?>">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/banners') ?>">
                        <i class="fas fa-image"></i> Banner Management
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/games') ?>">
                        <i class="fas fa-gamepad"></i> Game Management
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/articles') ?>">
                        <i class="fas fa-newspaper"></i> Article Management
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/tournaments') ?>">
                        <i class="fas fa-trophy"></i> Tournament Management
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/transactions') ?>">
                        <i class="fas fa-exchange-alt"></i> Transactions
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/history') ?>">
                        <i class="fas fa-history"></i> History
                    </a>
                </li>
            </ul>
            <div class="mt-auto">
                <hr class="my-2 bg-light">
                <div class="d-flex align-items-center">
                    <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle me-2">
                    <div>
                        <p class="mb-0">Admin User</p>
                        <small class="text-muted">Administrator</small>
                    </div>
                </div>
            </div>
        </div>