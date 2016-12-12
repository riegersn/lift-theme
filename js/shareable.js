var sb_stop = jQuery('#subscribe-banner').position().top - 40;

jQuery(window).scroll(function(){
    if (jQuery(window).scrollTop() >= 810) {
      jQuery('.sb-content-wrap').removeClass('sb-fixed-hidden');
       jQuery('.sb-content-wrap').addClass('sb-fixed-content-wrap');
    }
    else if (jQuery(window).scrollTop() >= sb_stop) {
      jQuery('.sb-content-wrap').addClass('sb-fixed-hidden');
    }
    else {
      jQuery('.sb-content-wrap').removeClass('sb-fixed-hidden');
       jQuery('.sb-content-wrap').removeClass('sb-fixed-content-wrap');
    }

});
