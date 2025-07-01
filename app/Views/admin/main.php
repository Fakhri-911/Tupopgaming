<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tupop Gaming - Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url('/assets/css/dashboard.css')?>">
   
</head>
<body class="bg-gray font-sans">
    <!-- Sidebar -->
    <?= $this->include('templates/sidebar'); ?>

    <!-- Main Content -->
    <div class="main-content ml-64" id="mainContent">
        <main class="p-3">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">Dashboard</h2>
                <button class="btn btn-primary d-md-none" id="mobileSidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        
        <!-- Dashboard Content -->
           <?= $this->renderSection('content'); ?> 
        </main>
    </div>

    <!-- Quick Action Form -->

    

     <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="<?= base_url('/assets/js/app.js')?>"></script>
    
</body>
</html>