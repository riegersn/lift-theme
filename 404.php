<?php get_header(); ?>

<div class="container">
	<h1>404</h1>
	<p>Nothing to see here. <a href="http://localhost:8888">Go home.</a></p>

	<h3>Pages</h3>
	<ul>
		<?php wp_list_pages( array( 'title_li' => '' ) ); ?>
	</ul>

	<h3>Posts</h3>
	<ul>
		<?php $lastposts = get_posts( array('numberposts' => -1) );
			if ( $lastposts ) {
			    foreach ( $lastposts as $post ) :
			        setup_postdata( $post ); ?>

		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

		<?php endforeach;
			wp_reset_postdata();
		} ?>
	</ul>
</div>
<?php get_footer(); ?>