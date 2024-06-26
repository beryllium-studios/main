<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package beryllium
 */

get_header();
include 'template-parts/preloader.php';
include 'template-parts/navbar.php';
?>

<!-- 404 -->
<div class="parallax-container">
	<div class="flex-conteiner-fluid text-center justify-content-center error-page">
		<div>
			<svg class="mask-object" viewBox="0 0 431 176">
				<defs>
					<path fill="none" id="thePath" d="M416.1 142.5v31.4h-39.6v-31.4h-74.2v-19L370 5.9h46.1v101.3h14.6v35.3h-14.6zm-196.4 32.6c-34.8 0-63.1-21.1-63.1-57.8v-59c0-36.5 28.3-57.8 63.1-57.8 34.6 0 62.6 21.4 62.6 57.8v59c.1 36.7-28 57.8-62.6 57.8zm-105.1-1.2H75v-31.4H.9v-19L68.5 5.9h46.1v101.3h14.6v35.3h-14.6v31.4z"/>
				</defs>
				<clipPath id="mask">
					<use xlink:href="#thePath"/>
				</clipPath>
				<image clip-path="url(#mask)" width="431" height="176" xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/image_404.jpg" ></image>
				<use xlink:href="#thePath"/>
			</svg>

			<p class="mt-5">
				Let's <a href="<?php echo get_site_url(); ?>">go home</a>, you seem lost.
			</p>
		</div>
	</div>
</div>
<!-- /404 -->

<?php
get_footer();
