
jQuery(document).ready(function($) {

	// set the content to masonary style
	$('.c-post-panel').masonry({
  		itemSelector: '.post-entry',
  		isAnimated: false
  	});

	// mobile nav menu, slide on click
	// fixme: when resized above mobile switch, if toggle was triggered menu display is none
	$('.mobile-bars').click(function(){ $('.mobile-menu').slideToggle(); });

	// cleanup the dispaly property left by jquery toggle
	$(window).resize(function() {
		if ( $(window).width() > 860 ) {
			if ( $('.header-menu').css('display') == 'none' )
				$('.header-menu').css('display', '');
		}
	});

	// switch to slim-header once scroll reaches content
	$(window).scroll(function() {
    	var header = $('.header'),
    		mobile = $('.mobile-menu'),
    		switch_point = 400,
			scroll_point = $(window).scrollTop();

		if (scroll_point >= switch_point) {
			if ( !header.hasClass('toggled') ) {
				mobile.css('top', '55px');
				header.css('top', '');
				header.addClass('toggled').addClass('slim-header');
				header.animate({top: '0'}, 'fast');
			}
		}
		else {
			if ( header.hasClass('toggled') ) {
				header.removeClass('toggled');

				if (mobile.is(':visible')) {
					mobile.hide();
				}

				mobile.css('top', '90px');

				header.animate({top: '-120px'}, 'fast', function() {
					header.removeClass('slim-header');
					header.css('top', '');
				});
			}
		}
    });

});