
jQuery(document).ready(function($) {

	// set the content to masonary style
	$('.c-post-panel').masonry({
  		itemSelector: '.post-entry',
  		isAnimated: false
  	});

	// mobile nav menu, slide on click
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
    	var switch_point = 600,
    		header = $('.header'),
    		content = $('.m-content'),
			scroll_point = $(window).scrollTop();

    	// if (header.hasClass('toggled') && scroll_point <= 750)
    	// 	header.finish();

		if (scroll_point >= switch_point) {
			if ( !header.hasClass('toggled') ) {
				content.addClass('freeze-content');
				header.addClass('toggled').addClass('slim-header');
				header.css('top', '');
				header.animate({top: '0'}, '1000');
			}
		}
		else {
			if ( header.hasClass('toggled') ) {
				header.removeClass('toggled');
				header.animate({top: '-120px'}, '200', function() {
					header.css('top', '');
					header.removeClass('slim-header');
					content.removeClass('freeze-content');
				});
			}
		}
    });

});