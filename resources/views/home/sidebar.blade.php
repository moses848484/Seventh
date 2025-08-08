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
    left: -8px !important;
  }

  /* Sub-menu styling */
  .sub-menu .nav-item .nav-link {
    left: -30px !important;
    font-size: 14px;
    transition: all 0.3s ease;
  }

  .sub-menu .nav-item .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.05);
    left: -40px !important;
  }

  .sub-menu .nav-item.active .nav-link {
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: white;
    border-radius: 6px;
    left: -30px !important;
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

  .navbar-toggler.btn {
    background-color: white !important;
    border: none !important;
    border-radius: 0 !important;
    color: white;
    box-shadow: none !important;
    /* Remove any box shadow */
    outline: none !important;
    /* Remove outline on focus */
  }
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="{{ url('/redirect') }}"><img src="admin/assets/images/faces/sda3.png"
        alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="{{ url('/redirect') }}"><img src="admin/assets/images/faces/sda4.png"
        alt="logo" /></a>
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
          <i class="fa-solid fa-house"></i>
        </span>
        <span class="menu-title">Home</span>
      </a>
    </li>

    <li class="nav-item menu-items {{ request()->is('member_registration') ? 'show' : '' }}">
      <a class="nav-link" href="{{ url('member_registration') }}">
        <span class="menu-icon">
          <i class="fa-solid fa-user fa-3x"></i>
        </span>
        <span class="menu-title">Member Registration</span>
      </a>
    </li>

    <li class="nav-item menu-items {{ request()->is('member_givings') ? 'active' : '' }}">
      <a class="nav-link" href="{{ url('member_givings') }}">
        <span class="menu-icon">
          <i class="fa-solid fa-sack-dollar"></i>
        </span>
        <span class="menu-title">Givings</span>
      </a>
    </li>

  </ul>
</nav>
<script>
  (function ($) {
    'use strict';

    $(function () {
      var sidebarMinimized = false;
      var openDropdowns = []; // Store which dropdowns were open

      // Toggle sidebar minimize (button with data-toggle="minimize")
      $('[data-toggle="minimize"]').on('click', function () {
        sidebarMinimized = !sidebarMinimized;

        if (sidebarMinimized) {
          // Store currently open dropdowns before hiding them
          openDropdowns = [];
          $('.sidebar-offcanvas .collapse.show').each(function () {
            openDropdowns.push(this.id);
          });

          // Force close all open dropdowns immediately
          $('.sidebar-offcanvas .collapse.show').each(function () {
            var collapseId = this.id;
            var $toggle = $('.sidebar-offcanvas .nav-link[href="#' + collapseId + '"], .sidebar-offcanvas .nav-link[data-target="#' + collapseId + '"]');

            // Immediately hide the dropdown without animation for instant effect
            $(this).removeClass('show').css('height', '');

            // Reset the toggle button state
            $toggle.attr('aria-expanded', 'false').removeClass('collapsed');
            $toggle.find('.menu-arrow').css('transform', 'rotate(0deg)');
          });

          // Add a class to prevent dropdown functionality when minimized
          $('.sidebar-offcanvas').addClass('sidebar-minimized');

        } else {
          // Remove the minimized class first
          $('.sidebar-offcanvas').removeClass('sidebar-minimized');

          // Small delay to ensure sidebar is expanded before showing dropdowns
          setTimeout(function () {
            // Restore previously open dropdowns when expanding sidebar
            openDropdowns.forEach(function (collapseId) {
              var $collapse = $('#' + collapseId);
              var $toggle = $('.sidebar-offcanvas .nav-link[href="#' + collapseId + '"], .sidebar-offcanvas .nav-link[data-target="#' + collapseId + '"]');

              if ($collapse.length && $toggle.length) {
                $collapse.addClass('show');
                $toggle.attr('aria-expanded', 'true').removeClass('collapsed');
                $toggle.find('.menu-arrow').css('transform', 'rotate(90deg)');
              }
            });
          }, 100);
        }
      });

      // Prevent dropdown toggle if sidebar is minimized
      $('.sidebar-offcanvas .nav-link[data-toggle="collapse"]').on('click', function (e) {
        if (sidebarMinimized || $('.sidebar-offcanvas').hasClass('sidebar-minimized')) {
          e.preventDefault();
          e.stopPropagation();
          return false;
        }
      });

      // Additional safety: Monitor for any dropdowns trying to open when minimized
      $('.sidebar-offcanvas .collapse').on('show.bs.collapse', function (e) {
        if (sidebarMinimized || $('.sidebar-offcanvas').hasClass('sidebar-minimized')) {
          e.preventDefault();
          e.stopPropagation();
          return false;
        }
      });

      // Handle arrow rotation for dropdown toggles
      $('.sidebar-offcanvas .nav-link[data-toggle="collapse"]').on('click', function () {
        if (!sidebarMinimized && !$('.sidebar-offcanvas').hasClass('sidebar-minimized')) {
          var $arrow = $(this).find('.menu-arrow');
          var isExpanded = $(this).attr('aria-expanded') === 'true';

          // Toggle arrow rotation
          if (isExpanded) {
            $arrow.css('transform', 'rotate(0deg)');
          } else {
            $arrow.css('transform', 'rotate(90deg)');
          }
        }
      });
    });
  })(jQuery);
</script>