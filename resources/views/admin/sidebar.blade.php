<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sidebar Dashboard</title>
    <!-- Bootstrap 4 CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Icons -->
    <link href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet">
    <style>
        /* Sidebar and Menu Item Styling */
        .sidebar {
            width: 260px;
            background-color: #2d2d2d;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            overflow-y: auto;
            padding-top: 60px;
            z-index: 1000;
        }

        .sidebar .nav-link {
            color: #cfd8dc !important;
            padding: 12px 20px !important;
            display: flex !important;
            align-items: center !important;
            transition: all 0.3s ease !important;
        }

        .sidebar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1) !important;
            transform: translateX(5px) !important;
        }

        .sidebar .nav-item.menu-items.active > .nav-link {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
            color: white !important;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4) !important;
        }

        .menu-icon {
            transition: all 0.3s ease !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 35px !important;
            height: 35px !important;
            border-radius: 8px !important;
            margin-right: 15px !important;
        }

        .nav-link:hover .menu-icon {
            background-color: rgba(255, 255, 255, 0.1) !important;
            transform: scale(1.1) !important;
        }

        .nav-item.menu-items.active > .nav-link .menu-icon {
            animation: pulse 2s infinite !important;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
            }
        }

        .sidebar-brand-wrapper {
            height: 60px;
            background-color: #1e1e1e;
            padding: 0 15px;
        }

        .sidebar-brand img {
            height: 40px;
        }

        body {
            margin-left: 260px;
            background-color: #f4f4f4;
        }

        .navbar-toggler {
            border: none !important;
            background: transparent !important;
            color: #fff !important;
        }

        .nav-category {
            padding: 0.75rem 1.25rem;
            color: #aaa;
            font-weight: bold;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-flex align-items-center justify-content-between fixed-top px-3">
        <a class="sidebar-brand brand-logo" href="/redirect">
            <img src="admin/assets/images/faces/sda3.png" alt="logo" />
        </a>
        <a class="sidebar-brand brand-logo-mini" href="/redirect">
            <img src="admin/assets/images/faces/sda4.png" alt="logo" />
        </a>
        <button class="navbar-toggler btn btn-sm ml-auto" type="button" data-toggle="minimize" aria-label="Toggle Sidebar">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>

    <ul class="nav mt-5 pt-3">
        <li class="nav-item nav-category d-flex justify-content-between align-items-center">
            <span class="nav-link mb-0">Navigation</span>
            <button class="navbar-toggler btn btn-sm" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
        </li>

        <li class="nav-item menu-items active">
            <a class="nav-link" href="/redirected">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <!-- More nav items -->
        <!-- <li class="nav-item menu-items">...</li> -->
    </ul>
</nav>

<!-- Main Content Placeholder -->
<div class="container-fluid">
    <h1 class="mt-5">Main Content</h1>
    <p>This is the main dashboard area.</p>
</div>

<!-- Bootstrap 4 JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Optional Sidebar Toggle Script -->
<script>
    document.querySelectorAll('[data-toggle="minimize"]').forEach(button => {
        button.addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('collapsed');
        });
    });
</script>

</body>
</html>
