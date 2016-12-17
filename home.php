<?php get_header(); ?>

<div class="bp-featured-img" style="background-image: url(http://localhost:8888/wp-content/uploads/2016/12/Lyft_PressKit_02.jpg)">
	<div class="home-featured-overlay">
		<div class="hp-promo-wrap">
			<p>
				Hurry! Beat the competition and start driving now! Make up to $1000/week!<br/>
				Sign up now and get up to $500 in bonus cash!
			</p>
				<p>
					<a class="button" href="#" target="_blank">Start Driving Now!</a>
				</p>
		</div>
	</div>
</div>

<div class="hp-wrap">
	<div class="hp-section-header">
		<h1>Latest Blog Posts</h1>
	</div>
	<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part( 'content', get_post_format() );

	endwhile;
	?>

	<!-- <nav>
		<ul class="pager">
			<li><?php next_posts_link( 'Previous' ); ?></li>
			<li><?php previous_posts_link( 'Next' ); ?></li>
		</ul>
	</nav> -->

	<?php
		endif;
	?>

</div>

<?php get_footer(); ?>
