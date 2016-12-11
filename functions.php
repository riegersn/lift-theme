<?php

// Add scripts and stylesheets
function lift_scripts() {
	wp_enqueue_style( 'shareable', get_template_directory_uri() . '/css/shareable.css' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/29b54b682d.js');
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
	wp_enqueue_script( 'shareable', get_template_directory_uri() . '/js/shareable.js');
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/parallax.min.js');
}

add_action( 'wp_enqueue_scripts', 'lift_scripts' );

// Add Google Fonts
function lift_google_fonts() {
				wp_register_style('Open Sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
				wp_enqueue_style('Open Sans');
		}

add_action('wp_print_styles', 'lift_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields('section');
           do_settings_sections('theme-options');
           submit_button();
       ?>
    </form>
  </div>
<?php }

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
<?php }

function setting_facebook() { ?>
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section('section', 'All Settings', null, 'theme-options');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
  add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');

	register_setting('section', 'twitter');
  register_setting('section', 'facebook');
}
add_action( 'admin_init', 'custom_settings_page_setup' );


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
			<div class="cm-gravatar"><?php echo get_avatar( $comment, 75, '[default gravatar URL]', 'Author’s gravatar' ); ?></div>
			<!-- <div class="comment-meta post-meta" role="complementary">
			</div> -->
			<div class="cm-content">
				<strong><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a></strong>
				<?php if ($comment->comment_approved == '0') : ?>
				<p class="cm-comment">Your comment is awaiting moderation.</p>
				<?php endif; ?>
				<?php comment_text() ?>
				<div class="cm-buttons">
					<?php edit_comment_link('Edit this comment','',''); ?>
					<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</div>
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
