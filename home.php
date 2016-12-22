
<?php get_header(); ?>

<!--
<m-content> -->
	<div class="c-column">

		<div class="c-panel">
				This is just some text.
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
  		itemSelector: '.post-entry'
	});
</script>

<?php get_footer(); ?>
