
<?php get_header(); ?>

<!--
<m-content> -->
	<div class="c-column">

		<div class="c-row c-header">
			<img class="c-header" src="<?php echo get_template_directory_uri(); ?>/img/welcome_76.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/img/welcome_76_fallback.png'">
		</div>

		<div class="c-row c-panel">
			This is just some text.
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

<script type="text/javascript">
	jQuery('.c-post-panel').masonry({
  		itemSelector: '.post-entry',
  		// isAnimated: false
	});
</script>

<?php get_footer(); ?>
