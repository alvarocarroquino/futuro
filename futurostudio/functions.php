<?php
/**
 * futurostudio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package futurostudio
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'futurostudio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function futurostudio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on futurostudio, use a find and replace
		 * to change 'futurostudio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'futurostudio', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'futurostudio' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'futurostudio_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'futurostudio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function futurostudio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'futurostudio_content_width', 640 );
}
add_action( 'after_setup_theme', 'futurostudio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


/**
 * Enqueue scripts and styles.
 */
function futurostudio_scripts() {
	wp_enqueue_style( 'futurostudio-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'futurostudio-style', 'rtl', 'replace' );

	wp_enqueue_style('futurostudio-fonts', get_template_directory_uri(). '/css/fonts.css');
	wp_enqueue_style('futurostudio-custom', get_template_directory_uri(). '/css/custom.css');
	wp_enqueue_script( 'futurostudio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'futurostudio_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

function metaslider_change_required_role($capability) {
    return 'metaslider_use'; // this is the ID of a custom capability added using User Role Editor
}
add_filter('metaslider_capability', 'metaslider_change_required_role');



// here we add our location custom post type
// here we add our location custom post type
function add_videointro() {
	$labels = array(
		'name' => _x( 'videointro', 'Post Type General Name', 'text_domain' ),
		'singular_name' => _x( 'videointro', 'Post Type Singular Name', 'text_domain' ),
	);
	$args = array(
		'labels'                => $labels,
		'taxonomies'            => array( 'category' ),
		'public'                => true,
	);
	register_post_type( 'videointro', $args );
}

add_action( 'init', 'add_videointro', 0 );


function add_referencias() {
	$labels = array(
		'name' => _x( 'referencias', 'Post Type General Name', 'text_domain' ),
		'singular_name' => _x( 'referencias', 'Post Type Singular Name', 'text_domain' ),
	);
	$args = array(
		'labels'                => $labels,
		'taxonomies'            => array( 'category' ),
		'public'                => true,
	);
	register_post_type( 'referencias', $args );
}

add_action( 'init', 'add_referencias', 0 );
