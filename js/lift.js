
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

});