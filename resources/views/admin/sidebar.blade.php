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
    .nav-item.menu-items.active > .nav-link {
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
    .nav-item.menu-items.active > .nav-link .menu-icon {
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

    /* Modal sidebar styles */
    .modal-dialog-sidebar {
        position: fixed;
        margin: 0;
        width: 270px;
        height: 100%;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
        -webkit-transition: -webkit-transform 0.3s ease-out;
        -o-transition: transform 0.3s ease-out;
        transition: transform 0.3s ease-out;
        left: 0;
        top: 0;
    }

    .modal.fade .modal-dialog-sidebar {
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
    }

    .modal.show .modal-dialog-sidebar {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .modal-backdrop {
        display: none !important;
    }

    /* Sidebar styling */
    .sidebar-modal .modal-content {
        height: 100vh;
        border-radius: 0;
        border: none;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
    }

    .sidebar-brand-wrapper {
        padding: 1rem;
        text-align: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .sidebar-brand img {
        max-height: 40px;
        width: auto;
    }

    /* Mobile sidebar toggle button */
    .sidebar-toggle {
        position: fixed;
        top: 20px;
        left: 20px;
        z-index: 1050;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 8px;
        padding: 10px 12px;
        color: white;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        transition: all 0.3s ease;
    }

    .sidebar-toggle:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
    }

    .sidebar-toggle:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.3);
    }

    /* Hide toggle on desktop */
    @media (min-width: 992px) {
        .sidebar-toggle {
            display: none;
        }
    }

    /* Desktop sidebar - always visible */
    @media (min-width: 992px) {
        .sidebar-desktop {
            position: fixed;
            left: 0;
            top: 0;
            width: 270px;
            height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            z-index: 1000;
            overflow-y: auto;
        }
    }

    /* Hide desktop sidebar on mobile */
    @media (max-width: 991px) {
        .sidebar-desktop {
            display: none;
        }
    }
</style>

<!-- Mobile Sidebar Toggle Button -->
<button class="btn sidebar-toggle d-lg-none" type="button" data-toggle="modal" data-target="#sidebarModal" data-backdrop="false">
    <i class="mdi mdi-menu"></i>
</button>

<!-- Desktop Sidebar -->
<div class="sidebar-desktop d-none d-lg-block">
    <div class="sidebar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="sidebar-brand brand-logo" href="{{ url('/redirect') }}">
            <img src="admin/assets/images/faces/sda3.png" alt="logo" />
        </a>
    </div>
    
    <ul class="nav flex-column p-3">
        <li class="nav-item nav-category">
            <span class="nav-link text-light">Navigation</span>
        </li>
        <li class="nav-item menu-items {{ request()->is('/redirect') ? 'active' : '' }}">
            <a class="nav-link text-light" href="{{ url('/redirected') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item menu-items {{ request()->is('view_members') || request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
            <a class="nav-link text-light" data-toggle="collapse" href="#ui-basic-desktop"
                aria-expanded="{{ request()->is('view_members') || request()->is('see_members') ? 'true' : 'false' }}"
                aria-controls="ui-basic-desktop">
                <span class="menu-icon">
                    <i class="fa-solid fa-users"></i>
                </span>
                <span class="menu-title">Manage Members</span>
                <i class="mdi mdi-chevron-left menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('view_members') || request()->is('see_members') ? 'show' : '' }}"
                id="ui-basic-desktop">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ request()->is('view_members') ? 'active' : '' }}">
                        <a class="nav-link text-light" href="{{ url('view_members') }}">
                            <i class="fa-solid fa-user-plus"></i>&nbsp;Register Members
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
                        <a class="nav-link text-light" href="{{ url('see_members') }}">
                            <i class="fa-solid fa-eye"></i>&nbsp;View Members
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items {{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : '' }}">
            <a class="nav-link text-light" data-toggle="collapse" href="#auth-desktop"
                aria-expanded="{{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'true' : 'false' }}"
                aria-controls="auth-desktop">
                <span class="menu-icon">
                    <i class="fa-solid fa-warehouse"></i>
                </span>
                <span class="menu-title">Inventory</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'show' : '' }}"
                id="auth-desktop">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ request()->is('view_inventory') ? 'active' : '' }}">
                        <a class="nav-link text-light" href="{{ url('view_inventory') }}">
                            <i class="fa-solid fa-plus"></i>&nbsp; Add Inventory
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : '' }}">
                        <a class="nav-link text-light" href="{{ url('show_inventory') }}">
                            <i class="fa-solid fa-list"></i>&nbsp;Show Inventory
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'active' : '' }}">
            <a class="nav-link text-light" data-toggle="collapse" href="#strategicPlanning-desktop"
                aria-expanded="{{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'true' : 'false' }}"
                aria-controls="strategicPlanning-desktop">
                <span class="menu-icon">
                    <i class="fa-solid fa-briefcase"></i>
                </span>
                <span class="menu-title">Strategic Planning</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'show' : '' }}"
                id="strategicPlanning-desktop">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item menu-items {{ request()->is('scorecard') || request()->is('update_scorecard/*') ? 'active' : '' }}">
                        <a class="nav-link text-light" href="{{ url('scorecard') }}">
                            <i class="fa-solid fa-chart-line"></i>&nbsp;Create Scorecard
                        </a>
                    </li>
                    <li class="nav-item menu-items {{ request()->is('strategic_plan') || request()->is('update_scorecard/*') ? 'active' : '' }}">
                        <a class="nav-link text-light" href="{{ url('strategic_plan') }}">
                            <i class="fa-solid fa-tasks"></i>&nbsp;Create Work Plan
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items {{ request()->is('time_management') ? 'active' : '' }}">
            <a class="nav-link text-light" href="{{ url('time_management') }}">
                <span class="menu-icon">
                    <i class="fa-solid fa-clock"></i>
                </span>
                <span class="menu-title">Time Management</span>
            </a>
        </li>

        <li class="nav-item menu-items {{ request()->is('departments') ? 'active' : '' }}">
            <a class="nav-link text-light" href="{{ url('departments') }}">
                <span class="menu-icon">
                    <i class="fa-solid fa-building"></i>
                </span>
                <span class="menu-title">Departments</span>
            </a>
        </li>

        <li class="nav-item menu-items {{ request()->is('view_givings') ? 'active' : '' }}">
            <a class="nav-link text-light" href="{{ url('view_givings') }}">
                <span class="menu-icon">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                </span>
                <span class="menu-title">Givings</span>
            </a>
        </li>

        <li class="nav-item menu-items {{ request()->is('see_users') || request()->is('update_user/*') ? 'active' : '' }}">
            <a class="nav-link text-light" href="{{ url('see_users') }}">
                <span class="menu-icon">
                    <i class="fa-solid fa-users-cog"></i>
                </span>
                <span class="menu-title">Users</span>
            </a>
        </li>

        <li class="nav-item menu-items {{ request()->is('view') ? 'active' : '' }}">
            <a class="nav-link text-light" href="{{ url('#') }}">
                <span class="menu-icon">
                    <i class="fa-solid fa-user-tie"></i>
                </span>
                <span class="menu-title">Human Resource</span>
            </a>
        </li>
    </ul>
