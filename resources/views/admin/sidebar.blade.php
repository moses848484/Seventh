<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap 5 Sidebar</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Font Awesome (Optional, for custom icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    body {
        display: flex !important;
        min-height: 100vh !important;
        overflow-x: hidden !important;
    }

    .sidebar {
        width: 260px !important;
        min-height: 100vh !important;
        background-color: #343a40 !important;
    }

    .sidebar .nav-link,
    .sidebar .nav-link:hover {
        color: #ffffff !important;
    }

    .sidebar .nav-link.active {
        background-color: #495057 !important;
    }

    .nav-item.nav-category {
        padding: 1rem !important;
        border-bottom: 1px solid #495057 !important;
        color: #adb5bd !important;
    }

    .menu-icon {
        width: 35px !important;
        height: 35px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        border-radius: 6px !important;
        margin-right: 10px !important;
    }

    .menu-arrow {
        margin-left: auto !important;
        font-size: 14px !important;
        transition: transform 0.3s !important;
    }

    .nav-link[aria-expanded="true"] .menu-arrow {
        transform: rotate(90deg) !important;
    }

    .sub-menu {
        padding-left: 2rem !important;
    }

    .sub-menu .nav-link {
        font-size: 14px !important;
    }

    .sidebar .navbar-toggler {
        color: white !important;
        background: none !important;
        border: none !important;
        font-size: 1.2rem !important;
    }
</style>

</head>
<body>

    <!-- Sidebar -->
    <nav class="sidebar d-flex flex-column p-0">
        <ul class="nav flex-column">

            <!-- Category + Toggler -->
            <li class="nav-item nav-category d-flex justify-content-between align-items-center">
                <span class="fw-bold">Navigation</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
                    <span class="mdi mdi-menu"></span>
                </button>
            </li>

            <div class="collapse show" id="sidebarMenu">
                <!-- Dashboard -->
                <li class="nav-item menu-items">
                    <a class="nav-link d-flex align-items-center active" href="/dashboard">
                        <div class="menu-icon bg-primary text-white">
                            <i class="mdi mdi-view-dashboard"></i>
                        </div>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <!-- Inventory with submenu -->
                <li class="nav-item menu-items">
                    <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#inventoryMenu" role="button"
                       aria-expanded="false" aria-controls="inventoryMenu">
                        <div class="menu-icon bg-info text-white">
                            <i class="mdi mdi-archive"></i>
                        </div>
                        <span class="menu-title">Inventory</span>
                        <i class="mdi mdi-chevron-right menu-arrow"></i>
                    </a>
                    <div class="collapse" id="inventoryMenu">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="/items">All Items</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/items/create">Add New Item</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Reports -->
                <li class="nav-item menu-items">
                    <a class="nav-link d-flex align-items-center" href="/reports">
                        <div class="menu-icon bg-warning text-white">
                            <i class="mdi mdi-chart-bar"></i>
                        </div>
                        <span class="menu-title">Reports</span>
                    </a>
                </li>
            </div>
        </ul>
    </nav>

    <!-- Page Content -->
    <main class="flex-grow-1 p-4">
        <h1>Welcome to the Dashboard</h1>
        <p>This is your main content area.</p>
    </main>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
