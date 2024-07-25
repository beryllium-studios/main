<?php
add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

// https://wordpress.stackexchange.com/questions/156165/add-custom-classes-to-anchor-in-wp-nav-menu
// Allows us to add custom classes to our links
function wpse156165_menu_add_class( $classes, $item, $args ) {
	if(isset($args->add_link_class)) {
		$classes['class'] = $args->add_link_class;
	}
	return $classes;
}