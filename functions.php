<?php
/**
 * beryllium functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package beryllium
 */

require 'inc/custom_post_types.php';
require 'inc/WP_Custom_Nav_Walker.php';
require 'inc/custom_filters.php';
require 'inc/custom_fields_staff.php';
require 'inc/custom_fields_job_listings.php';
require 'inc/custom_fields_articles.php';
require 'inc/custom_fields_case_study.php';
require 'inc/custom_fields_author_settings.php';

// register all API endpoints
require 'inc/api/quiz.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function beryllium_setup(): void {
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
			'beryllium-menu' => esc_html__( 'Primary', 'beryllium' ),
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
}

add_action( 'after_setup_theme', 'beryllium_setup' );

/**
 * Enqueue scripts and styles.
 */
function beryllium_scripts(): void {
	wp_enqueue_style( 'beryllium-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'beryllium-style', 'rtl', 'replace' );

	wp_enqueue_style( 'beryllium-style-vendor-line', get_template_directory_uri() . '/styles/vendor/LineIcons.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'beryllium-style-vendor-rev', get_template_directory_uri() . '/styles/vendor/revolution-settings.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'beryllium-style-vendor-fancybox', get_template_directory_uri() . '/styles/vendor/jquery.fancybox.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'beryllium-style-vendor-owl', get_template_directory_uri() . '/styles/vendor/owl.carousel.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'beryllium-style-vendor-cube', get_template_directory_uri() . '/styles/vendor/cubeportfolio.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'beryllium-style-vendor-wow', get_template_directory_uri() . '/styles/vendor/wow.css', array(), _S_VERSION );
	wp_enqueue_style( 'beryllium-style-vendor-bundle', get_template_directory_uri() . '/styles/vendor/bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'beryllium-slick', get_template_directory_uri() . '/styles/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'beryllium-slick-theme', get_template_directory_uri() . '/styles/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'beryllium-style-main', get_template_directory_uri() . '/styles/style.css', array(), _S_VERSION );


	wp_enqueue_script( 'beryllium-vendor-bundle-js', get_template_directory_uri() . '/js/vendor/bundle.min.js', array(), _S_VERSION );
	wp_enqueue_script( 'beryllium-vendor-contact', get_template_directory_uri() . '/js/vendor/contact_us.js', array(), _S_VERSION );
	wp_enqueue_script( 'beryllium-vendor-appear', get_template_directory_uri() . '/js/vendor/jquery.appear.js', array(), _S_VERSION );
	wp_enqueue_script( 'beryllium-vendor-cube-js', get_template_directory_uri() . '/js/vendor/jquery.cubeportfolio.min.js', array(), _S_VERSION );
	wp_enqueue_script( 'beryllium-vendor-fancy-js', get_template_directory_uri() . '/js/vendor/jquery.fancybox.min.js', array(), _S_VERSION );
	wp_enqueue_script( 'beryllium-vendor-owl-js', get_template_directory_uri() . '/js/vendor/owl.carousel.min.js', array(), _S_VERSION );
	wp_enqueue_script( 'beryllium-vendor-parallaxie', get_template_directory_uri() . '/js/vendor/parallaxie.min.js', array(), _S_VERSION );
	wp_enqueue_script( 'beryllium-vendor-wow-js', get_template_directory_uri() . '/js/vendor/wow.min.js', array(), _S_VERSION );
	wp_enqueue_script( 'beryllium-slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), _S_VERSION );
	wp_enqueue_script( 'beryllium-script-js', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION );
	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/3e706aa444.js', array(), _S_VERSION );

	// Loads google fonts for our use
	wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap', false );
}

add_action( 'wp_enqueue_scripts', 'beryllium_scripts', 0 );

function quiz_page_scripts(): void {
	// load only if on the quiz template page
	if (get_page_template_slug() === 'template-quiz.php') {
		// we must use the same version of React and react-dom as the application
		wp_enqueue_script('react', 'https://unpkg.com/react@18/umd/react.production.min.js', array(), null, true);
		wp_enqueue_script('react-dom', 'https://unpkg.com/react-dom@18/umd/react-dom.production.min.js', array('react'), null, true);

		// Make sure to load the files once the DOM has loaded - add event listener in the React app for that - to load on to #root element.
		wp_enqueue_script('bes-react-quiz-js', get_template_directory_uri() . '/js/quiz/main.f6d6e5fe.js', array(), _S_VERSION);
		wp_enqueue_style('bes-react-quiz-css', get_template_directory_uri() . '/styles/quiz/main.a730fcb0.css', array(), _S_VERSION);
 	}
}

add_action( 'wp_enqueue_scripts', 'quiz_page_scripts', 99 );

/**
 * @param $e
 * Returns iterable element passed in (assuming) as a pretty version of var_dump
 * @return void
 */
function echoV( $e ): void {
	print "session: <br><pre>" . print_r( $e, true ) . "</pre><BR>";
}

function is_prod(): bool {
	// Get the current site's URL
	$site_url = get_site_url();

	return str_contains( $site_url, 'www.berylliumstudios.com' );
}

function calculate_reading_time($post_id) {
	// Get the content of the post
	$content = get_post_field('post_content', $post_id);

	// Calculate the number of words
	$word_count = str_word_count(strip_tags($content));

	// Average reading speed (words per minute)
	$reading_speed = 200;

	// Calculate reading time in minutes
	return ceil( $word_count / $reading_speed);
}

function custom_admin_experience() {
	if ( is_admin() ) {
		wp_enqueue_style( 'beryllium-admin-style', get_template_directory_uri() . '/styles/admin.css', array(), _S_VERSION );
	}
}

add_action( 'admin_enqueue_scripts', 'custom_admin_experience' );