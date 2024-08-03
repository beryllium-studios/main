<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package beryllium
 */

get_header(); ?>

	<div class="overlay">
		<div class="content">
			<h1>Oops! You seem to be lost.</h1>
			<p>The page you are looking for does not exist.</p>
			<a href="<?php echo home_url(); ?>" class="btn btn-rounded yellow-and-black-btn">Go Home</a>
		</div>
	</div>

<?php
get_footer();
