<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offcanvas Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css">
    <style>
        .fa-file {
            color: blueviolet !important;
        }

        .fa-book {
            color: green !important;
        }

        /* Arrow Animation Styles */
        .menu-arrow {
            transition: transform 0.3s ease-in-out;
            font-size: 12px;
            margin-left: auto;
        }

        /* Rotate arrow when menu is expanded */
        .nav-link[aria-expanded="true"] .menu-arrow {
            transform: rotate(90deg);
        }

        /* Smooth collapse transitions */
        .collapse {
            transition: all 0.35s ease;
        }

        /* Add hover effects */
        .nav-item.menu-items .nav-link {
            transition: all 0.3s ease;
            border-radius: 8px;
            margin: 2px 8px;
        }

        .nav-item.menu-items .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }

        /* Active state styling */
        .nav-item.menu-items.active>.nav-link {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        /* Sub-menu styling */
        .sub-menu .nav-item .nav-link {
            padding-left: 50px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .sub-menu .nav-item .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.05);
            padding-left: 55px;
        }

        .sub-menu .nav-item.active .nav-link {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            border-radius: 6px;
        }

        /* Icon animations */
        .menu-icon {
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border-radius: 8px;
            margin-right: 15px;
        }

        .nav-link:hover .menu-icon {
            background-color: rgba(255, 255, 255, 0.1);
            transform: scale(1.1);
        }

        /* Pulse animation for active items */
        .nav-item.menu-items.active>.nav-link .menu-icon {
            animation: pulse 2s infinite;
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

        /* Smooth fade in for collapsed content */
        .collapse.show {
            animation: fadeInDown 0.5s ease-in-out;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Menu title animations */
        .menu-title {
            transition: all 0.3s ease;
        }

        .nav-link:hover .menu-title {
            color: #fff;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        /* Sidebar styling */
        .sidebar {
            background: linear-gradient(180deg, #2c3e50 0%, #34495e 100%);
            color: #ecf0f1;
            width: 244px;
        }

        /* style for off-canvas menu*/
        @media screen and (max-width: 991px) {
            .sidebar-offcanvas {
                position: fixed;
                max-height: 100vh;
                margin-top: 0 !important;
                top: 0;
                bottom: 0;
                overflow: auto;
                left: -244px;
                -webkit-transition: all 0.25s ease-out;
                -o-transition: all 0.25s ease-out;
                transition: all 0.25s ease-out;
                z-index: 1000;
            }

            .sidebar-offcanvas.active {
                left: 0;
            }

            .sidebar-brand-wrapper {
                display: none !important;
            }
        }

        /* Desktop sidebar */
        @media screen and (min-width: 992px) {
            .sidebar-offcanvas {
                position: fixed;
                left: 0;
                top: 0;
                height: 100vh;
                overflow-y: auto;
            }
        }

        /* Overlay */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Mobile menu button */
        .mobile-menu-btn {
            display: none;
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1001;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        @media screen and (max-width: 991px) {
            .mobile-menu-btn {
                display: block;
            }
        }

        /* Prevent dropdown interaction when sidebar is closed */
        .sidebar-offcanvas:not(.active) .nav-link[data-toggle="collapse"] {
            pointer-events: none;
        }

        @media screen and (min-width: 992px) {
            .sidebar-offcanvas .nav-link[data-toggle="collapse"] {
                pointer-events: auto !important;
            }
        }

        /* Navigation category styling */
        .nav-category {
            color: #bdc3c7 !important;
            padding: 10px 16px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Mobile Menu Button -->
    <button class="mobile-menu-btn" id="mobileMenuToggle">
        <span class="mdi mdi-menu"></span>
    </button>

    <!-- Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="{{ url('/redirect') }}">
                <img src="admin/assets/images/faces/sda3.png" alt="logo" />
            </a>
            <a class="sidebar-brand brand-logo-mini" href="{{ url('/redirect') }}">
                <img src="admin/assets/images/faces/sda4.png" alt="logo" />
            </a>
        </div>
        <ul class="nav">

            <li class="nav-item nav-category d-flex justify-content-between align-items-center">
                <span class="nav-link mb-0">
                    <button class="navbar-toggler btn btn-md" type="button" id="sidebarToggle">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </span>
            </li>

            <li class="nav-item menu-items {{ request()->is('/redirect') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/redirected') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item menu-items {{ request()->is('view_members') || request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic"
                    aria-expanded="{{ request()->is('view_members') || request()->is('see_members') ? 'true' : 'false' }}"
                    aria-controls="ui-basic">
                    <span class="menu-icon">
                        <i class="fa-solid fa-users"></i>
                    </span>
                    <span class="menu-title">Manage Members</span>
                    <i class="mdi mdi-chevron-left menu-arrow"></i>
                </a>
                <div class="collapse {{ request()->is('view_members') || request()->is('see_members') ? 'show' : '' }}"
                    id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item {{ request()->is('view_members') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('view_members') }}">
                                <i class="fa-solid fa-user-plus"></i>&nbsp;Register Members
                            </a>
                        </li>

                        <li class="nav-item {{ request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('see_members') }}">
                                <i class="fa-solid fa-eye"></i>&nbsp;View Members
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items {{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#auth"
                    aria-expanded="{{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'true' : 'false' }}"
                    aria-controls="auth">
                    <span class="menu-icon">
                        <i class="fa-solid fa-warehouse"></i>
                    </span>
                    <span class="menu-title">Inventory</span>
                    <i class="mdi mdi-chevron-right menu-arrow"></i>
                </a>
                <div class="collapse {{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'show' : '' }}"
                    id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item {{ request()->is('view_inventory') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('view_inventory') }}">
                                <i class="fa-solid fa-plus"></i>&nbsp; Add Inventory
                            </a>
                        </li>

                        <li class="nav-item {{ request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('show_inventory') }}">
                                <i class="fa-solid fa-list"></i>&nbsp;Show Inventory
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#strategicPlanning"
                    aria-expanded="{{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'true' : 'false' }}"
                    aria-controls="strategicPlanning">
                    <span class="menu-icon">
                        <i class="fa-solid fa-briefcase"></i>
                    </span>
                    <span class="menu-title">Strategic Planning</span>
                    <i class="mdi mdi-chevron-right menu-arrow"></i>
                </a>
                <div class="collapse {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'show' : '' }}"
                    id="strategicPlanning">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item menu-items {{ request()->is('scorecard') || request()->is('update_scorecard/*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('scorecard') }}">
                                <i class="fa-solid fa-chart-line"></i>&nbsp;Create Scorecard
                            </a>
                        </li>
                        <li class="nav-item menu-items {{ request()->is('strategic_plan') || request()->is('update_scorecard/*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('strategic_plan') }}">
                                <i class="fa-solid fa-tasks"></i>&nbsp;Create Work Plan
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items {{ request()->is('time_management') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('time_management') }}">
                    <span class="menu-icon">
                        <i class="fa-solid fa-clock"></i>
                    </span>
                    <span class="menu-title">Time Management</span>
                </a>
            </li>

            <li class="nav-item menu-items {{ request()->is('departments') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('departments') }}">
                    <span class="menu-icon">
                        <i class="fa-solid fa-building"></i>
                    </span>
                    <span class="menu-title">Departments</span>
                </a>
            </li>

            <li class="nav-item menu-items {{ request()->is('view_givings') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('view_givings') }}">
                    <span class="menu-icon">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                    </span>
                    <span class="menu-title">Givings</span>
                </a>
            </li>

            <li class="nav-item menu-items {{ request()->is('see_users') || request()->is('update_user/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('see_users') }}">
                    <span class="menu-icon">
                        <i class="fa-solid fa-users-cog"></i>
                    </span>
                    <span class="menu-title">Users</span>
                </a>
            </li>

            <li class="nav-item menu-items {{ request()->is('view') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('#') }}">
                    <span class="menu-icon">
                        <i class="fa-solid fa-user-tie"></i>
                    </span>
                    <span class="menu-title">Human Resource</span>
                </a>
            </li>
        </ul>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            const sidebarToggle = document.getElementById('sidebarToggle');
            const dropdownLinks = document.querySelectorAll('[data-toggle="collapse"]');

            // Check if sidebar is open (for mobile)
            function isSidebarOpen() {
                return sidebar.classList.contains('active');
            }

            // Check if screen is mobile
            function isMobile() {
                return window.innerWidth < 992;
            }

            // Toggle sidebar
            function toggleSidebar() {
                console.log('Toggle sidebar clicked'); // Debug log
                const isCurrentlyOpen = isSidebarOpen();
                
                if (isCurrentlyOpen) {
                    closeSidebar();
                } else {
                    openSidebar();
                }
            }

            // Open sidebar
            function openSidebar() {
                console.log('Opening sidebar'); // Debug log
                sidebar.classList.add('active');
                overlay.classList.add('active');
                enableDropdowns();
            }

            // Close sidebar
            function closeSidebar() {
                console.log('Closing sidebar'); // Debug log
                sidebar.classList.remove('active');
                overlay.classList.remove('active');
                
                // Close all open dropdowns when sidebar closes
                if (isMobile()) {
                    closeAllDropdowns();
                    disableDropdowns();
                }
            }

            // Enable dropdown functionality
            function enableDropdowns() {
                dropdownLinks.forEach(link => {
                    link.style.pointerEvents = 'auto';
                });
            }

            // Disable dropdown functionality
            function disableDropdowns() {
                dropdownLinks.forEach(link => {
                    if (isMobile()) {
                        link.style.pointerEvents = 'none';
                    }
                });
            }

            // Close all dropdowns
            function closeAllDropdowns() {
                const openDropdowns = document.querySelectorAll('.collapse.show');
                openDropdowns.forEach(dropdown => {
                    dropdown.classList.remove('show');
                });

                // Reset all aria-expanded attributes
                dropdownLinks.forEach(link => {
                    link.setAttribute('aria-expanded', 'false');
                });
            }

            // Custom dropdown toggle with sidebar state check
            function handleDropdownClick(event) {
                event.preventDefault();
                
                // Prevent dropdown toggle if sidebar is closed on mobile
                if (isMobile() && !isSidebarOpen()) {
                    return false;
                }

                const target = event.currentTarget;
                const targetId = target.getAttribute('href').substring(1);
                const targetCollapse = document.getElementById(targetId);
                const isExpanded = target.getAttribute('aria-expanded') === 'true';
                
                // Toggle the collapse
                if (isExpanded) {
                    targetCollapse.classList.remove('show');
                    target.setAttribute('aria-expanded', 'false');
                } else {
                    targetCollapse.classList.add('show');
                    target.setAttribute('aria-expanded', 'true');
                }
            }

            // Event listeners
            if (mobileMenuToggle) {
                mobileMenuToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    toggleSidebar();
                });
            }

            if (sidebarToggle) {
                sidebarToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    toggleSidebar();
                });
            }

            if (overlay) {
                overlay.addEventListener('click', closeSidebar);
            }

            // Add custom click handlers to dropdown links
            dropdownLinks.forEach(link => {
                link.addEventListener('click', handleDropdownClick);
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 992) {
                    // Desktop: ensure sidebar is visible and dropdowns are enabled
                    sidebar.classList.remove('active');
                    overlay.classList.remove('active');
                    enableDropdowns();
                } else {
                    // Mobile: close sidebar and disable dropdowns
                    closeSidebar();
                }
            });

            // Initialize based on screen size
            if (isMobile()) {
                disableDropdowns();
                closeSidebar();
            } else {
                enableDropdowns();
            }
        });
    </script>
</body>
</html>