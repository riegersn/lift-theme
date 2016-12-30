
jQuery(document).ready(function($) {

	// set the content to masonary style
	$('.c-post-panel').masonry({
  		itemSelector: '.post-entry',
  		isAnimated: false
  	});

	// mobile nav menu, slide on click
	$('.mobile-bars').click(function(){ $('.header-menu').slideToggle(); });
	// fixme: when resized above mobile switch, if toggle was triggered menu display is none


	// cleanup the dispaly property left by jquery toggle
	$(window).resize(function() {
		if ( $(window).width() > 860 ) {
			if ( $('.header-menu').css('display') == 'none' )
				$('.header-menu').css('display', '');
		}
	});

	// switch to slim-nav once scroll reaches content
	$(window).scroll(function() {
    	var header = $('.header'),
    		content = $('.post-title').position().top - 220,
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