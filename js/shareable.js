jQuery(window).scroll(function() {
    var sb = jQuery('.sb-content-wrap');
    var win_width = jQuery(window).width();

    if (sb.length) {
        var win_height = jQuery(window).height(),
            scroll_top = Math.round(jQuery(window).scrollTop()),
            pc_top = jQuery('.post-content').position().top,
            pc_height = jQuery('.post-content').innerHeight(),
            sb_height = sb.height(),
            freeze_point_top = Math.round(pc_top - 89),
            freeze_point_bottom = Math.round(pc_top + pc_height - sb_height);

        if (sb.length && win_width > 1010) {
            if (scroll_top >= freeze_point_top && scroll_top < (freeze_point_bottom - 150)) {
                sb.css({ 'top': '', 'position': '' });
                sb.addClass('sb-fixed-content-wrap');
            } else if (scroll_top >= (freeze_point_bottom - 150)) {
                sb.css({ 'position': 'absolute', 'top': freeze_point_bottom });
                sb.removeClass('sb-fixed-content-wrap');
            } else {
                sb.css({ 'top': '', 'position': '' });
                sb.removeClass('sb-fixed-content-wrap');
            }
        } else if (sb.length && win_width < 1010) {

            sb.css({
                'top': win_height - 47,
                'left': (win_width / 2) - (sb.width() / 2)
            });

            freeze_point_bottom = freeze_point_bottom - win_height;

            // console.log(scroll_top + ' / ' + freeze_point_top + ' / ' + freeze_point_bottom);

            if (scroll_top >= freeze_point_top && scroll_top < freeze_point_bottom) {
                sb.css({ 'display': 'inline-block'});
            }
            else {
                sb.css({ 'display': 'none'});
            }
        }
    }


});
