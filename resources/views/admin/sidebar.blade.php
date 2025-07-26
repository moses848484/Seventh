<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sidebar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdi/7.2.96/css/materialdesignicons.min.css" rel="stylesheet">
    <style>
        /* Custom icon colors */
        .fa-file {
            color: blueviolet !important;
        }

        .fa-book {
            color: green !important;
        }

        /* Sidebar styling */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 260px;
            height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            overflow-y: auto;
            z-index: 1000;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }

        .sidebar-brand-wrapper {
            background: rgba(255,255,255,0.1);
            padding: 1rem;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .sidebar-brand img {
            max-height: 45px;
            width: auto;
            filter: brightness(1.1);
        }

        .brand-logo-mini img {
            max-height: 35px;
        }

        /* Navigation styling */
        .nav {
            padding: 0;
            margin: 0;
        }

        .nav-category {
            padding: 1rem 1.5rem 0.5rem;
            margin-top: 1rem;
        }

        .nav-category .nav-link {
            color: rgba(255,255,255,0.7);
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 0;
            border: none;
            background: none;
        }

        .menu-items {
            margin: 0;
        }

        .menu-items > .nav-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            color: rgba(255,255,255,0.9);
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            background: none;
            position: relative;
        }

        .menu-items > .nav-link:hover {
            background: rgba(255,255,255,0.1);
            color: white;
            transform: translateX(5px);
        }

        .menu-items.active > .nav-link {
            background: rgba(255,255,255,0.2);
            color: white;
            border-left: 4px solid #fff;
        }

        .menu-icon {
            width: 24px;
            margin-right: 0.75rem;
            text-align: center;
            font-size: 1.1rem;
        }

        .menu-title {
            flex: 1;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .menu-arrow {
            margin-left: auto;
            transition: transform 0.3s ease;
        }

        .menu-arrow::before {
            content: '\f107';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
        }

        .nav-link[aria-expanded="true"] .menu-arrow {
            transform: rotate(180deg);
        }

        /* Submenu styling */
        .sub-menu {
            background: rgba(0,0,0,0.2);
            margin: 0;
            padding: 0;
        }

        .sub-menu .nav-item {
            margin: 0;
        }

        .sub-menu .nav-link {
            display: flex;
            align-items: center;
            padding: 0.6rem 1.5rem 0.6rem 3rem;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            font-size: 0.8rem;
            transition: all 0.3s ease;
            border: none;
            background: none;
        }

        .sub-menu .nav-link:hover {
            background: rgba(255,255,255,0.1);
            color: white;
            padding-left: 3.25rem;
        }

        .sub-menu .nav-item.active .nav-link {
            background: rgba(255,255,255,0.15);
            color: white;
            border-left: 3px solid rgba(255,255,255,0.8);
        }

        .sub-menu .nav-link i {
            margin-right: 0.5rem;
            width: 16px;
            text-align: center;
            font-size: 0.9rem;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .sidebar.show {
                transform: translateX(0);
            }
        }

        /* Demo content */
        .main-content {
            margin-left: 260px;
            min-height: 100vh;
            background: #f8f9fa;
            padding: 2rem;
        }

        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }
        }

        /* Scrollbar styling */
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: rgba(255,255,255,0.1);
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,0.3);
            border-radius: 3px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: rgba(255,255,255,0.5);
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center">
            <a class="sidebar-brand brand-logo" href="/redirect">
                <img src="https://via.placeholder.com/150x45/ffffff/667eea?text=LOGO" alt="logo" />
            </a>
            <a class="sidebar-brand brand-logo-mini" href="/redirect">
                <img src="https://via.placeholder.com/50x35/ffffff/667eea?text=L" alt="logo" />
            </a>
        </div>

        <ul class="nav">
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>

            <li class="nav-item menu-items active">
                <a class="nav-link" href="/redirected">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#membersMenu" 
                   aria-expanded="false" aria-controls="membersMenu">
                    <span class="menu-icon">
                        <i class="fa-solid fa-users"></i>
                    </span>
                    <span class="menu-title">Manage Members</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="membersMenu">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="/view_members">
                                <i class="fa-solid fa-user"></i>
                                Register Members
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/see_members">
                                <i class="fa-solid fa-eye"></i>
                                View Members
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#inventoryMenu" 
                   aria-expanded="false" aria-controls="inventoryMenu">
                    <span class="menu-icon">
                        <i class="fa-solid fa-warehouse"></i>
                    </span>
                    <span class="menu-title">Inventory</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="inventoryMenu">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="/view_inventory">
                                <i class="fa-solid fa-wrench"></i>
                                Add Inventory
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/show_inventory">
                                <i class="fa-solid fa-eye"></i>
                                Show Inventory
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#strategicMenu" 
                   aria-expanded="false" aria-controls="strategicMenu">
                    <span class="menu-icon">
                        <i class="fa-solid fa-briefcase"></i>
                    </span>
                    <span class="menu-title">Strategic Planning</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="strategicMenu">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="/scorecard">
                                <i class="fa-solid fa-book"></i>
                                Create Scorecard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/strategic_plan">
                                <i class="fa-solid fa-file"></i>
                                Create Work Plan
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="/time_management">
                    <span class="menu-icon">
                        <i class="fa-solid fa-clock"></i>
                    </span>
                    <span class="menu-title">Time Management</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="/departments">
                    <span class="menu-icon">
                        <i class="fa-solid fa-book"></i>
                    </span>
                    <span class="menu-title">Departments</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="/view_givings">
                    <span class="menu-icon">
                        <i class="fa-solid fa-sack-dollar"></i>
                    </span>
                    <span class="menu-title">Givings</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="/see_users">
                    <span class="menu-icon">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <span class="menu-title">Users</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="#">
                    <span class="menu-icon">
                        <i class="fa-solid fa-user-tie"></i>
                    </span>
                    <span class="menu-title">Human Resource</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Demo Main Content -->
    <div class="main-content">
        <h1>Main Content Area</h1>
        <p>This is your main content area. The sidebar has been cleaned up and modernized with:</p>
        <ul>
            <li>Consistent icon sizing and alignment</li>
            <li>Smooth hover animations</li>
            <li>Better color scheme and gradients</li>
            <li>Proper Bootstrap 5 collapse functionality</li>
            <li>Responsive design for mobile devices</li>
            <li>Custom scrollbar styling</li>
        </ul>
        <p>The sidebar maintains all your original functionality while providing a more polished and professional appearance.</p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Demo functionality for active states
        document.addEventListener('DOMContentLoaded', function() {
            // Handle menu item clicks
            const menuItems = document.querySelectorAll('.menu-items > .nav-link');
            const subMenuItems = document.querySelectorAll('.sub-menu .nav-link');

            menuItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    // Don't prevent default for collapse toggles
                    if (!this.hasAttribute('data-bs-toggle')) {
                        // Remove active class from all menu items
                        document.querySelectorAll('.menu-items').forEach(mi => mi.classList.remove('active'));
                        // Add active class to clicked item's parent
                        this.closest('.menu-items').classList.add('active');
                    }
                });
            });

            subMenuItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Remove active class from all sub menu items
                    document.querySelectorAll('.sub-menu .nav-item').forEach(si => si.classList.remove('active'));
                    // Add active class to clicked item's parent
                    this.closest('.nav-item').classList.add('active');
                });
            });
        });
    </script>
</body>
</html>