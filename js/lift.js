
jQuery(document).ready(function($) {

	// set the content to masonary style
	$('.c-post-panel').masonry({
  		itemSelector: '.post-entry',
  		isAnimated: false
  	});

	// mobile nav menu, slide on click
	$('.mobile-bars').click(function() {
		var menu = $('.header-menu'),
			win_width = $(window).width();

		if (!menu.hasClass('active')) {
			menu.removeClass('nav-item-highlight').addClass('active');
			menu.css('right', '0');
			$('.mobile-bars i').removeClass('fa-bars').addClass('fa-times');
		}
		else {
			menu.css('right', '-'+win_width+'px');
			menu.removeClass('active').addClass('nav-item-highlight');
			$('.mobile-bars i').removeClass('fa-times').addClass('fa-bars');
		}
	});

	// fix to make sure header menu is visible after resize up
	$(window).resize(function() {
		if ( $(window).width() >= 860 ) {
			console.log('testing');
			$('.header-menu').css({
				display: 'block',
				right: ''
			});
		}
	});

	// switch to slim-header once scroll reaches switch point
	$(window).scroll(function() {
    	var switch_point = 100,
    		header = $('.header'),
			scroll_point = $(window).scrollTop();

		if (scroll_point >= switch_point) {
			if ( !header.hasClass('skinny') )
				header.addClass('skinny');
		}
		else {
			if ( header.hasClass('skinny') )
				header.removeClass('skinny');
		}
    });

    $(window).scroll(function() {
    var sb = $('.sb-content-wrap');
    var win_width = $(window).width();
        if (sb.length) {
            var win_height = $(window).height(),
                scroll_top = Math.round($(window).scrollTop()),
                pc_top = $('.post-content').position().top,
                pc_height = $('.post-content').innerHeight(),
                sb_height = sb.height(),
                fp_top = Math.round(pc_top + 40),
                fp_bottom = Math.round(pc_top + pc_height - sb_height);

                // console.log('scroll_top:'+scroll_top+' - fp_bottom:'+fp_bottom);

            if (sb.length && win_width > 1010) {

                if (scroll_top >= fp_top && scroll_top < (fp_bottom - 150)) {
                    console.log('(1) '+scroll_top+'>='+fp_top+' && '+scroll_top+'<'+(fp_bottom-150));
                    sb.css({ 'top': '', 'position': '' });
                    sb.addClass('sb-fixed-content-wrap');
                } else if (scroll_top >= (fp_bottom + 150)) {
                    console.log('(2) '+scroll_top+'>='+(fp_bottom+150));
                    sb.css({ 'position': 'absolute', 'top': fp_bottom });
                    sb.removeClass('sb-fixed-content-wrap');
                } else {
                    console.log('(3) scroll_top:'+scroll_top+' - fp_bottom:'+fp_bottom);
                    sb.css({ 'top': '', 'position': '' });
                    sb.removeClass('sb-fixed-content-wrap');
                }

            } else if (sb.length && win_width < 1010) {

                sb.css({
                    'top': win_height - 47,
                    'left': (win_width / 2) - (sb.width() / 2)
                });

                fp_bottom = fp_bottom - win_height;

                // console.log(scroll_top + ' / ' + fp_top + ' / ' + fp_bottom);

                if (scroll_top >= fp_top && scroll_top < fp_bottom) {
                    sb.css({ 'display': 'inline-block'});
                }
                else {
                    sb.css({ 'display': 'none'});
                }
            }
        }
	});

});