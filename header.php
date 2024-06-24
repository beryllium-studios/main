<?php
/**
 * The header for our theme
 *
 * This is the template that displays all the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package beryllium
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php get_the_title(); ?></title>

	<!-- Meta Data -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="format-detection" content="address=no"/>
	<meta name="author" content="ArtStyles" />
	<meta name="description" content="A trendy, minimalistic and ultra modern HTML5 template for digital agency." />

	<!-- Favicons -->
	<!-- `sizes="any"` is to fix Chrome bug -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" sizes="any" />
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo/icon.svg" type="image/svg+xml" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo/apple-touch-icon.png" />
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo/manifest.webmanifest" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>