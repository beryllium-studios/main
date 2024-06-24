<?php
/**
 * This component is used to show the top-most navigation bar
 * @package beryllium
 */
?>
<!-- TOP -->
<nav class="navbar">
	<div class="mr-auto logo-container">
		<a class="logo-link" href="<?php echo get_site_url(); ?>">
			<img class="logotype logotype__front" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/text-logo-horizontal-black.svg" alt="Beryllium.">
			<img class="logotype logotype__back" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/text-logo-horizontal-white.svg" alt="Beryllium.">
		</a>
	</div>
	<div class="ml-sm-auto">
		<button class="hamburger zoom-cursor" type="button">
			<span class="hamburger__inner"></span>
		</button>
	</div>
</nav>
<!-- TOP -->