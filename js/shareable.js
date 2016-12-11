jQuery(function() {

    var $sidebar   = jQuery("#shareable-box"),
        $window    = jQuery(window),
        $offset     = $sidebar.offset();

    $window.scroll(function() {
        if ($window.scrollTop() > $sidebar.offset() - 30) {
           $sidebar.addClass('sb-fixed-content-wrap');
        } else {
           $sidebar.removeClass('sb-fixed-content-wrap');

        }
    });

});
