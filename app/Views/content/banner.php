<?= $this->extend('admin/main') ?>

<?= $this->section('content') ?>
<!-- Banner Management Tab -->
<div class="show active" id="banners">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Banner Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBannerModal">
                <i class="fas fa-plus me-2"></i> Add New Banner
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Preview</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="" alt="Banner" class="banner-preview"></td>
                            <td>Summer Sale 2023</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>2023-06-01</td>
                            <td>2023-06-30</td>
                            <td>
                                <button class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="" alt="Banner" class="banner-preview"></td>
                            <td>New Game Release</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>2023-06-15</td>
                            <td>2023-07-15</td>
                            <td>
                                <button class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="" alt="Banner" class="banner-preview"></td>
                            <td>Tournament Announcement</td>
                            <td><span class="badge bg-secondary">Inactive</span></td>
                            <td>2023-05-01</td>
                            <td>2023-05-31</td>
                            <td>
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