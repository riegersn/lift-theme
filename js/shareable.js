jQuery(window).scroll(function(){

    var sb_content_wrap = jQuery('.sb-content-wrap'),
        scroll_top = jQuery(window).scrollTop(),
        bp_title_top = jQuery('.bp-container > .bp-title').position().top - 33,
        banner_top = jQuery('#bp-signup').position().top - sb_content_wrap.height() - 55;

    if (scroll_top >= bp_title_top && scroll_top < banner_top) {
      sb_content_wrap.removeClass('sb-fixed-hidden');
       sb_content_wrap.addClass('sb-fixed-content-wrap');
    }
    else if (scroll_top > banner_top) {
      sb_content_wrap.addClass('sb-fixed-hidden');
    }
    else {
      sb_content_wrap.removeClass('sb-fixed-hidden');
       sb_content_wrap.removeClass('sb-fixed-content-wrap');
    }

});
