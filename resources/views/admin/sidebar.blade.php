<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Navbar and Sidebar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* Logo styling */
    .navbar-brand img {
        max-height: 40px !important;
        width: auto !important;
        display: block !important;
        transition: opacity 0.3s ease !important;
    }

    .navbar-brand img.small {
        max-height: 35px !important;
    }

    .hidden-logo {
        opacity: 0 !important;
        visibility: hidden !important;
    }

    /* Navbar styling */
    .navbar {
        background-color: #fff !important;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1) !important;
        padding: 0.5rem 1rem !important;
    }

    .navbar-toggler {
        border: none !important;
        background: transparent !important;
        font-size: 1.2rem !important;
        color: #333 !important;
    }

    .navbar-toggler:hover {
        color: #007bff !important;
    }

    /* Sidebar styling */
    .sidebar {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 250px !important;
        height: 100vh !important;
        background-color: #2c3e50 !important;
        color: white !important;
        transform: translateX(-100%) !important;
        transition: transform 0.3s ease !important;
        z-index: 1000 !important;
    }

    .sidebar.active {
        transform: translateX(0) !important;
    }

    .sidebar-brand-wrapper {
        padding: 1rem !important;
        text-align: center !important;
        border-bottom: 1px solid rgba(255,255,255,0.1) !important;
    }

    .sidebar-brand img {
        max-height: 50px !important;
        width: auto !important;
    }

    .sidebar-brand.brand-logo-mini img {
        max-height: 35px !important;
    }

    /* Content wrapper */
    .page-body-wrapper {
        margin-left: 0 !important;
        transition: margin-left 0.3s ease !important;
    }

    .page-body-wrapper.sidebar-open {
        margin-left: 250px !important;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .page-body-wrapper.sidebar-open {
            margin-left: 0 !important;
        }

        .sidebar {
            width: 280px !important;
        }
    }

    /* Demo content styling */
    .demo-content {
        padding: 2rem !important;
        min-height: 100vh !important;
        background-color: #f8f9fa !important;
    }

    /* Overlay for mobile */
    .sidebar-overlay {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background-color: rgba(0,0,0,0.5) !important;
        z-index: 999 !important;
        display: none !important;
    }

    .sidebar-overlay.active {
        display: block !important;
    }
</style>

</head>
<body>
    <!-- Sidebar Overlay (for mobile) -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-brand-wrapper">
            <!-- Main logo for larger screens -->
            <a class="sidebar-brand brand-logo d-none d-lg-block" href="#home">
                <img src="https://via.placeholder.com/150x50/2c3e50/ffffff?text=LOGO" alt="logo" />
            </a>
            <!-- Mini logo for smaller screens -->
            <a class="sidebar-brand brand-logo-mini d-lg-none" href="#home">
                <img src="https://via.placeholder.com/50x50/2c3e50/ffffff?text=L" alt="logo" />
            </a>
        </div>
        
        <!-- Sidebar content would go here -->
        <div class="sidebar-content p-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#dashboard">
                        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#users">
                        <i class="fas fa-users me-2"></i> Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#settings">
                        <i class="fas fa-cog me-2"></i> Settings
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="container-fluid page-body-wrapper" id="pageBodyWrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid">
                <!-- Sidebar Toggle Button -->
                <button class="navbar-toggler me-3" type="button" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Logo for medium and large screens -->
                <a class="navbar-brand d-none d-md-flex align-items-center" href="#home">
                    <img id="logo-img" src="https://via.placeholder.com/150x40/007bff/ffffff?text=BRAND" 
                         class="img-fluid" alt="logo" />
                </a>

                <!-- Smaller logo for mobile -->
                <a class="navbar-brand d-flex d-md-none align-items-center" href="#home">
                    <img id="logo-img-small" src="https://via.placeholder.com/120x35/007bff/ffffff?text=BRAND" 
                         class="img-fluid small" alt="logo" />
                </a>

                <!-- Navbar content (search, user menu, etc.) -->
                <div class="navbar-nav ms-auto">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#profile">Profile</a></li>
                            <li><a class="dropdown-item" href="#logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="demo-content" style="margin-top: 80px;">
            <h1>Main Content Area</h1>
            <p>This is where your main content would go. The sidebar can be toggled using the hamburger menu button in the navbar.</p>
            <p>The layout is responsive and works well on both desktop and mobile devices.</p>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('sidebar');
            const pageBodyWrapper = document.getElementById('pageBodyWrapper');
            const sidebarOverlay = document.getElementById('sidebarOverlay');

            // Toggle sidebar
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('active');
                
                // Only add margin on larger screens
                if (window.innerWidth >= 768) {
                    pageBodyWrapper.classList.toggle('sidebar-open');
                } else {
                    sidebarOverlay.classList.toggle('active');
                }
            });

            // Close sidebar when clicking overlay (mobile)
            sidebarOverlay.addEventListener('click', function() {
                sidebar.classList.remove('active');
                sidebarOverlay.classList.remove('active');
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) {
                    sidebarOverlay.classList.remove('active');
                } else {
                    pageBodyWrapper.classList.remove('sidebar-open');
                }
            });
        });
    </script>
</body>
</html>