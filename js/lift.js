
jQuery(document).ready(function($) {

	// mobile nav menu, slide on click
	$('.mobile-bars').click(function(){ $('.header-menu').slideToggle(); });
	// fixme: when resized above mobile switch, if toggle was triggered menu display is none
	// switch to slim-nav once scroll reaches content
	$(window).scroll(function() {
    	var header = $('.header'),
    		content = $('.post-title').position().top - 138,
			scroll_top = Math.round($(window).scrollTop());

		if (scroll_top >= content) {
			if ( !header.hasClass('slim-nav') )
				header.addClass('slim-nav');
		}
		else {
			if ( header.hasClass('slim-nav') )
				header.removeClass('slim-nav');
		}
    });

});