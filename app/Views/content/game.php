<?= $this->extend('admin/main') ?>

<?= $this->section('content') ?>
<!-- Game Management Tab -->
<div class="show active" id="games">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Game Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGameModal">
                <i class="fas fa-plus me-2"></i> Add New Game
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Top-Up Options</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src=" alt="Game Logo" class="rounded-circle" width="40"></td>
                            <td>Mobile Legends</td>
                            <td>MOBA</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>12</td>
                            <td>
                                <button class="btn btn-sm btn-info me-1"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="" alt="Game Logo" class="rounded-circle" width="40"></td>
                            <td>PUBG Mobile</td>
                            <td>Battle Royale</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>8</td>
                            <td>
                                <button class="btn btn-sm btn-info me-1"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="" alt="Game Logo" class="rounded-circle" width="40"></td>
                            <td>Genshin Impact</td>
                            <td>RPG</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>15</td>
                            <td>
                                <button class="btn btn-sm btn-info me-1"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="" alt="Game Logo" class="rounded-circle" width="40"></td>
                            <td>Valorant</td>
                            <td>FPS</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>10</td>
                            <td>
                                <button class="btn btn-sm btn-info me-1"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection() ?>