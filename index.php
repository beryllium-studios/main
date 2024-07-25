<?php
/**
 * The home page for our theme
 *
 * This is the template that displays all the home page
 *
 * @package beryllium
 */

get_header();

include 'template-parts/preloader.php';
include 'template-parts/navigation.php';
include 'template-parts/parallax_banner.php';
include 'template-parts/about.php';
include 'template-parts/features.php';
include 'template-parts/team.php';
include 'template-parts/portfolio.php';
include 'template-parts/testimonial.php';
include 'template-parts/brands.php';
include 'template-parts/contact.php';
include 'template-parts/fixed_nav.php';
include 'template-parts/footer.php';

get_footer();