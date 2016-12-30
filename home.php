
<?php get_header(); ?>

<!--
<m-content> -->
	<div class="c-column">

		<div class="c-row c-header">
			<img class="c-header" src="<?php echo get_template_directory_uri(); ?>/img/welcome_76.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/img/welcome_76_fallback.png'">
		</div>

		<div class="c-row c-panel">
			<p>Hi, I'm Shawn. I'm a husband, father and a Lyft driver in the NJ area. After driving with both Uber &amp; Lyft for some time, I found it to be exciting, stimulating and financially bennificial. As I began to see weekly payouts ranging from $400-600, then nearly $800 a week, I knew this driving thing was real.</p>
			<p></p>
			<p></p>
		</div>

		<div class="c-row c-header">
			<img class="c-header" src="<?php echo get_template_directory_uri(); ?>/img/the_blog_140.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/img/the_blog_140_fallback.png'">
		</div>

		<div class="c-post-panel">

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
				endwhile;
			?>

			<!--
			<ul class="pager">
					<li><?php next_posts_link( 'Previous' ); ?></li>
					<li><?php previous_posts_link( 'Next' ); ?></li>
				</ul>
			-->

			<?php
				endif;
			?>

		</div>

	</div> <!-- /.c-column -->
</div> <!-- /.m-content -->


<?php get_footer(); ?>
