<?php

/**
 * Carni On-Line functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Carni_On-Line
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function carnionline_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Carni On-Line, use a find and replace
		* to change 'carnionline' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('carnionline', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'carnionline'),
		)
	);
	function registrar_menus()
	{
		// Registrar menú secundario
		register_nav_menu('menu_secundario', __('Menú Secundario'));
	}
	add_action('init', 'registrar_menus');
	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'carnionline_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 50,
			'width'       => 50,
			'flex-width'  => true,
			'flex-height' => true,

		)
	);
}
add_action('after_setup_theme', 'carnionline_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function carnionline_content_width()
{
	$GLOBALS['content_width'] = apply_filters('carnionline_content_width', 640);
}
add_action('after_setup_theme', 'carnionline_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function carnionline_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'carnionline'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'carnionline'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'carnionline_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function carnionline_scripts()
{
	wp_enqueue_style('carnionline-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('carnionline-main', get_template_directory_uri() . '/css/main.css');

	wp_style_add_data('carnionline-style', 'rtl', 'replace');

	wp_enqueue_script('carnionline-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	// Encolar scripts
	wp_enqueue_script('peluditos-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), true);

	wp_enqueue_script('bootstrap-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array('jquery'), '2.11.8', true);

	wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js', array('jquery', 'bootstrap-popper'), '5.3.3', true);

	wp_enqueue_script('peluditos-script', get_template_directory_uri() . '/js/script.js', array('jquery'), true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'carnionline_scripts');

/**
 * Custom Fonts
 */
function enqueue_custom_fonts()
{
	if (!is_admin()) {
		wp_register_style('urbanist', 'https://fonts.googleapis.com/css2?family=Urbanist:wght@100;200;300;400;500;600;700;800;900&display=swap');
		wp_enqueue_style('urbanist');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');





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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}
