
jQuery(document).ready(function($) {

	// mobile nav menu, slide on click
	$('.mobile-bars').click(function(){ $('.header-menu').slideToggle(); });
	// fixme: when resized above mobile switch, if toggle was triggered menu display is none
});