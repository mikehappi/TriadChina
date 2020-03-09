<?php
/**
 * Triad China functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Triad_China
 */


if ( ! function_exists( 'triadchina_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function triadchina_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on triadchina, use a find and replace
	 * to change 'triadchina' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'triadchina', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'triadchina' ),
	) );
    
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'triadchina' ),
) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'spectrum_agency_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'triadchina_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function spectrum_agency_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'spectrum_agency_content_width', 640 );
}
add_action( 'after_setup_theme', 'spectrum_agency_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function spectrum_agency_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'triadchina' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'triadchina' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'spectrum_agency_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function spectrum_agency_scripts() {

    wp_enqueue_style( 'triadchina-style', get_stylesheet_uri() );
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css'); 
    wp_enqueue_style('bootstrap-theme',get_template_directory_uri().'/css/bootstrap-theme.css'); 
    wp_register_style( 'header', get_template_directory_uri().'/css/header.css', '', null, 'all' );	
    wp_enqueue_style('header');
    wp_register_style( 'footer', get_stylesheet_directory_uri().'/css/footer.css', '', null, 'all' );	
    wp_enqueue_style('footer');
    /* wp_register_style( 'template-contact', get_stylesheet_directory_uri().'/css/template-contact.css', '', null, 'all' );	
    wp_enqueue_style('template-contact');*/
    wp_register_style( 'template-info', get_stylesheet_directory_uri().'/css/template-info.css', '', null, 'all' );	
    wp_enqueue_style('template-info');
 wp_register_style( 'template-contact7', get_stylesheet_directory_uri().'/css/template-contact7.css', '', null, 'all' );	
    wp_enqueue_style('template-contact7');
    wp_enqueue_script('bootstrap-java',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'20161115',true);
    wp_enqueue_script( 'triadchina-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'triadchina-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

/*
*	Return path to Upload file
*/
function wp_upload_dir_url() {
  $upload_dir = wp_upload_dir();
  $upload_dir = $upload_dir['baseurl'];
  return preg_replace('/^https?:/', '', $upload_dir);
};

function wp_upload_subdir_url() {
  $upload_subdir = wp_upload_dir();
  $upload_subdir = $upload_subdir['url'];
  return preg_replace('/^https?:/', '', $upload_subdir);
  //return $upload_subdir;
};

add_action( 'wp_enqueue_scripts', 'spectrum_agency_scripts' );

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
define('WP_UPLOAD_DIR_URL', wp_upload_dir_url() . '/');
define('WP_UPLOAD_SUBDIR_URL', wp_upload_subdir_url() . '/');

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');


add_filter( ‘wp_image_editors’, ‘change_graphic_lib’ );
function change_graphic_lib($array) {
return array( ‘WP_Image_Editor_GD’, ‘WP_Image_Editor_Imagick’ );
}
