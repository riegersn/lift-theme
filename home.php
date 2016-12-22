<?php get_header(); ?>

<div class="section sec-container">
	<div class="home-welcome">
		This is just some text.
	</div>
</div>

<div class="sec-container">
	<div class="section post-list-container">

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
</div>
<script type="text/javascript">
	jQuery('.post-list-container').masonry({
  		itemSelector: '.post-entry'
	});
</script>

<?php get_footer(); ?>
