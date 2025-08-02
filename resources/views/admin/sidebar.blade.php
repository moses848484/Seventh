<style>
    .fa-file {
        color: blueviolet !important;
    }

    .fa-book {
        color: green !important;
    }

    /* Arrow Animation Styles */
    .menu-arrow {
        transition: transform 0.3s ease-in-out !important;
        font-size: 12px !important;
        margin-left: auto !important;
    }

    /* Rotate arrow when menu is expanded */
    .nav-link[aria-expanded="true"] .menu-arrow {
        transform: rotate(90deg) !important;
    }

    /* Smooth collapse transitions */
    .collapse {
        transition: all 0.35s ease !important;
    }

    /* Add hover effects */
    .nav-item.menu-items .nav-link {
        transition: all 0.3s ease !important;
        border-radius: 8px !important;
        margin: 2px 8px !important;
    }

    .nav-item.menu-items .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1) !important;
        transform: translateX(5px) !important;
    }

    /* Active state styling */
    .nav-item.menu-items.active>.nav-link {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
        color: white !important;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4) !important;
    }

    /* Sub-menu styling */
    .sub-menu .nav-item .nav-link {
        padding-left: 50px !important;
        font-size: 14px !important;
        transition: all 0.3s ease !important;
    }

    .sub-menu .nav-item .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.05) !important;
        padding-left: 55px !important;
    }

    .sub-menu .nav-item.active .nav-link {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%) !important;
        color: white !important;
        border-radius: 6px !important;
    }

    /* Icon animations */
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

    /* Pulse animation for active items */
    .nav-item.menu-items.active>.nav-link .menu-icon {
        animation: pulse 2s infinite !important;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7) !important;
        }

        70% {
            box-shadow: 0 0 0 10px rgba(255, 255, 255, 0) !important;
        }

        100% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0) !important;
        }
    }

    /* Smooth fade in for collapsed content */
    .collapse.show {
        animation: fadeInDown 0.5s ease-in-out !important;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0 !important;
            transform: translateY(-10px) !important;
        }

        to {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
    }

    /* Menu title animations */
    .menu-title {
        transition: all 0.3s ease !important;
    }

    .nav-link:hover .menu-title {
        color: #fff !important;
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.5) !important;
    }

    /* Bootstrap 4 Off-Canvas Sidebar Styles */
    .sidebar {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        height: 100vh !important;
        width: 260px !important;
        background: linear-gradient(180deg, #2c3e50 0%, #34495e 100%) !important;
        color: white !important;
        z-index: 1045 !important;
        overflow-y: auto !important;
        overflow-x: hidden !important;
        transform: translateX(-100%) !important;
        transition: transform 0.3s ease-in-out !important;
    }

    /* When sidebar is shown (off-canvas open) */
    .sidebar.show {
        transform: translateX(0) !important;
    }

    /* Navbar toggler styling within sidebar */
    .navbar-toggler {
        background: rgba(255, 255, 255, 0.1) !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        color: white !important;
        padding: 8px 12px !important;
        border-radius: 6px !important;
        transition: all 0.3s ease !important;
        outline: none !important;
    }

    .navbar-toggler:hover {
        background: rgba(255, 255, 255, 0.2) !important;
        transform: scale(1.05) !important;
        color: #fff !important;
    }

    .navbar-toggler:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25) !important;
        outline: none !important;
    }

    .navbar-toggler .mdi {
        font-size: 18px !important;
        line-height: 1 !important;
    }

    /* Backdrop overlay */
    .sidebar-backdrop {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100vw !important;
        height: 100vh !important;
        background: rgba(0, 0, 0, 0.5) !important;
        z-index: 1040 !important;
        opacity: 0 !important;
        visibility: hidden !important;
        transition: all 0.3s ease !important;
    }

    .sidebar-backdrop.show {
        opacity: 1 !important;
        visibility: visible !important;
    }

    /* Mobile toggler for when sidebar is closed */
    .mobile-menu-toggler {
        position: fixed !important;
        top: 15px !important;
        left: 15px !important;
        z-index: 1050 !important;
        background: rgba(0, 0, 0, 0.8) !important;
        border: 1px solid rgba(255, 255, 255, 0.3) !important;
        color: white !important;
        padding: 10px 12px !important;
        border-radius: 8px !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3) !important;
        display: none !important;
    }

    .mobile-menu-toggler:hover {
        background: rgba(0, 0, 0, 0.9) !important;
        transform: scale(1.05) !important;
        color: #fff !important;
    }

    .mobile-menu-toggler:focus {
        outline: none !important;
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25) !important;
    }

    /* Show mobile toggler when sidebar is closed */
    .sidebar:not(.show) ~ .mobile-menu-toggler {
        display: block !important;
    }

    /* Hide mobile toggler when sidebar is open */
    .sidebar.show ~ .mobile-menu-toggler {
        display: none !important;
    }

    /* Brand wrapper styles */
    .sidebar-brand-wrapper {
        padding: 20px 15px !important;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
        margin-bottom: 15px !important;
    }

    .brand-logo img,
    .brand-logo-mini img {
        max-height: 40px !important;
        width: auto !important;
    }

    /* Navigation category styles */
    .nav-category {
        padding: 15px 8px 10px 8px !important;
        margin-bottom: 10px !important;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
    }

    .nav-category .nav-link {
        color: rgba(255, 255, 255, 0.6) !important;
        font-size: 12px !important;
        font-weight: 600 !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        padding: 0 !important;
        margin: 0 !important;
    }

    /* Navigation items */
    .nav {
        flex-direction: column !important;
        padding: 0 !important;
    }

    .nav-item.menu-items .nav-link {
        color: rgba(255, 255, 255, 0.8) !important;
        padding: 12px 8px !important;
        display: flex !important;
        align-items: center !important;
        text-decoration: none !important;
    }

    /* Responsive behavior */
    @media (min-width: 992px) {
        .sidebar {
            transform: translateX(0) !important;
        }
        
        .mobile-menu-toggler {
            display: none !important;
        }
        
        .sidebar-backdrop {
            display: none !important;
        }
    }

    @media (max-width: 991px) {
        .sidebar {
            transform: translateX(-100%) !important;
        }
    }
