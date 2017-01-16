<?php
/*
Template Name: Subscribe
*/
get_header(); ?>

<div class="content-container subscribe-page">

	<h1>Don't You Want To Earn More Money!?</h1>
	<p>HI! I'm Shawn the LyftGuy. Welcome to my first blog! I'm a husband, father, and lover of all things Lyft! <a href="/about">Among other things...</a></p>
	<p>If you're like me, you want to <strong>dominate ridesharing</strong> and <strong>maximize profits</strong>. That is exactly why I created this site. Whether it's to pay off bills or save for a vacation, I'm here to help you reach those goals.</p>
	<p>This blog is a new and exciting journey for me. So I hope you'll come along for the ride by subscribing to our newsletter below.</p>
	<?php get_template_part('partials/subscribe', 'form'); ?>
	<p>Thanks,</p>
	<p><?php echo print_svg_image('subscribe-signature', 'lyftguy_text.svg', 'lyftguy_text_75.png'); ?></p>

</div><!-- #container -->

<?php get_footer(); ?>