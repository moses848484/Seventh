<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Animated Sidebar</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Material Design Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
</head>
<body>

<style>
    .fa-file {
        color: blueviolet !important;
    }

    .fa-book {
        color: green !important;
    }

    /* Sidebar base styling */
    .sidebar {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        position: fixed;
        left: 0;
        top: 0;
        width: 250px;
        z-index: 1040;
        transition: all 0.3s ease;
    }

    /* Arrow Animation Styles */
    .menu-arrow {
        transition: transform 0.3s ease-in-out;
        font-size: 12px;
        margin-left: auto;
    }

    /* Rotate arrow when menu is expanded - Fixed inconsistent arrows */
    .nav-link[aria-expanded="true"] .menu-arrow {
        transform: rotate(90deg);
    }

    /* Consistent arrow direction */
    .menu-arrow.mdi-chevron-right,
    .menu-arrow.mdi-chevron-left {
        transform: rotate(0deg);
    }

    .nav-link[aria-expanded="true"] .menu-arrow.mdi-chevron-right,
    .nav-link[aria-expanded="true"] .menu-arrow.mdi-chevron-left {
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
        color: rgba(255, 255, 255, 0.8);
        position: relative;
        overflow: hidden;
    }

    .nav-item.menu-items .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
        transform: translateX(5px);
        color: white;
    }

    /* Active state styling */
    .nav-item.menu-items.active > .nav-link {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(240, 147, 251, 0.4);
    }

    /* Sub-menu styling */
    .sub-menu {
        background: rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        margin: 0 8px;
        padding: 8px 0;
    }

    .sub-menu .nav-item .nav-link {
        padding-left: 50px;
        font-size: 14px;
        transition: all 0.3s ease;
        color: rgba(255, 255, 255, 0.7);
        margin: 1px 4px;
    }

    .sub-menu .nav-item .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.05);
        padding-left: 55px;
        color: white;
    }

    .sub-menu .nav-item.active .nav-link {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        border-radius: 6px;
        box-shadow: 0 2px 8px rgba(240, 147, 251, 0.3);
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
    .nav-item.menu-items.active > .nav-link .menu-icon {
        animation: pulse 2s infinite;
        background-color: rgba(255, 255, 255, 0.2);
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

    /* Navigation category styling */
    .nav-category .nav-link {
        color: rgba(255, 255, 255, 0.6);
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 10px 8px 5px 8px;
    }

    /* Brand wrapper styling */
    .sidebar-brand-wrapper {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        height: 70px;
        z-index: 1041;
    }

    .sidebar-brand-wrapper img {
        max-height: 40px;
        transition: transform 0.3s ease;
    }

    .sidebar-brand-wrapper:hover img {
        transform: scale(1.05);
    }

    /* Main content area adjustment */
    .main-content {
        margin-left: 250px;
        padding: 20px;
        transition: margin-left 0.3s ease;
    }

    /* Responsive design */
    @media (max-width: 991.98px) {
        .sidebar {
            transform: translateX(-100%);
        }
        
        .sidebar.show {
            transform: translateX(0);
        }
        
        .main-content {
            margin-left: 0;
        }
    }

    /* Scrollbar styling */
    .sidebar::-webkit-scrollbar {
        width: 6px;
    }

    .sidebar::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
    }

    .sidebar::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.3);
        border-radius: 3px;
    }

    .sidebar::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 255, 255, 0.5);
    }

    /* Loading animation for menu items */
    .nav-item.menu-items {
        animation: slideInLeft 0.5s ease-out forwards;
        opacity: 0;
        transform: translateX(-20px);
    }

    .nav-item.menu-items:nth-child(1) { animation-delay: 0.1s; }
    .nav-item.menu-items:nth-child(2) { animation-delay: 0.2s; }
    .nav-item.menu-items:nth-child(3) { animation-delay: 0.3s; }
    .nav-item.menu-items:nth-child(4) { animation-delay: 0.4s; }
    .nav-item.menu-items:nth-child(5) { animation-delay: 0.5s; }
    .nav-item.menu-items:nth-child(6) { animation-delay: 0.6s; }
    .nav-item.menu-items:nth-child(7) { animation-delay: 0.7s; }
    .nav-item.menu-items:nth-child(8) { animation-delay: 0.8s; }
    .nav-item.menu-items:nth-child(9) { animation-delay: 0.9s; }
    .nav-item.menu-items:nth-child(10) { animation-delay: 1.0s; }

    @keyframes slideInLeft {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>

<nav class="sidebar sidebar-offcanvas overflow-auto" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="/redirect">
            <img src="https://via.placeholder.com/120x40/667eea/ffffff?text=LOGO" alt="logo" />
        </a>
        <a class="sidebar-brand brand-logo-mini" href="/redirect">
            <img src="https://via.placeholder.com/40x40/667eea/ffffff?text=L" alt="logo" />
        </a>
    </div>
    
    <ul class="nav pt-5">
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
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic"
                aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="fa-solid fa-users"></i>
                </span>
                <span class="menu-title">Manage Members</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/view_members">
                            <i class="fa-solid fa-user-plus"></i>&nbsp;Register Members
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/see_members">
                            <i class="fa-solid fa-eye"></i>&nbsp;View Members
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth"
                aria-expanded="false" aria-controls="auth">
                <span class="menu-icon">
                    <i class="fa-solid fa-warehouse"></i>
                </span>
                <span class="menu-title">Inventory</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/view_inventory">
                            <i class="fa-solid fa-plus"></i>&nbsp; Add Inventory
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/show_inventory">
                            <i class="fa-solid fa-list"></i>&nbsp;Show Inventory
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#strategicPlanning"
                aria-expanded="false" aria-controls="strategicPlanning">
                <span class="menu-icon">
                    <i class="fa-solid fa-briefcase"></i>
                </span>
                <span class="menu-title">Strategic Planning</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="strategicPlanning">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/scorecard">
                            <i class="fa-solid fa-chart-line"></i>&nbsp;Create Scorecard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/strategic_plan">
                            <i class="fa-solid fa-tasks"></i>&nbsp;Create Work Plan
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
                    <i class="fa-solid fa-building"></i>
                </span>
                <span class="menu-title">Departments</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="/view_givings">
                <span class="menu-icon">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                </span>
                <span class="menu-title">Givings</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="/see_users">
                <span class="menu-icon">
                    <i class="fa-solid fa-users-cog"></i>
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

<!-- Main content area -->
<div class="main-content">
    <h1>Main Content Area</h1>
    <p>Your page content goes here...</p>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle collapse arrow rotation
    const collapseElements = document.querySelectorAll('.collapse');
    
    collapseElements.forEach(function(collapseEl) {
        const trigger = document.querySelector(`[href="#${collapseEl.id}"]`);
        const arrow = trigger.querySelector('.menu-arrow');
        
        collapseEl.addEventListener('show.bs.collapse', function() {
            trigger.setAttribute('aria-expanded', 'true');
            if (arrow) {
                arrow.style.transform = 'rotate(90deg)';
            }
        });
        
        collapseEl.addEventListener('hide.bs.collapse', function() {
            trigger.setAttribute('aria-expanded', 'false');
            if (arrow) {
                arrow.style.transform = 'rotate(0deg)';
            }
        });
    });
    
    // Handle active states
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            // Don't handle collapse triggers
            if (this.hasAttribute('data-bs-toggle')) {
                return;
            }
            
            // Remove active from all menu items
            document.querySelectorAll('.nav-item.menu-items').forEach(item => {
                item.classList.remove('active');
            });
            
            // Add active to current item
            const parentMenuItem = this.closest('.nav-item.menu-items');
            if (parentMenuItem) {
                parentMenuItem.classList.add('active');
            }
        });
    });
    
    // Mobile sidebar toggle (if needed)
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    
    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('show');
        });
    }
});
</script>

</body>
</html>