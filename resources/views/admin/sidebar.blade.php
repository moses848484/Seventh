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
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ url('/redirect') }}"><img src="admin/assets/images/faces/sda3.png"
                alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="{{ url('/redirect') }}"><img
                src="admin/assets/images/faces/sda4.png" alt="logo" /></a>
    </div>
    <ul class="nav">

        <li class="nav-item nav-category d-flex justify-content-between align-items-center">
            <span class="nav-link mb-0"><button class="navbar-toggler btn btn-md" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button></span>

            <!-- Toggler button -->

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
<script>
(function ($) {
  'use strict';

  $(function () {
    var sidebarMinimized = false;
    var openDropdowns = [];

    // Detect desktop view
    function isDesktop() {
      return window.innerWidth > 991;
    }

    // Sidebar minimize toggler
    $('[data-toggle="minimize"]').on('click', function () {
      if (!isDesktop()) return;

      sidebarMinimized = !sidebarMinimized;

      if (sidebarMinimized) {
        // Store all currently open dropdowns
        openDropdowns = [];
        $('.sidebar-offcanvas .collapse.show').each(function () {
          openDropdowns.push(this.id);
        });

        // Hide dropdowns and reset icons
        $('.sidebar-offcanvas .collapse.show').each(function () {
          var collapseId = this.id;
          var $toggle = $('.sidebar-offcanvas .nav-link[href="#' + collapseId + '"], .sidebar-offcanvas .nav-link[data-target="#' + collapseId + '"]');

          $(this).collapse('hide');
          $toggle.attr('aria-expanded', 'false');
          $toggle.find('.menu-arrow').css('transform', 'rotate(0deg)');
        });
      } else {
        // Restore dropdowns and icons
        openDropdowns.forEach(function (collapseId) {
          var $collapse = $('#' + collapseId);
          var $toggle = $('.sidebar-offcanvas .nav-link[href="#' + collapseId + '"], .sidebar-offcanvas .nav-link[data-target="#' + collapseId + '"]');

          $collapse.collapse('show');
          $toggle.attr('aria-expanded', 'true');
          $toggle.find('.menu-arrow').css('transform', 'rotate(90deg)');
        });
      }
    });

    // Disable dropdown toggle clicks when minimized
    $('.sidebar-offcanvas .nav-link[data-toggle="collapse"]').on('click', function (e) {
      if (sidebarMinimized && isDesktop()) {
        e.preventDefault();
        e.stopPropagation();
      }
    });
  });
})(jQuery);
</script>
