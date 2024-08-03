<?php
/**
 * Template Name: Error Page
 *
 * @package beryllium
 */

get_header(); ?>

	<div class="overlay">
		<div class="content">
			<h1>Oh no!</h1>
			<p>We are taking care of a tiny issue. Try again.</p>
			<a href="<?php echo home_url(); ?>" class="btn btn-rounded yellow-and-black-btn">Go Home</a>
		</div>
	</div>

<?php
get_footer();
