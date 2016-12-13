<?php

function lift_scripts() {

	/* scripts
	 * ----------------------------------------*/
	wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/29b54b682d.js');
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
	wp_enqueue_script( 'shareable', get_template_directory_uri() . '/js/shareable.js');
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/parallax.min.js');

	/* stylesheets
	 * ----------------------------------------*/
	wp_enqueue_style( 'shareable', get_template_directory_uri() . '/css/shareable.css' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
}

add_action( 'wp_enqueue_scripts', 'lift_scripts' );

/* fonts
 * ----------------------------------------*/
 function lift_google_fonts() {
	// open sans
	wp_register_style('Open Sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
	wp_enqueue_style('Open Sans');
	// roboto slab
	wp_register_style('Roboto Slab', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700');
	wp_enqueue_style('Roboto Slab');
}

add_action('wp_print_styles', 'lift_google_fonts');


/* Wordpress Theme Support
 * ----------------------------------------*/
add_theme_support( 'title-tag' ); // Titles
add_theme_support( 'post-thumbnails' ); // Support Featured Images


/* ----------------------------------------*
 * settings menu
 * ----------------------------------------*/
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
// add_action( 'admin_menu', 'custom_settings_add_menu' );

class comment_walker extends Walker_Comment {
	var $tree_type = 'comment';
	var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );

	// constructor – wrapper for the comments list
	function __construct() { ?>

		<div class="comments-list">

	<?php }

	// start_lvl – wrapper for child comments list
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$GLOBALS['comment_depth'] = $depth + 2; ?>

		<ol class="child-comments comments-list">

	<?php }

	// end_lvl – closing wrapper for child comments list
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$GLOBALS['comment_depth'] = $depth + 2; ?>

	</ol>

	<?php }

	// start_el – HTML for comment template
	function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
		$depth++;
		$GLOBALS['comment_depth'] = $depth;
		$GLOBALS['comment'] = $comment;
		$parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' );

		if ( 'article' == $args['style'] ) {
			$tag = 'article';
			$add_below = 'comment';
		} else {
			$tag = 'article';
			$add_below = 'comment';
		} ?>

		<li <?php comment_class(empty( $args['has_children'] ) ? '' :'parent') ?> id="comment-<?php comment_ID() ?>">
			<div class="cm-gravatar"><?php echo get_avatar( $comment, 75, 'mystery', 'Author’s gravatar' ); ?></div>
			<div class="cm-content">
				<strong><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a></strong> -
				<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>,
				<?php edit_comment_link('Edit this comment','',''); ?>
				<?php if ($comment->comment_approved == '0') : ?>
				<p class="cm-comment">Your comment is awaiting moderation.</p>
				<?php endif; ?>
				<?php comment_text() ?>
			</div>

	<?php }

	// end_el – closing HTML for comment template
	function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>

	</li>

	<?php }

	// destructor – closing wrapper for the comments list
	function __destruct() { ?>

	</div>

	<?php }

}

function my_update_comment_field( $comment_field ) {

  $comment_field =
    '<p class="comment-form-comment">
            <textarea required id="comment" name="comment" placeholder="' . esc_attr__( "Start talking!", "text-domain" ) . '" cols="45" rows="8" aria-required="true"></textarea>
        </p>';

  return $comment_field;
}
add_filter( 'comment_form_field_comment', 'my_update_comment_field' );

function my_update_comment_fields( $fields ) {

	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$label     = $req ? '*' : ' ' . __( '(optional)', 'text-domain' );
	$aria_req  = $req ? "aria-required='true'" : '';

	$fields['author'] =
		'<p class="comment-form-author">
			<input id="author" name="author" type="text" placeholder="' . esc_attr__( "*Your real name", "text-domain" ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30" ' . $aria_req . ' />
		</p>';

	$fields['email'] =
		'<p class="comment-form-email">
			<input id="email" name="email" type="email" placeholder="' . esc_attr__( "*Your email", "text-domain" ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
		'" size="30" ' . $aria_req . ' />
		</p>';

	$fields['url'] =
		'<p class="comment-form-url">
			<input id="url" name="url" type="url"  placeholder="' . esc_attr__( "Your website (Optional)", "text-domain" ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) .
		'" size="30" />
			</p>';

	return $fields;
}
add_filter( 'comment_form_default_fields', 'my_update_comment_fields' );
