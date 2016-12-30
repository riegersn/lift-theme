
<?php get_header(); ?>

<!--
<m-content> -->
	<div class="c-column">

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
