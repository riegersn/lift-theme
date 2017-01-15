<?php
/*
Template Name: Subscribe
*/
get_header(); ?>

<div class="content-container subscribe-page">

	<h1>Don't You Want To Earn More Money!?</h1>
	<p>HI! I'm Shawn the LyftGuy. Welcome to my first blog! I'm a husband, father, and lover of all things Lyft! Among other things...</p>
	<p>If you're like me, you want to <strong class="c-blue">dominate ridesharing</strong> and <strong class="c-blue">maximize profits</strong>. That is exactly why I created this site. Whether it's to pay off bills or save for a vacation, I'm here to help you reach those goals.</p>
	<p>This blog is a new and exciting journey for me. So I hope you'll come along for the ride by subscribing to our newsletter below.</p>

	<form action="//thelyftguy.us14.list-manage.com/subscribe/post?u=fa32ac29ec19b61d8e3b4ea47&amp;id=3e8b46ba4a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<p class="input"><input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name"> <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="your@email.com"></p>
		<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_fa32ac29ec19b61d8e3b4ea47_3e8b46ba4a" tabindex="-1" value=""></div>
		<p><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button welcome-button"></p>
	</form>
	<p>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>
	</p>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	<script type='text/javascript' src='http://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
	<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	<p>Thanks,</p>
	<p><?php echo print_svg_image('subscribe-signature', 'lyftguy_text.svg', 'lyftguy_text_75.png'); ?></p>

</div><!-- #container -->

<?php get_footer(); ?>