<script>
(function ($) {
  'use strict';

  $(function () {
    var sidebarMinimized = false;

    // Toggle sidebar minimize (button with data-toggle="minimize")
    $('[data-toggle="minimize"]').on('click', function () {
      sidebarMinimized = !sidebarMinimized;

      // If sidebar is minimized, hide any open dropdowns
      if (sidebarMinimized) {
        // Find all open dropdowns and their toggle buttons
        $('.sidebar-offcanvas .collapse.show').each(function() {
          var collapseId = this.id;
          var $toggle = $('.sidebar-offcanvas .nav-link[href="#' + collapseId + '"], .sidebar-offcanvas .nav-link[data-target="#' + collapseId + '"]');
          
          // Hide the dropdown
          $(this).collapse('hide');
          
          // Force reset the toggle button state immediately
          $toggle.attr('aria-expanded', 'false');
          
          // Also force the arrow rotation reset by ensuring the CSS selector doesn't match
          $toggle.find('.menu-arrow').css('transform', 'rotate(0deg)');
        });
        
        // Backup: reset all dropdown toggles in sidebar
        $('.sidebar-offcanvas .nav-link[data-toggle="collapse"]').each(function() {
          $(this).attr('aria-expanded', 'false');
          $(this).find('.menu-arrow').css('transform', 'rotate(0deg)');
        });
      }
    });

    // Prevent dropdown toggle if sidebar is minimized
    $('.sidebar-offcanvas .nav-link[data-toggle="collapse"]').on('click', function (e) {
      if (sidebarMinimized) {
        e.preventDefault(); // Block toggle
        e.stopPropagation();
      }
    });
  });
})(jQuery);
</script>