<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Offcanvas Navigation</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css" rel="stylesheet">
    
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* FIXED: Arrow Animation Styles */
        .menu-arrow {
            transition: transform 0.3s ease-in-out;
            font-size: 16px;
            margin-left: auto;
        }

        /* FIXED: Rotate arrow when menu is expanded */
        a[aria-expanded="true"] .menu-arrow {
            transform: rotate(90deg);
        }

        /* FIXED: Proper collapse transitions without conflicts */
        .collapse {
            transition: height 0.35s ease;
        }

        /* Additional styles for better mobile navigation */
        .nav-category {
            font-size: 0.75rem;
            font-weight: 600;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .nav-link {
            transition: all 0.2s ease;
            text-decoration: none;
        }

        .nav-link:hover {
            background-color: rgba(0, 0, 0, 0.05);
            text-decoration: none;
        }

        .offcanvas-body {
            overflow-y: auto;
        }

        /* Hamburger button styling */
        .hamburger-btn {
            position: fixed;
            right: 20px;
            top: 20px;
            z-index: 1050;
            border: none;
            background: #28a745;
            color: white;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .hamburger-btn:hover {
            background: #218838;
            transform: scale(1.05);
        }

        /* Profile section styling */
        .profile-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        /* Sub-menu styling */
        .sub-menu-item {
            background: rgba(0,0,0,0.02);
            border-left: 3px solid transparent;
            transition: all 0.2s ease;
        }

        .sub-menu-item:hover {
            border-left-color: #28a745;
            background: rgba(40, 167, 69, 0.1);
        }

        .sub-menu-item.active {
            border-left-color: #28a745;
            background: rgba(40, 167, 69, 0.15);
        }

        /* Demo content */
        .main-content {
            margin-left: 0;
            padding: 80px 20px 20px;
        }

        .demo-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .hamburger-btn {
                right: 15px !important;
                top: 15px !important;
            }
        }

        @media (min-width: 768px) {
            .hamburger-btn {
                display: none;
            }
            .main-content {
                padding-top: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Hamburger Button -->
    <button class="btn hamburger-btn d-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- Offcanvas Navigation -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel" style="width: 320px;">
        <!-- Fixed Offcanvas Header -->
        <div class="offcanvas-header border-bottom d-flex justify-content-between align-items-center">
            <h5 id="offcanvasMenuLabel" class="fw-bold mb-0">Menu</h5>
            <button type="button" class="btn btn-sm" data-bs-dismiss="offcanvas" aria-label="Close" style="border: none; background: transparent;">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <div class="offcanvas-body p-0">
            <!-- User Profile Section -->
            <div class="p-3 border-bottom profile-section">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle me-3 bg-success d-flex align-items-center justify-content-center text-white fw-bold" style="width: 50px; height: 50px;">
                        J
                    </div>
                    <div>
                        <div class="fw-semibold text-dark">John Doe</div>
                        <div class="small text-muted">john@example.com</div>
                    </div>
                </div>
            </div>

            <!-- Navigation Menu -->
            <div class="p-0">
                <!-- Dashboard Link -->
                <div class="px-3 py-2">
                    <div class="nav-category small text-muted fw-bold mb-2">Navigation</div>
                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded bg-success text-white" href="#">
                        <span class="me-3">
                            <i class="fa-solid fa-gauge-high"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </div>

                <!-- Manage Members Section -->
                <div class="px-3 py-1">
                    <div class="nav-item">
                        <a class="nav-link d-flex align-items-center py-2 px-3 rounded text-dark" 
                           data-bs-toggle="collapse" 
                           href="#ui-basic" 
                           role="button" 
                           aria-expanded="false" 
                           aria-controls="ui-basic">
                            <span class="me-3">
                                <i class="fa-solid fa-users text-success"></i>
                            </span>
                            <span class="flex-grow-1">Manage Members</span>
                            <i class="mdi mdi-chevron-right menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <div class="ps-4 mt-1">
                                <a class="nav-link d-flex align-items-center py-2 px-3 rounded small sub-menu-item" href="#">
                                    <i class="fa-solid fa-user me-2"></i>Register Members
                                </a>
                                <a class="nav-link d-flex align-items-center py-2 px-3 rounded small sub-menu-item" href="#">
                                    <i class="fa-solid fa-eye me-2"></i>View Members
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inventory Section -->
                <div class="px-3 py-1">
                    <div class="nav-item">
                        <a class="nav-link d-flex align-items-center py-2 px-3 rounded text-dark" 
                           data-bs-toggle="collapse" 
                           href="#inventory" 
                           role="button" 
                           aria-expanded="false" 
                           aria-controls="inventory">
                            <span class="me-3">
                                <i class="fa-solid fa-warehouse text-danger"></i>
                            </span>
                            <span class="flex-grow-1">Inventory</span>
                            <i class="mdi mdi-chevron-right menu-arrow"></i>
                        </a>
                        <div class="collapse" id="inventory">
                            <div class="ps-4 mt-1">
                                <a class="nav-link d-flex align-items-center py-2 px-3 rounded small sub-menu-item" href="#">
                                    <i class="fa-solid fa-plus me-2"></i>Add Inventory
                                </a>
                                <a class="nav-link d-flex align-items-center py-2 px-3 rounded small sub-menu-item" href="#">
                                    <i class="fa-solid fa-list me-2"></i>Show Inventory
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Strategic Planning Section -->
                <div class="px-3 py-1">
                    <div class="nav-item">
                        <a class="nav-link d-flex align-items-center py-2 px-3 rounded text-dark" 
                           data-bs-toggle="collapse" 
                           href="#strategicPlanning" 
                           role="button" 
                           aria-expanded="false" 
                           aria-controls="strategicPlanning">
                            <span class="me-3">
                                <i class="fa-solid fa-briefcase" style="color: orange;"></i>
                            </span>
                            <span class="flex-grow-1">Strategic Planning</span>
                            <i class="mdi mdi-chevron-right menu-arrow"></i>
                        </a>
                        <div class="collapse" id="strategicPlanning">
                            <div class="ps-4 mt-1">
                                <a class="nav-link d-flex align-items-center py-2 px-3 rounded small sub-menu-item" href="#">
                                    <i class="fa-solid fa-chart-line me-2"></i>Create Scorecard
                                </a>
                                <a class="nav-link d-flex align-items-center py-2 px-3 rounded small sub-menu-item" href="#">
                                    <i class="fa-solid fa-tasks me-2"></i>Create Work Plan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Menu Items -->
                <div class="px-3 py-1">
                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded text-dark" href="#">
                        <span class="me-3">
                            <i class="fa-solid fa-clock text-info"></i>
                        </span>
                        <span>Time Management</span>
                    </a>
                </div>

                <div class="px-3 py-1">
                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded text-dark" href="#">
                        <span class="me-3">
                            <i class="fa-solid fa-building text-primary"></i>
                        </span>
                        <span>Departments</span>
                    </a>
                </div>

                <div class="px-3 py-1">
                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded text-dark" href="#">
                        <span class="me-3">
                            <i class="fa-solid fa-hand-holding-heart text-success"></i>
                        </span>
                        <span>Givings</span>
                    </a>
                </div>

                <div class="px-3 py-1">
                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded text-dark" href="#">
                        <span class="me-3">
                            <i class="fa-solid fa-users-cog text-warning"></i>
                        </span>
                        <span>Users</span>
                    </a>
                </div>

                <div class="px-3 py-1">
                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded text-dark" href="#">
                        <span class="me-3">
                            <i class="fa-solid fa-user-tie" style="color: orange;"></i>
                        </span>
                        <span>Human Resource</span>
                    </a>
                </div>

                <!-- Account Section -->
                <div class="border-top mt-3 pt-3 px-3">
                    <div class="nav-category small text-muted fw-bold mb-2">Account</div>
                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded" href="#">
                        <span class="me-3">
                            <i class="fa-solid fa-user text-secondary"></i>
                        </span>
                        <span>Profile</span>
                    </a>
                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded" href="#">
                        <span class="me-3">
                            <i class="fa-solid fa-key text-secondary"></i>
                        </span>
                        <span>API Tokens</span>
                    </a>
                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded text-danger" href="#">
                        <span class="me-3">
                            <i class="fa-solid fa-sign-out-alt"></i>
                        </span>
                        <span>Log Out</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="demo-card">
            <h2>🎉 Bootstrap Collapse Fixed!</h2>
            <p class="lead">The offcanvas navigation now has properly working collapse functionality.</p>
            
            <h4>Key Fixes Applied:</h4>
            <div class="list-group list-group-flush">
                <div class="list-group-item">
                    <strong>✅ Bootstrap JavaScript Added</strong> - Essential for collapse functionality
                </div>
                <div class="list-group-item">
                    <strong>✅ Arrow Rotation Fixed</strong> - Proper CSS selector for arrow animation
                </div>
                <div class="list-group-item">
                    <strong>✅ CSS Conflicts Resolved</strong> - Simplified transitions without interference
                </div>
                <div class="list-group-item">
                    <strong>✅ Unique IDs</strong> - Each collapse section has a unique identifier
                </div>
                <div class="list-group-item">
                    <strong>✅ Proper ARIA Attributes</strong> - Correct accessibility markup
                </div>
            </div>

            <div class="alert alert-success mt-4">
                <h5 class="alert-heading">Testing Instructions:</h5>
                <p class="mb-0">Click the hamburger menu (☰) in the top right to open the offcanvas. Then click on "Manage Members", "Inventory", or "Strategic Planning" to test the collapse functionality. Each section should open and close properly!</p>
            </div>
        </div>
    </div>

    <!-- CRITICAL: Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Optional: Auto-close other collapse menus when one opens
            const collapseElements = document.querySelectorAll('.collapse');
            
            collapseElements.forEach(function (element) {
                element.addEventListener('show.bs.collapse', function () {
                    // Close other open collapses
                    collapseElements.forEach(function (otherElement) {
                        if (otherElement !== element && otherElement.classList.contains('show')) {
                            const collapse = new bootstrap.Collapse(otherElement, {
                                hide: true
                            });
                        }
                    });
                });
            });

            // Enhanced offcanvas functionality
            const offcanvasElement = document.getElementById('offcanvasMenu');
            const hamburgerButton = document.querySelector('[data-bs-target="#offcanvasMenu"]');

            if (offcanvasElement && hamburgerButton) {
                // Hide hamburger when offcanvas is shown
                offcanvasElement.addEventListener('show.bs.offcanvas', function () {
                    hamburgerButton.style.opacity = '0';
                    hamburgerButton.style.pointerEvents = 'none';
                });

                // Show hamburger when offcanvas is hidden
                offcanvasElement.addEventListener('hidden.bs.offcanvas', function () {
                    hamburgerButton.style.opacity = '1';
                    hamburgerButton.style.pointerEvents = 'auto';
                });
            }
        });
    </script>
</body>
</html>