</div>

<!-- Bootstrap 4 Modal for Mobile Sidebar -->
<div class="modal fade sidebar-modal" id="sidebarModal" tabindex="-1" role="dialog" aria-labelledby="sidebarModalLabel" aria-hidden="true" data-backdrop="false" data-keyboard="true">
    <div class="modal-dialog modal-dialog-sidebar" role="document">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="sidebar-brand-wrapper d-flex align-items-center justify-content-between">
                <a class="sidebar-brand brand-logo" href="{{ url('/redirect') }}">
                    <img src="admin/assets/images/faces/sda3.png" alt="logo" />
                </a>
                <button type="button" class="btn btn-sm text-light" data-dismiss="modal" aria-label="Close"
                    style="border: none; background: transparent; font-size: 1.2rem;">
                    <i class="mdi mdi-close"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body p-0" style="overflow-y: auto;">
                <ul class="nav flex-column p-3">
                    <li class="nav-item nav-category">
                        <span class="nav-link text-light">Navigation</span>
                    </li>
                    <li class="nav-item menu-items {{ request()->is('/redirect') ? 'active' : '' }}">
                        <a class="nav-link text-light" href="{{ url('/redirected') }}">
                            <span class="menu-icon">
                                <i class="mdi mdi-speedometer"></i>
                            </span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item menu-items {{ request()->is('view_members') || request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
                        <a class="nav-link text-light" data-toggle="collapse" href="#ui-basic"
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
                                    <a class="nav-link text-light" href="{{ url('view_members') }}">
                                        <i class="fa-solid fa-user-plus"></i>&nbsp;Register Members
                                    </a>
                                </li>
                                <li class="nav-item {{ request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
                                    <a class="nav-link text-light" href="{{ url('see_members') }}">
                                        <i class="fa-solid fa-eye"></i>&nbsp;View Members
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item menu-items {{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : '' }}">
                        <a class="nav-link text-light" data-toggle="collapse" href="#auth"
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
                                    <a class="nav-link text-light" href="{{ url('view_inventory') }}">
                                        <i class="fa-solid fa-plus"></i>&nbsp; Add Inventory
                                    </a>
                                </li>
                                <li class="nav-item {{ request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : '' }}">
                                    <a class="nav-link text-light" href="{{ url('show_inventory') }}">
                                        <i class="fa-solid fa-list"></i>&nbsp;Show Inventory
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item menu-items {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'active' : '' }}">
                        <a class="nav-link text-light" data-toggle="collapse" href="#strategicPlanning"
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
                                    <a class="nav-link text-light" href="{{ url('scorecard') }}">
                                        <i class="fa-solid fa-chart-line"></i>&nbsp;Create Scorecard
                                    </a>
                                </li>
                                <li class="nav-item menu-items {{ request()->is('strategic_plan') || request()->is('update_scorecard/*') ? 'active' : '' }}">
                                    <a class="nav-link text-light" href="{{ url('strategic_plan') }}">
                                        <i class="fa-solid fa-tasks"></i>&nbsp;Create Work Plan
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item menu-items {{ request()->is('time_management') ? 'active' : '' }}">
                        <a class="nav-link text-light" href="{{ url('time_management') }}">
                            <span class="menu-icon">
                                <i class="fa-solid fa-clock"></i>
                            </span>
                            <span class="menu-title">Time Management</span>
                        </a>
                    </li>

                    <li class="nav-item menu-items {{ request()->is('departments') ? 'active' : '' }}">
                        <a class="nav-link text-light" href="{{ url('departments') }}">
                            <span class="menu-icon">
                                <i class="fa-solid fa-building"></i>
                            </span>
                            <span class="menu-title">Departments</span>
                        </a>
                    </li>

                    <li class="nav-item menu-items {{ request()->is('view_givings') ? 'active' : '' }}">
                        <a class="nav-link text-light" href="{{ url('view_givings') }}">
                            <span class="menu-icon">
                                <i class="fa-solid fa-hand-holding-heart"></i>
                            </span>
                            <span class="menu-title">Givings</span>
                        </a>
                    </li>

                    <li class="nav-item menu-items {{ request()->is('see_users') || request()->is('update_user/*') ? 'active' : '' }}">
                        <a class="nav-link text-light" href="{{ url('see_users') }}">
                            <span class="menu-icon">
                                <i class="fa-solid fa-users-cog"></i>
                            </span>
                            <span class="menu-title">Users</span>
                        </a>
                    </li>

                    <li class="nav-item menu-items {{ request()->is('view') ? 'active' : '' }}">
                        <a class="nav-link text-light" href="{{ url('#') }}">
                            <span class="menu-icon">
                                <i class="fa-solid fa-user-tie"></i>
                            </span>
                            <span class="menu-title">Human Resource</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('sidebarModal');
        const toggleButton = document.querySelector('[data-target="#sidebarModal"]');

        if (modal && toggleButton) {
            // Hide toggle when modal is shown
            $(modal).on('show.bs.modal', function () {
                toggleButton.style.display = 'none';
            });

            // Show toggle when modal is hidden
            $(modal).on('hidden.bs.modal', function () {
                toggleButton.style.display = 'block';
            });

            // Close modal when clicking outside
            document.addEventListener('click', function (event) {
                const clickedInsideModal = event.target.closest('#sidebarModal');
                const clickedToggle = event.target.closest('[data-target="#sidebarModal"]');

                if (!clickedInsideModal && !clickedToggle) {
                    // Close modal if it's open and clicked outside
                    if ($(modal).hasClass('show')) {
                        $(modal).modal('hide');
                    }
                }
            });

            // Auto-close modal when navigation links are clicked
            const navLinks = document.querySelectorAll('#sidebarModal .nav-link[href]:not([data-toggle="collapse"])');
            navLinks.forEach(function (link) {
                link.addEventListener('click', function () {
                    $(modal).modal('hide');
                });
            });
        }
    });
</script>