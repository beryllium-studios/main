<?php
/**
 * This component is used to show a preloader when showing a user a page
 * @package beryllium
 */


if (!is_user_logged_in()) { ?>
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader__wrap">
			<img class="preloader__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/icon-white.svg" alt="Beryllium">
			<div class="preloader__progress"><span></span></div>
		</div>
	</div>
<?php } ?>
