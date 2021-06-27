<?php
/**
 * Corlate Engine Room.
 * This is where all Theme Functions runs.
 *
 * @package corlate
 */
if ( ! function_exists( 'corlatetesttheme_test_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function corlatetesttheme_test_setup() {
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_image_size( 'blog-post', 616, 223, false ); // (cropped)

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'nav-pri'         => esc_html__( 'Primary', 'corlate' ),
			'nav-footer-menu' => esc_html__( 'Footer', 'corlate' ),
		) );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 115,
				'width'       => 52,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		add_theme_support( 'custom-header' );
		/*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );
	}
endif;
add_action( 'after_setup_theme', 'corlatetesttheme_test_setup' );
add_filter( 'postmeta_form_limit', 'meta_limit_increase' );
function meta_limit_increase( $limit ) {
	return 100;
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker() {
	require_once get_template_directory() . '/inc/ss-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );
add_filter( 'nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3 );
function clear_nav_menu_item_id( $id, $item, $args ) {
	return "";
}
// remove width & height attributes from images
//

if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
	wp_enqueue_script('comment-reply', 'wp-includes/js/comment-reply', array(), false, true);
}
function prefix_dynamic_favicon() {
	if ( ! is_singular( 'product' ) ) {
		return;
	}
	$favicon = rwmb_meta( 'favicon', array( 'size' => 'thumbnail' ) );
	$favicon = $favicon ? $favicon['url'] : get_site_icon_url();

	echo "<link rel='shortcut icon' href='$favicon' sizes='115x52' type='image/x-icon'>";
}
add_action( 'wp_head', 'prefix_dynamic_favicon' );
// SMTP email settings
define( 'SMTP_USER', 'youremail@example.com' );
define( 'SMTP_PASS', 'yourpassword' );
define( 'SMTP_HOST', 'smtp.gmail.com' );
define( 'SMTP_FROM', 'youremail@example.guru' );
define( 'SMTP_NAME', 'Tony Florida' );
define( 'SMTP_PORT', '587' );
define( 'SMTP_SECURE', 'tls' );
define( 'SMTP_AUTH', true );
require get_template_directory() . '/inc/functions/function-styles.php';
require get_template_directory() . '/inc/functions/function-scripts.php';
require get_template_directory() . '/inc/functions/functions-custompost.php';
require get_template_directory() . '/inc/functions/function-widgets.php';
require get_template_directory() . '/inc/functions/function-comment-like.php';
require get_template_directory() . '/classes/class-corlate-walker-comment.php';

