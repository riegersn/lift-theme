<?php
/*
Template Name: About
*/
get_header(); ?>

<div class="content-container">

	<h1>About Me</h1>
	<?php print_image('about-image alignleft', 'about.jpg', 'margin-top: 10px;'); ?>
	<p>HI! I'm Shawn the LyftGuy. Welcome to my first blog! I'm a husband, father, and lover of all things Lyft!</p>
	<p>I was born in Odessa TX, but I grew up in South Jersey, a quick 15 minute ride to the Ben Franklin bridge into Philadelphia. Played baseball in high school and for my the local township. Yet my true interests lied behind the computer, with programming.</p>
	<p>I taught myself programming in Visual Basic 6 at a young age and was completely sucked in. So after high school I received my degree in CIS from the local community college. After which I joined TD Bank to work in their IT Help Desk.</p>
	<p>Before long I found myself tinkering with programming again. I had discovered a new startup out of New York called Boxee. My life changed.</p>
	<p>Boxee was a cross-platform media application, like Roku and Amazon Fire TV. Anyone could write apps and have them added to the Boxee "app store", so I started writing them in my personal time.</p>
	<p>One day in mid-2009 I received an email from the CEO of Boxee. They wanted to hire me to build their in-house applications. The next 5 years went by so fast. In 2013 Samsung stepped in with their big pockets and gobbled everything up. I currently work for a multinational networking equipment manufacturer, long story.</p>
	<p>Now married to my lovely wife Megan. Together we have a beautiful son Collin who you can see in the picture above. We purchased our first home together in 2014 and we’re enjoying every minute of it.</p>
	<p>If you made it this far I'm impressed! Won't you please subscribe?</p>
	<?php get_template_part('partials/subscribe', 'form'); ?>
</div><!-- #container -->

<?php get_footer(); ?>