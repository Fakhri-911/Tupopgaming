// Mobile sidebar toggle
document.getElementById('mobileSidebarToggle').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('active');
    document.getElementById('mainContent').classList.toggle('active');
});

// Close sidebar when clicking outside on mobile
document.addEventListener('click', function(event) {
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    const mobileToggle = document.getElementById('mobileSidebarToggle');
    
    if (window.innerWidth <= 768 && !sidebar.contains(event.target) && 
        event.target !== mobileToggle && !mobileToggle.contains(event.target)) {
        sidebar.classList.remove('active');
        mainContent.classList.remove('active');
    }
});

// Simulate loading data
document.addEventListener('DOMContentLoaded', function() {
    // You can add AJAX calls here to load real data
    console.log('Dashboard loaded');
});