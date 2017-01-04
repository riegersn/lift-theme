
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

	/**
	 * Shareable: Managing scroll and position
	 */
	if ($('.sb-content-wrap').length) { // if this doesn't exist just move on
	    $(window).scroll(function() {

		    var sb = $('.sb-content-wrap'),
		    	mobile = $('.mobile-bars'),
		    	post_image = $('.post-featured-image'),
		    	header = $('.header'),
				win_height = $(window).height(),
	            scroll_top = Math.round($(window).scrollTop()),
	            pc_top = $('.post-content').position().top,
	            pc_height = $('.post-content').innerHeight(),
	            sb_height = sb.height(),
	            fp_top = Math.round(pc_top + 40),
	            fp_bottom = Math.round(pc_top + pc_height - sb_height);

            // console.log('scroll_top:'+scroll_top+' - fp_bottom:'+fp_bottom);

            var win_width = $(window).width();

	        if (mobile.is(':visible')) {

	            sb.css({
	                'top': win_height - 47,
	                'left': (win_width / 2) - (sb.width() / 2)
	            });

	            fp_bottom = fp_bottom - win_height;

	            console.log(scroll_top + ' / ' + fp_top + ' / ' + fp_bottom);

	            if (scroll_top >= fp_top && scroll_top < fp_bottom) {
	                sb.css({ 'display': 'inline-block'});
	            }
	            else {
	                sb.css({ 'display': 'none'});
	            }

	        } else {

	        	var fp_start,
	        		fp_stop,
	        		sbv_height = sb.height(),
	        		post_content_h = $('.post-content').height();

		        fp_start = 100 + // m_content.margin-top
		        		   650 - // post_featured_image.height
		        		   65;  // header.height

		        fp_stop = fp_start +
		        		  post_content_h - // post_content.height
		        		  sbv_height - // shareable height (verticle)
		        		  65; // header.height

		        // console.log(scroll_top + ' / ' + fp_start + ' / ' + fp_stop);

	            if (scroll_top >= fp_start && scroll_top < fp_stop) {

	            	// freeze the container when scroll reaches the defined freeze pos
	                if (!sb.hasClass('sb-fixed-content-wrap'))
		                sb.css({'top':'','position':'' }).addClass('sb-fixed-content-wrap');

	            } else if (scroll_top >= fp_stop) {

	            	// unfreeze the container when scroll reaches the defined freeze pos
                	if (sb.hasClass('sb-fixed-content-wrap'))
                		sb.removeClass('sb-fixed-content-wrap').css({'position':'absolute','top':fp_stop+100});

	            } else {

	            	// return to normal pos
	                sb.css({ 'top': '', 'position': '' });
	                sb.removeClass('sb-fixed-content-wrap');
	            }
	        }
		});
	}

});