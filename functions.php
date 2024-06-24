<?php
/**
 * beryllium functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package beryllium
 */

require 'inc/custom_post_types.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function beryllium_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on beryllium, use a find and replace
		* to change 'beryllium' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'beryllium', get_template_directory() . '/languages' );

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
			'menu-primary' => esc_html__( 'Primary', 'beryllium' ),
		)
	);

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
add_action( 'after_setup_theme', 'beryllium_setup' );

/**
 * Enqueue scripts and styles.
 */
function beryllium_scripts() {
	wp_enqueue_style( 'beryllium-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'beryllium-style', 'rtl', 'replace' );

	wp_enqueue_script( 'beryllium-jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'beryllium-plugins', get_template_directory_uri() . '/js/plugins.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'beryllium-common', get_template_directory_uri() . '/js/common.js', array(), _S_VERSION, true );


	wp_enqueue_style('beryllium-style-main', get_template_directory_uri() . '/assets/styles/style.css' , array(), _S_VERSION);

	wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap', false );
}

add_action( 'wp_enqueue_scripts', 'beryllium_scripts', 0 );


