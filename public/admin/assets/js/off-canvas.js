(function ($) {
    "use strict";
    $(function () {
        $('[data-bs-toggle="offcanvas"]').on("click", function () {
            $(".sidebar-offcanvas").toggleClass("active");

            // If sidebar just got closed, hide all open dropdowns
            if (!$(".sidebar-offcanvas").hasClass("active")) {
                $(".sidebar-offcanvas .collapse.show").removeClass("show");
            }
        });
    });
})(jQuery);
