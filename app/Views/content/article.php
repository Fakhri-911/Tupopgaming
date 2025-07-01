<?= $this->extend('admin/main') ?>

<?= $this->section('content') ?>
<!-- Article Management Tab -->
<div class="show active" id="articles">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Article Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addArticleModal">
                <i class="fas fa-plus me-2"></i> Add New Article
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="" alt="Thumbnail" width="50"></td>
                            <td>Top 5 Mobile Legends Heroes for Beginners</td>
                            <td>Guide</td>
                            <td>Admin</td>
                            <td><span class="badge bg-success">Published</span></td>
                            <td>2023-06-10</td>
                            <td>
                                <button class="btn btn-sm btn-info me-1"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="" alt="Thumbnail" width="50"></td>
                            <td>PUBG Mobile Season 20 Update Details</td>
                            <td>News</td>
                            <td>Admin</td>
                            <td><span class="badge bg-success">Published</span></td>
                            <td>2023-06-08</td>
                            <td>
                                <button class="btn btn-sm btn-info me-1"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="" alt="Thumbnail" width="50"></td>
                            <td>Genshin Impact 3.7 Character Tier List</td>
                            <td>Guide</td>
                            <td>Admin</td>
                            <td><span class="badge bg-warning">Draft</span></td>
                            <td>2023-06-05</td>
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