<?= $this->extend('admin/main') ?>

<?= $this->section('content') ?>
<!-- Dashboard Tab -->
<div class="show active" id="dashboard">
    <div class="row">
        <div class="col-md-3">
            <div class="card stat-card bg-primary-light">
                <div class="card-body text-center">
                    <i class="fas fa-money-bill-wave card-icon text-primary"></i>
                    <h3 class="card-title">$12,345</h3>
                    <p class="card-text">Total Revenue</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stat-card bg-success-light">
                <div class="card-body text-center">
                    <i class="fas fa-shopping-cart card-icon text-success"></i>
                    <h3 class="card-title">1,234</h3>
                    <p class="card-text">Total Transactions</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stat-card bg-warning-light">
                <div class="card-body text-center">
                    <i class="fas fa-users card-icon text-warning"></i>
                    <h3 class="card-title">5,678</h3>
                    <p class="card-text">Active Users</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stat-card bg-danger-light">
                <div class="card-body text-center">
                    <i class="fas fa-gamepad card-icon text-danger"></i>
                    <h3 class="card-title">45</h3>
                    <p class="card-text">Available Games</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Recent Transactions</h5>
                    <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Game</th>
                                    <th>User</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#12345</td>
                                    <td>Mobile Legends</td>
                                    <td>user123</td>
                                    <td>$10.00</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td>2023-06-15</td>
                                </tr>
                                <tr>
                                    <td>#12344</td>
                                    <td>PUBG Mobile</td>
                                    <td>user456</td>
                                    <td>$25.00</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>2023-06-14</td>
                                </tr>
                                <tr>
                                    <td>#12343</td>
                                    <td>Valorant</td>
                                    <td>user789</td>
                                    <td>$15.00</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td>2023-06-14</td>
                                </tr>
                                <tr>
                                    <td>#12342</td>
                                    <td>Genshin Impact</td>
                                    <td>user101</td>
                                    <td>$50.00</td>
                                    <td><span class="badge bg-danger">Failed</span></td>
                                    <td>2023-06-13</td>
                                </tr>
                                <tr>
                                    <td>#12341</td>
                                    <td>Free Fire</td>
                                    <td>user202</td>
                                    <td>$5.00</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td>2023-06-12</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Top Games</h5>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Mobile Legends
                            <span class="badge bg-primary rounded-pill">456</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            PUBG Mobile
                            <span class="badge bg-primary rounded-pill">389</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Genshin Impact
                            <span class="badge bg-primary rounded-pill">321</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Valorant
                            <span class="badge bg-primary rounded-pill">287</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Free Fire
                            <span class="badge bg-primary rounded-pill">245</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="mb-0">Quick Actions</h5>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary w-100 mb-2">
                        <i class="fas fa-plus me-2"></i> Add New Game
                    </button>
                    <button class="btn btn-success w-100 mb-2">
                        <i class="fas fa-image me-2"></i> Upload Banner
                    </button>
                    <button class="btn btn-info w-100 mb-2">
                        <i class="fas fa-newspaper me-2"></i> Create Article
                    </button>
                    <button class="btn btn-warning w-100">
                        <i class="fas fa-trophy me-2"></i> Setup Tournament
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection() ?>