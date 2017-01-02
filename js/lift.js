
jQuery(document).ready(function($) {

	// set the content to masonary style
	$('.c-post-panel').masonry({
  		itemSelector: '.post-entry',
  		isAnimated: false
  	});

	// mobile nav menu, slide on click
	$('.mobile-bars').click(function() {
		var menu = $('.header-menu');
		$('.header-menu').slideToggle();
	});

	// switch to slim-header once scroll reaches content
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