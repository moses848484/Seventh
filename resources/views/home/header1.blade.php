<style>
    .navbar-brand img {
        max-height: 50px;
        width: auto;
        display: block;
        transition: opacity 0.3s ease;
    }

    .hidden-logo {
        opacity: 0;
        visibility: hidden;
    }

    /* Enhanced navbar styles */
    .navbar {
        background: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        border-bottom: 1px solid #e9ecef;
    }

    .navbar-toggler {
        border: none;
        padding: 0.5rem;
        background: transparent;
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }

    .navbar-toggler .mdi {
        font-size: 1.5rem;
        color: #495057;
    }

    /* Dropdown improvements */
    .dropdown-menu {
        border: 1px solid #e0e0e0;
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        border-radius: 8px;
        padding: 0.5rem 0;
        min-width: 200px;
    }

    .dropdown-item {
        padding: 0.75rem 1rem;
        font-size: 0.9rem;
        transition: all 0.2s ease;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;
        transform: translateX(5px);
    }

    .preview-item {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        transition: all 0.2s ease;
    }

    .preview-item:hover {
        background-color: #f8f9fa;
    }

    .preview-thumbnail {
        margin-right: 0.75rem;
        flex-shrink: 0;
    }

    .preview-icon {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
    }

    .preview-item-content {
        flex: 1;
        min-width: 0;
    }

    .preview-subject {
        font-weight: 500;
        color: #495057;
        margin-bottom: 2px;
        font-size: 0.9rem;
    }

    .ellipsis {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    /* Count indicator */
    .count {
        position: absolute;
        top: -8px;
        right: -8px;
        min-width: 18px;
        height: 18px;
        border-radius: 50%;
        font-size: 10px;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        border: 2px solid white;
    }

    .count-indicator {
        position: relative;
    }

    /* Navigation improvements */
    .nav-link {
        color: #495057 !important;
        font-weight: 500;
        padding: 0.75rem 1rem;
        transition: all 0.2s ease;
    }

    .nav-link:hover {
        color: #28a745 !important;
        background-color: rgba(40, 167, 69, 0.1);
        border-radius: 6px;
    }

    .create-new-button {
        background: linear-gradient(135deg, #28a745, #20c997);
        border: none;
        border-radius: 25px;
        padding: 0.5rem 1.5rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .create-new-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
        .navbar-nav .nav-item {
            margin-bottom: 0.5rem;
            margin-top: 190px;
            right: 20px;
        }
        
        .dropdown-menu {
            position: static !important;
            transform: none !important;
            box-shadow: none;
            border: none;
            background: #f8f9fa;
            margin-top: 0.5rem;
            border-radius: 6px;
        }
    }

    @media (max-width: 767px) {
        .navbar-brand img {
            max-height: 35px;
        }
    }
</style>

<div class="container-fluid page-body-wrapper">
    <!-- Enhanced Navbar -->
    <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <!-- Logo (responsive visibility) -->
            <a class="navbar-brand brand-logo-mini d-none d-md-flex align-items-center" href="index.html">
                <img id="logo-img" src="admin/assets/images/faces/sda3.png" class="img-fluid"
                    style="max-height: 40px; margin-top: 10px; width: auto; display: block;" alt="logo" />
            </a>

            <!-- Smaller logo for mobile -->
            <a class="navbar-brand brand-logo-mini d-flex d-md-none align-items-center" href="index.html">
                <img id="logo-img-small" src="admin/assets/images/faces/sda3.png" class="img-fluid"
                    style="max-height: 35px; margin-top: 8px; width: auto; display: block;" alt="logo" />
            </a>

            <!-- Responsive Toggler Button -->
            <button class="navbar-toggler navbar-toggler align-self-center d-lg-none" type="button" 
                    onclick="toggleSidebar()" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
            </button>

            <!-- Right side navigation -->
            <ul class="navbar-nav navbar-nav-right ms-auto">
                
                <!-- Sermons Dropdown -->
                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link btn btn-success create-new-button dropdown-toggle" 
                       id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                        Sermons
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="createbuttonDropdown">
                        <h6 class="dropdown-header text-center">Watch Now</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" href="https://www.facebook.com/@universityadventist/">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-primary text-white">
                                    <i class="fab fa-facebook"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">Facebook Stream</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" href="https://www.youtube.com/@universitysdachurchlusaka7628/">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-danger text-white">
                                    <i class="fab fa-youtube"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">Youtube Stream</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" href="#">
                            <div class="preview-thumbnail">
                                <div class="preview-icon" style="background-color: #f39c12;">
                                    <i class="fab fa-instagram text-white"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">Instagram Stream</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <p class="dropdown-header text-center">Visit Us</p>
                    </div>
                </li>

                <!-- Settings/Grid -->
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="#" title="Settings">
                        <i class="mdi mdi-view-grid"></i>
                    </a>
                </li>

                <!-- Messages Dropdown -->
                <li class="nav-item dropdown border-start">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                        data-bs-toggle="dropdown" aria-expanded="false" title="Messages">
                        <i class="mdi mdi-email"></i>
                        <span class="count bg-success">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="messageDropdown">
                        <h6 class="dropdown-header">Messages</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" href="#">
                            <div class="preview-thumbnail">
                                <img src="https://via.placeholder.com/40x40/007bff/ffffff?text=JD" alt="User" class="rounded-circle" style="width: 35px; height: 35px;">
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">New message from John</p>
                                <p class="text-muted mb-0 small">2 minutes ago</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" href="#">
                            <div class="preview-thumbnail">
                                <img src="https://via.placeholder.com/40x40/28a745/ffffff?text=SM" alt="User" class="rounded-circle" style="width: 35px; height: 35px;">
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">Meeting reminder</p>
                                <p class="text-muted mb-0 small">1 hour ago</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" href="#">
                            <div class="preview-thumbnail">
                                <img src="https://via.placeholder.com/40x40/dc3545/ffffff?text=AL" alt="User" class="rounded-circle" style="width: 35px; height: 35px;">
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">System notification</p>
                                <p class="text-muted mb-0 small">3 hours ago</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center small" href="#">See all messages</a>
                    </div>
                </li>

                <!-- Notifications Dropdown -->
                <li class="nav-item dropdown border-start">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                        data-bs-toggle="dropdown" aria-expanded="false" title="Notifications">
                        <i class="mdi mdi-bell"></i>
                        <span class="count bg-danger">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">
                        <h6 class="dropdown-header">Notifications</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" href="#">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark">
                                    <i class="mdi mdi-calendar text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Event today</p>
                                <p class="text-muted ellipsis mb-0 small">Just a reminder that you have an event today</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" href="#">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark">
                                    <i class="mdi mdi-settings text-danger"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Settings</p>
                                <p class="text-muted ellipsis mb-0 small">Update dashboard</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" href="#">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark">
                                    <i class="mdi mdi-link-variant text-warning"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Launch Admin</p>
                                <p class="text-muted ellipsis mb-0 small">New admin wow!</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center small" href="#">See all notifications</a>
                    </div>
                </li>

                <!-- User Profile Dropdown (Desktop) -->
                <li class="nav-item dropdown border-start d-none d-lg-block">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" 
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://via.placeholder.com/32x32/28a745/ffffff?text=U" alt="User" 
                             class="rounded-circle me-2" style="width: 32px; height: 32px;">
                        <span class="d-none d-xl-inline">{{ Auth::user()->name ?? 'User' }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <h6 class="dropdown-header">Account</h6>
                        <a class="dropdown-item" href="{{ route('profile.show') }}">
                            <i class="mdi mdi-account me-2"></i>Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cog me-2"></i>Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="mdi mdi-logout me-2"></i>Logout
                            </button>
                        </form>
                    </div>
                </li>

                <!-- Mobile notification area -->
                <li class="nav-item" >
                    <x-app-layout class="bg-white">
                        <x-notify::notify />
                    </x-app-layout>
                </li>
            </ul>
        </div>
    </nav>
</div>

<script>
    // Enhanced logo toggle functionality
    const logoImg = document.getElementById('logo-img');
    const logoImgSmall = document.getElementById('logo-img-small');
    let sidebarOpen = false;

    function toggleSidebar() {
        sidebarOpen = !sidebarOpen;
        
        if (logoImg) {
            logoImg.classList.toggle('hidden-logo', sidebarOpen);
        }
        if (logoImgSmall) {
            logoImgSmall.classList.toggle('hidden-logo', sidebarOpen);
        }
        
        // Trigger the offcanvas menu if it exists
        const offcanvasMenu = document.getElementById('offcanvasMenu');
        if (offcanvasMenu) {
            const bsOffcanvas = new bootstrap.Offcanvas(offcanvasMenu);
            bsOffcanvas.toggle();
        }
        
        // Custom event for sidebar toggle (if needed by other components)
        document.dispatchEvent(new CustomEvent('sidebarToggle', { 
            detail: { isOpen: sidebarOpen } 
        }));
    }

    // Initialize Bootstrap tooltips if they exist
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });

    // Handle dropdown behavior on mobile
    document.addEventListener('DOMContentLoaded', function() {
        const dropdowns = document.querySelectorAll('.dropdown-toggle');
        
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', function(e) {
                // On mobile, ensure proper dropdown behavior
                if (window.innerWidth < 992) {
                    e.preventDefault();
                    const dropdownMenu = this.nextElementSibling;
                    if (dropdownMenu) {
                        dropdownMenu.classList.toggle('show');
                    }
                }
            });
        });
    });

    // Close dropdowns when clicking outside (mobile)
    document.addEventListener('click', function(e) {
        if (window.innerWidth < 992) {
            const dropdowns = document.querySelectorAll('.dropdown-menu.show');
            dropdowns.forEach(dropdown => {
                if (!dropdown.closest('.dropdown').contains(e.target)) {
                    dropdown.classList.remove('show');
                }
            });
        }
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 992) {
            // Close all mobile dropdowns on desktop
            const dropdowns = document.querySelectorAll('.dropdown-menu.show');
            dropdowns.forEach(dropdown => {
                dropdown.classList.remove('show');
            });
        }
    });
</script>