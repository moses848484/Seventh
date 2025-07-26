<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Header Navbar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdi/7.2.96/css/materialdesignicons.min.css" rel="stylesheet">
    <style>
        /* Navbar Brand Styling */
        .navbar-brand img {
            max-height: 50px;
            width: auto;
            display: block;
            transition: opacity 0.3s ease;
        }

        .navbar-brand img.small {
            max-height: 35px;
        }

        .hidden-logo {
            opacity: 0;
            visibility: hidden;
        }

        /* Instagram gradient background */
        .instagram-bg {
            background: linear-gradient(45deg, #E4405F, #F58529);
        }

        /* Custom Navbar Styling */
        .navbar {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-bottom: 1px solid #eee;
            height: 70px;
        }

        .navbar-menu-wrapper {
            padding: 0 1rem;
        }

        .navbar-toggler {
            border: none;
            background: transparent;
            padding: 0.5rem;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .navbar-toggler:hover {
            background: #f8f9fa;
            transform: scale(1.05);
        }

        .navbar-toggler .mdi {
            font-size: 1.5rem;
            color: #495057;
        }

        /* Right side navigation */
        .navbar-nav-right {
            margin-left: auto;
        }

        .navbar-nav-right .nav-item {
            margin-left: 0.5rem;
        }

        .nav-link {
            color: #495057 !important;
            padding: 0.75rem 1rem;
            border-radius: 6px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            background: #f8f9fa;
            color: #007bff !important;
        }

        /* Create button styling */
        .create-new-button {
            background: linear-gradient(135deg, #28a745, #20c997);
            border: none;
            color: white !important;
            font-weight: 500;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .create-new-button:hover {
            background: linear-gradient(135deg, #218838, #1ea384);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
        }

        /* Count indicator */
        .count-indicator {
            position: relative;
        }

        .count {
            position: absolute;
            top: 0.25rem;
            right: 0.25rem;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            border: 2px solid white;
        }

        /* Dropdown styling */
        .dropdown-menu {
            border: none;
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
            border-radius: 12px;
            padding: 0;
            margin-top: 0.5rem;
            min-width: 300px;
        }

        .dropdown-menu h6 {
            background: #f8f9fa;
            margin: 0;
            font-weight: 600;
            color: #495057;
            border-radius: 12px 12px 0 0;
        }

        .dropdown-divider {
            margin: 0;
            border-color: #eee;
        }

        .dropdown-item {
            padding: 0.75rem 1rem;
            border: none;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: #f8f9fa;
            transform: translateX(5px);
        }

        .preview-item {
            display: flex;
            align-items: center;
        }

        .preview-thumbnail {
            margin-right: 1rem;
        }

        .preview-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .preview-icon i {
            font-size: 1.2rem;
        }

        .preview-item-content {
            flex: 1;
        }

        .preview-subject {
            font-weight: 500;
            color: #333;
            margin-bottom: 0.25rem;
        }

        .ellipsis {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .text-muted {
            font-size: 0.875rem;
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            object-fit: cover;
        }

        /* Border styling */
        .border-left {
            border-left: 1px solid #dee2e6 !important;
            padding-left: 1rem;
        }

        /* User profile section */
        .user-profile-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem;
            border-radius: 12px;
            margin: 0.5rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar-nav-right .nav-item.d-none.d-lg-block {
                display: none !important;
            }
            
            .dropdown-menu {
                min-width: 280px;
                right: 0 !important;
                left: auto !important;
            }
        }

        /* Demo content */
        .demo-content {
            margin-top: 80px;
            padding: 2rem;
            background: #f8f9fa;
            min-height: calc(100vh - 80px);
        }
    </style>
</head>
<body>
    <div class="container-fluid page-body-wrapper">
        <!-- Main Navbar -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <!-- Sidebar Toggle Button -->
                <button class="navbar-toggler align-self-center" type="button" data-bs-toggle="collapse">
                    <span class="mdi mdi-menu"></span>
                </button>

                <!-- Logo for larger screens -->
                <a class="navbar-brand d-none d-md-flex align-items-center" href="index.html">
                    <img id="logo-img" src="https://via.placeholder.com/150x40/007bff/ffffff?text=LOGO" 
                         class="img-fluid" alt="logo" />
                </a>

                <!-- Smaller logo for mobile -->
                <a class="navbar-brand d-flex d-md-none align-items-center" href="index.html">
                    <img id="logo-img-small" src="https://via.placeholder.com/120x35/007bff/ffffff?text=LOGO" 
                         class="img-fluid small" alt="logo" />
                </a>

                <!-- Right side navigation -->
                <ul class="navbar-nav navbar-nav-right">
                    <!-- Sermons Dropdown (Desktop only) -->
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link btn create-new-button" id="sermonsDropdown" 
                           data-bs-toggle="dropdown" aria-expanded="false" href="#">
                            <i class="fas fa-play me-2"></i>Sermons
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sermonsDropdown">
                            <h6 class="p-3 mb-0 text-center">Watch Now</h6>
                            <div class="dropdown-divider"></div>
                            
                            <a class="dropdown-item preview-item" href="https://www.facebook.com/@universityadventist/">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-primary rounded-circle">
                                        <i class="fa-brands fa-facebook"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Facebook Stream</p>
                                    <p class="text-muted mb-0">Watch live on Facebook</p>
                                </div>
                            </a>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item" href="https://www.youtube.com/@universitysdachurchlusaka7628/">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-danger rounded-circle">
                                        <i class="fa-brands fa-youtube"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">YouTube Stream</p>
                                    <p class="text-muted mb-0">Watch on YouTube</p>
                                </div>
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item" href="#">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon instagram-bg rounded-circle">
                                        <i class="fa-brands fa-instagram text-white"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Instagram Stream</p>
                                    <p class="text-muted mb-0">Follow on Instagram</p>
                                </div>
                            </a>

                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center text-muted">Visit our social media for more</p>
                        </div>
                    </li>

                    <!-- Grid View Button (Desktop only) -->
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="#" title="Apps">
                            <i class="mdi mdi-view-grid"></i>
                        </a>
                    </li>

                    <!-- Messages Dropdown -->
                    <li class="nav-item dropdown border-left">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" 
                           href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-email"></i>
                            <span class="count bg-success"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="messageDropdown">
                            <h6 class="p-3 mb-0">Messages</h6>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item" href="#">
                                <div class="preview-thumbnail">
                                    <img src="https://via.placeholder.com/40x40/28a745/ffffff?text=JD" 
                                         alt="User" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">John Doe</p>
                                    <p class="text-muted mb-0">Hello, how are you doing?</p>
                                </div>
                            </a>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item" href="#">
                                <div class="preview-thumbnail">
                                    <img src="https://via.placeholder.com/40x40/dc3545/ffffff?text=JS" 
                                         alt="User" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Jane Smith</p>
                                    <p class="text-muted mb-0">Meeting at 3 PM today</p>
                                </div>
                            </a>
                            
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">
                                <a href="#" class="text-decoration-none">View all messages</a>
                            </p>
                        </div>
                    </li>

                    <!-- Notifications Dropdown -->
                    <li class="nav-item dropdown border-left">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" 
                           href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-bell"></i>
                            <span class="count bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">Notifications</h6>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item" href="#">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success rounded-circle">
                                        <i class="mdi mdi-calendar text-white"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Event Today</p>
                                    <p class="text-muted ellipsis mb-0">Reminder: You have an event today</p>
                                </div>
                            </a>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item" href="#">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning rounded-circle">
                                        <i class="mdi mdi-settings text-white"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Settings Updated</p>
                                    <p class="text-muted ellipsis mb-0">Dashboard configuration changed</p>
                                </div>
                            </a>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item" href="#">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info rounded-circle">
                                        <i class="mdi mdi-link-variant text-white"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">New Admin Launch</p>
                                    <p class="text-muted ellipsis mb-0">Admin panel has been updated</p>
                                </div>
                            </a>
                            
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">
                                <a href="#" class="text-decoration-none">See all notifications</a>
                            </p>
                        </div>
                    </li>

                    <!-- User Profile Section -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" 
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://via.placeholder.com/32x32/007bff/ffffff?text=U" 
                                 class="rounded-circle" width="32" height="32" alt="Profile">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <div class="user-profile-section text-center">
                                <img src="https://via.placeholder.com/60x60/ffffff/007bff?text=USER" 
                                     class="rounded-circle mb-2" width="60" height="60" alt="Profile">
                                <h6 class="mb-1">Admin User</h6>
                                <p class="mb-0 small opacity-75">admin@example.com</p>
                            </div>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-account me-2"></i>Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-settings me-2"></i>Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#">
                                <i class="mdi mdi-logout me-2"></i>Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Demo Content -->
        <div class="demo-content">
            <h1>Welcome to Admin Dashboard</h1>
            <p>This is your cleaned and modernized header navbar with the following improvements:</p>
            <div class="row">
                <div class="col-md-6">
                    <h3>✨ Visual Enhancements</h3>
                    <ul>
                        <li>Modern gradient buttons and backgrounds</li>
                        <li>Smooth hover animations and transitions</li>
                        <li>Improved dropdown styling with shadows</li>
                        <li>Better spacing and typography</li>
                        <li>Responsive design for all screen sizes</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3>🔧 Functionality Fixes</h3>
                    <ul>
                        <li>Updated to Bootstrap 5 syntax</li>
                        <li>Fixed dropdown toggle functionality</li>
                        <li>Improved accessibility with proper ARIA labels</li>
                        <li>Added missing content and placeholders</li>
                        <li>Clean, maintainable code structure</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Logo visibility toggle functionality
            const logoImg = document.getElementById('logo-img');
            const logoImgSmall = document.getElementById('logo-img-small');
            const togglerButton = document.querySelector('.navbar-toggler');

            if (togglerButton && logoImg) {
                togglerButton.addEventListener('click', function () {
                    logoImg.classList.toggle('hidden-logo');
                    if (logoImgSmall) {
                        logoImgSmall.classList.toggle('hidden-logo');
                    }
                });
            }

            // Smooth animations for dropdown items
            const dropdownItems = document.querySelectorAll('.dropdown-item.preview-item');
            dropdownItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateX(5px)';
                });
                
                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateX(0)';
                });
            });

            // Auto-hide dropdowns on scroll
            window.addEventListener('scroll', function() {
                const dropdowns = document.querySelectorAll('.dropdown-menu.show');
                dropdowns.forEach(dropdown => {
                    const bsDropdown = bootstrap.Dropdown.getInstance(dropdown.previousElementSibling);
                    if (bsDropdown) {
                        bsDropdown.hide();
                    }
                });
            });
        });
    </script>
</body>
</html>