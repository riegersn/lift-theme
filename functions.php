<?php

show_admin_bar( false ); // disable the admin bar.

function print_svg_image($img_class, $svg_img, $fallback_img) {
	$template = "<img class=\"%s\" src=\"%s\" onerror=\"this.onerror=null; this.src='%s'\">";
	$svg_img = get_template_directory_uri() . '/img/' . $svg_img;
	$fallback_img = get_template_directory_uri() . '/img/' . $fallback_img;
	return sprintf($template, $img_class, $svg_img, $fallback_img);
}

function lift_scripts() {

	/*-- Scripts -----------------------------*/
	wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/29b54b682d.js');
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
	wp_enqueue_script( 'shareable', get_template_directory_uri() . '/js/shareable.js');
	wp_enqueue_script( 'lift', get_template_directory_uri() . '/js/lift.js');
	wp_enqueue_script( 'masonary', get_template_directory_uri() . '/js/masonry.pkgd.min.js');

	/*-- Stylesheets -------------------------*/
	wp_enqueue_style( 'shareable', get_template_directory_uri() . '/css/shareable.css' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
}

add_action( 'wp_enqueue_scripts', 'lift_scripts' );

/* Fonts
 * ----------------------------------------*/
 function lift_google_fonts() {
	wp_register_style('Open Sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
	wp_enqueue_style('Open Sans');
	wp_register_style('Source Sans Pro', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900');
	wp_enqueue_style('Source Sans Pro');
	wp_register_style('Lato', 'https://fonts.googleapis.com/css?family=Lato:700');
	wp_enqueue_style('Lato');
}

add_action('wp_print_styles', 'lift_google_fonts');


/* Wordpress Theme Support
 * ----------------------------------------*/
add_theme_support( 'title-tag' ); // Titles
add_theme_support( 'post-thumbnails' ); // Support Featured Images

// function new_excerpt_more( $more ) {
//     return '...';
// }
// add_filter('excerpt_more', 'new_excerpt_more');

// function custom_excerpt_length( $length ) {
// 	return 80;
// }
// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wpse_allowedtags() {
    // Add custom tags to this string
        return '<p>';
    }

if ( ! function_exists( 'wpse_custom_wp_trim_excerpt' ) ) :

    function wpse_custom_wp_trim_excerpt($wpse_excerpt) {
    $raw_excerpt = $wpse_excerpt;
        if ( '' == $wpse_excerpt ) {

            $wpse_excerpt = get_the_content('');
            $wpse_excerpt = strip_shortcodes( $wpse_excerpt );
            $wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
            $wpse_excerpt = str_replace(']]>', ']]>', $wpse_excerpt);
            $wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags()); /*IF you need to allow just certain tags. Delete if all tags are allowed */

            //Set the excerpt word count and only break after sentence is complete.
            $excerpt_word_count = 35;
            $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);
            $tokens = array();
            $excerptOutput = '';
            $count = 0;

            // Divide the string into tokens; HTML tags, or words, followed by any whitespace
            preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

            foreach ($tokens[0] as $token) {

                if ($count >= $excerpt_length && preg_match('/[\,\;\?\.\!]\s*$/uS', $token)) {
                // Limit reached, continue until , ; ? . or ! occur at the end
                    $excerptOutput .= trim($token);
                    break;
                }

                // Add words to complete sentence
                $count++;

                // Append what's left of the token
                $excerptOutput .= $token;
            }

            $wpse_excerpt = trim(force_balance_tags($excerptOutput));

            $excerpt_end = ' <a href="'. esc_url( get_permalink() ) . '">' . ' » ' . sprintf(__( 'Read more about: %s  »', 'wpse' ), get_the_title()) . '</a>';
            $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);

            // $pos = strrpos($wpse_excerpt, '</');
            // if ($pos !== false)
            // 	// Inside last HTML tag
            // 	$wpse_excerpt = substr_replace($wpse_excerpt, $excerpt_end, $pos, 0); /* Add read more next to last word */
            // else
            // 	// After the content
            // 	$wpse_excerpt .= $excerpt_more; /*Add read more in new paragraph */

        	// lets remove any punctuation that may be at the end of the excerpt

        	$wpse_excerpt = rtrim(trim($wpse_excerpt), '.!?,<>\/p') . "...";

            return $wpse_excerpt;

        }
        return apply_filters('wpse_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
    }

endif;

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wpse_custom_wp_trim_excerpt');

function register_main_menu() {
  register_nav_menu( 'main-nav-menu',__( 'Main Nav Menu' ));
}
add_action( 'init', 'register_main_menu' );

/* ----------------------------------------*
 * Settings Menu
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
			<div class="cm-content-wrap">
				<a href="<?php comment_author_url(); ?>"><?php echo get_avatar( $comment, 60, 'mystery', 'Author’s gravatar' ); ?></a>
				<div class="cm-content">
					<strong><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a></strong> -
					<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
					<!-- <?php edit_comment_link('Edit this comment','',''); ?> -->
					<?php if ($comment->comment_approved == '0') : ?>
					<p class="cm-comment">Your comment is awaiting moderation.</p>
					<?php endif; ?>
					<?php comment_text() ?>
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
