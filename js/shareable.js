jQuery(window).scroll(function() {
  var sb_content_wrap = jQuery('.sb-content-wrap');

  if (sb_content_wrap.length) {

    var scroll_top = Math.round(jQuery(window).scrollTop()),
        pc_top = jQuery('.post-content').position().top,
        pc_height = jQuery('.post-content').innerHeight(),
        sb_content_height = sb_content_wrap.height(),
        freeze_point_top = Math.round(pc_top - 89),
        freeze_point_bottom = Math.round(pc_top + pc_height - sb_content_height - 150);

    if (scroll_top >= freeze_point_top && scroll_top < freeze_point_bottom) {
      sb_content_wrap.css({'top': '', 'position': ''});
      sb_content_wrap.addClass('sb-fixed-content-wrap');
    }
    else if (scroll_top >= freeze_point_bottom) {
      sb_content_wrap.css({'position': 'absolute', 'top': freeze_point_bottom + 150});
      sb_content_wrap.removeClass('sb-fixed-content-wrap');
    }
    else {
      sb_content_wrap.css({'top': '', 'position': ''});
      sb_content_wrap.removeClass('sb-fixed-content-wrap');
    }
  }
});