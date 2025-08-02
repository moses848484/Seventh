(function($) {
  'use strict';
  $(function() {
    // Toggle sidebar
    $('[data-bs-toggle="offcanvas"]').on("click", function() {
      $('.sidebar-offcanvas').toggleClass('active');
    });

    // Prevent dropdown toggles when sidebar is collapsed
    $('.sidebar-offcanvas .nav-link[data-bs-toggle="collapse"]').on('click', function(e) {
      if (!$('.sidebar-offcanvas').hasClass('active')) {
        e.preventDefault(); // block dropdown from opening
        e.stopPropagation();
      }
    });
  });
})(jQuery);
