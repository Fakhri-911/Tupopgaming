<header class="bg-white shadow-sm py-3 px-4 d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
        <button class="btn btn-link text-secondary me-3 d-md-none" onclick="toggleMobileSidebar()">
            <i class="fas fa-bars"></i>
        </button>
        <h1 class="h5 mb-0 text-dark fw-semibold">Dashboard Overview</h1>
    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="position-relative">
            <button class="btn btn-link text-secondary">
                <i class="fas fa-bell"></i>
                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                    <span class="visually-hidden">Notifikasi</span>
                </span>
            </button>
        </div>
        <div class="dropdown">
            <button class="btn btn-link text-dark text-decoration-none dropdown-toggle d-flex align-items-center" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="rounded-circle me-2" width="32" height="32">
                <span>Admin</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</header>