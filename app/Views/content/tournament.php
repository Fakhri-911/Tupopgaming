<?= $this->extend('admin/main') ?>

<?= $this->section('content') ?>
<!-- Tournament Management Tab -->
<div class="show active" id="tournaments">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Tournament Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTournamentModal">
                <i class="fas fa-plus me-2"></i> Add New Tournament
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Game</th>
                            <th>Title</th>
                            <th>Prize Pool</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Participants</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mobile Legends</td>
                            <td>MLBB Summer Championship 2023</td>
                            <td>$10,000</td>
                            <td>2023-07-15</td>
                            <td>2023-07-30</td>
                            <td><span class="badge bg-primary">Upcoming</span></td>
                            <td>32/64</td>
                            <td>
                                <button class="btn btn-sm btn-info me-1"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>PUBG Mobile</td>
                            <td>PUBG Mobile Pro League Season 4</td>
                            <td>$25,000</td>
                            <td>2023-06-20</td>
                            <td>2023-07-10</td>
                            <td><span class="badge bg-success">Ongoing</span></td>
                            <td>16/16</td>
                            <td>
                                <button class="btn btn-sm btn-info me-1"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Valorant</td>
                            <td>Valorant Community Cup June 2023</td>
                            <td>$5,000</td>
                            <td>2023-06-01</td>
                            <td>2023-06-05</td>
                            <td><span class="badge bg-secondary">Completed</span></td>
                            <td>8/8</td>
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