</style>

<!-- Mobile Menu Toggler -->
<button class="btn mobile-menu-toggler" type="button" id="mobileToggler">
    <span class="mdi mdi-menu"></span>
</button>

<!-- Sidebar Backdrop -->
<div class="sidebar-backdrop" id="sidebarBackdrop"></div>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ url('/redirect') }}"><img src="admin/assets/images/faces/sda3.png"
                alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="{{ url('/redirect') }}"><img
                src="admin/assets/images/faces/sda4.png" alt="logo" /></a>
    </div>
    <ul class="nav">

        <li class="nav-item nav-category d-flex justify-content-between align-items-center">
            <span class="nav-link mb-0">Navigation</span>

            <!-- Toggler button -->
            <button class="navbar-toggler btn btn-sm" type="button" data-toggle="minimize" id="sidebarToggler">
                <span class="mdi mdi-menu"></span>
            </button>
        </li>

        <li class="nav-item menu-items {{ request()->is('/redirect') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/redirected') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li
            class="nav-item menu-items {{ request()->is('view_members') || request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
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

                    <li
                        class="nav-item {{ request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('see_members') }}">
                            <i class="fa-solid fa-eye"></i>&nbsp;View Members
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li
            class="nav-item menu-items {{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : '' }}">
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

                    <li
                        class="nav-item {{ request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('show_inventory') }}">
                            <i class="fa-solid fa-list"></i>&nbsp;Show Inventory
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        <li
            class="nav-item menu-items {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'active' : '' }}">
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
                    <li
                        class="nav-item menu-items {{ request()->is('scorecard') || request()->is('update_scorecard/*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('scorecard') }}">
                            <i class="fa-solid fa-chart-line"></i>&nbsp;Create Scorecard
                        </a>
                    </li>
                    <li
                        class="nav-item menu-items {{ request()->is('strategic_plan') || request()->is('update_scorecard/*') ? 'active' : '' }}">
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

        <li
            class="nav-item menu-items {{ request()->is('see_users') || request()->is('update_user/*') ? 'active' : '' }}">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
    const $sidebar = $('#sidebar');
    const $sidebarToggler = $('#sidebarToggler');
    const $mobileToggler = $('#mobileToggler');
    const $sidebarBackdrop = $('#sidebarBackdrop');

    // Function to toggle sidebar off-canvas
    function toggleSidebar(e) {
        e.preventDefault();
        e.stopPropagation();
        
        $sidebar.toggleClass('show');
        $sidebarBackdrop.toggleClass('show');
    }

    // Function to close sidebar
    function closeSidebar() {
        $sidebar.removeClass('show');
        $sidebarBackdrop.removeClass('show');
    }

    // Event listeners for sidebar togglers
    $sidebarToggler.on('click', toggleSidebar);
    $mobileToggler.on('click', toggleSidebar);

    // Close sidebar when clicking backdrop
    $sidebarBackdrop.on('click', closeSidebar);

    // Handle Bootstrap 4 collapse functionality for sub-menus
    $('[data-toggle="collapse"]:not([data-toggle="minimize"])').on('click', function(e) {
        e.preventDefault();
        const targetId = $(this).attr('href');
        const $target = $(targetId);
        const isExpanded = $(this).attr('aria-expanded') === 'true';
        
        // Close all other collapse menus
        $('[data-toggle="collapse"]:not([data-toggle="minimize"])').each(function() {
            if (this !== e.currentTarget) {
                const otherTargetId = $(this).attr('href');
                const $otherTarget = $(otherTargetId);
                if ($otherTarget.hasClass('show')) {
                    $otherTarget.removeClass('show');
                    $(this).attr('aria-expanded', 'false');
                }
            }
        });
        
        // Toggle current menu
        if (isExpanded) {
            $target.removeClass('show');
            $(this).attr('aria-expanded', 'false');
        } else {
            $target.addClass('show');
            $(this).attr('aria-expanded', 'true');
        }
    });

    // Handle window resize
    $(window).on('resize', function() {
        if ($(window).width() >= 992) {
            $sidebar.addClass('show');
            $sidebarBackdrop.removeClass('show');
        } else {
            $sidebar.removeClass('show');
            $sidebarBackdrop.removeClass('show');
        }
    });

    // Initialize sidebar state based on screen size
    if ($(window).width() >= 992) {
        $sidebar.addClass('show');
    } else {
        $sidebar.removeClass('show');
    }

    // Close sidebar when clicking outside on mobile
    $(document).on('click', function(e) {
        if ($(window).width() < 992) {
            if (!$sidebar.is(e.target) && 
                $sidebar.has(e.target).length === 0 && 
                !$mobileToggler.is(e.target) && 
                $mobileToggler.has(e.target).length === 0 &&
                $sidebar.hasClass('show')) {
                closeSidebar();
            }
        }
    });
});
</script>