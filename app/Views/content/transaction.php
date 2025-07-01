<?= $this->extend('admin/main') ?>

<?= $this->section('content') ?>
<!-- Transactions Tab -->
<div class="show active" id="transactions">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Transaction Records</h5>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Search by ID...">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Filter by Status</option>
                        <option>Completed</option>
                        <option>Pending</option>
                        <option>Failed</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Filter by Game</option>
                        <option>Mobile Legends</option>
                        <option>PUBG Mobile</option>
                        <option>Genshin Impact</option>
                        <option>Valorant</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Game</th>
                            <th>Product</th>
                            <th>Amount</th>
                            <th>Payment Method</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#12345</td>
                            <td>user123</td>
                            <td>Mobile Legends</td>
                            <td>100 Diamonds</td>
                            <td>$10.00</td>
                            <td>Credit Card</td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td>2023-06-15 14:30</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>#12344</td>
                            <td>user456</td>
                            <td>PUBG Mobile</td>
                            <td>500 UC</td>
                            <td>$25.00</td>
                            <td>PayPal</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>2023-06-14 18:15</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>#12343</td>
                            <td>user789</td>
                            <td>Valorant</td>
                            <td>1000 VP</td>
                            <td>$15.00</td>
                            <td>Bank Transfer</td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td>2023-06-14 10:45</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>#12342</td>
                            <td>user101</td>
                            <td>Genshin Impact</td>
                            <td>3000 Genesis Crystals</td>
                            <td>$50.00</td>
                            <td>Credit Card</td>
                            <td><span class="badge bg-danger">Failed</span></td>
                            <td>2023-06-13 22:20</td>
                            <td>
                                <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation" class="mt-3">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?= $this->endsection() ?>