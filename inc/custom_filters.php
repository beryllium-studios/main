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

add_filter( 'get_avatar_url', 'set_custom_avatar_image', 10, 3 );

// override the default gravatar
function set_custom_avatar_image($avatar_url, $id_or_email, $args) {
	// Define the meta key for the custom image field
	$meta_key = 'profile_photo';

	// Get user object
	$user = false;
	if (is_numeric($id_or_email)) {
		$user = get_user_by('id', (int)$id_or_email);
	} elseif (is_object($id_or_email) && !empty($id_or_email->user_id)) {
		$user = get_user_by('id', (int)$id_or_email->user_id);
	} elseif (is_string($id_or_email)) {
		$user = get_user_by('email', $id_or_email);
	}

	// If a user is found, try to get the custom avatar
	if ($user && is_object($user)) {
		$post_id = get_user_meta($user->ID, $meta_key, true);
		if ($post_id) {
			$attachment_url = wp_get_attachment_url($post_id);
			if ($attachment_url) {
				$avatar_url = $attachment_url;
			}
		}
	}

	return $avatar_url;
}