<?php
// Register Custom Post Type
function project_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'beryllium' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'beryllium' ),
		'menu_name'             => __( 'Projects', 'beryllium' ),
		'name_admin_bar'        => __( 'Projects', 'beryllium' ),
		'archives'              => __( 'Project Archives', 'beryllium' ),
		'attributes'            => __( 'Project Attributes', 'beryllium' ),
		'parent_item_colon'     => __( 'Parent Project :', 'beryllium' ),
		'all_items'             => __( 'All Projects', 'beryllium' ),
		'add_new_item'          => __( 'Add New Project', 'beryllium' ),
		'add_new'               => __( 'Add New', 'beryllium' ),
		'new_item'              => __( 'New Project', 'beryllium' ),
		'edit_item'             => __( 'Edit Project', 'beryllium' ),
		'update_item'           => __( 'Update Project', 'beryllium' ),
		'view_item'             => __( 'View Project', 'beryllium' ),
		'view_items'            => __( 'View Projects', 'beryllium' ),
		'search_items'          => __( 'Search Project', 'beryllium' ),
		'not_found'             => __( 'Not found', 'beryllium' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'beryllium' ),
		'featured_image'        => __( 'Featured Image', 'beryllium' ),
		'set_featured_image'    => __( 'Set featured image', 'beryllium' ),
		'remove_featured_image' => __( 'Remove featured image', 'beryllium' ),
		'use_featured_image'    => __( 'Use as featured image', 'beryllium' ),
		'insert_into_item'      => __( 'Insert into project', 'beryllium' ),
		'uploaded_to_this_item' => __( 'Uploaded to this project', 'beryllium' ),
		'items_list'            => __( 'Projects list', 'beryllium' ),
		'items_list_navigation' => __( 'Projects list navigation', 'beryllium' ),
		'filter_items_list'     => __( 'Filter projects list', 'beryllium' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'beryllium' ),
		'description'           => __( 'Studio projects - all types.', 'beryllium' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-appearance',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	); 
	register_post_type( 'project', $args );

}
add_action( 'init', 'project_post_type', 0 );


// Register Custom Taxonomy
function staff_post_type() {

	$labels = array(
		'name'                       => _x( 'Staff', 'Taxonomy General Name', 'beryllium' ),
		'singular_name'              => _x( 'Staff Member', 'Taxonomy Singular Name', 'beryllium' ),
		'menu_name'                  => __( 'Staff', 'beryllium' ),
		'all_items'                  => __( 'All Staff Members', 'beryllium' ),
		'parent_item'                => __( 'Parent Staff Member', 'beryllium' ),
		'parent_item_colon'          => __( 'Parent Staff Member:', 'beryllium' ),
		'new_item_name'              => __( 'New Staff Member Name', 'beryllium' ),
		'add_new_item'               => __( 'Add New Staff Member', 'beryllium' ),
		'edit_item'                  => __( 'Edit Staff Member', 'beryllium' ),
		'update_item'                => __( 'Update Staff Member', 'beryllium' ),
		'view_item'                  => __( 'View Staff Member', 'beryllium' ),
		'separate_items_with_commas' => __( 'Separate staff members with commas', 'beryllium' ),
		'add_or_remove_items'        => __( 'Add or remove staff members', 'beryllium' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'beryllium' ),
		'popular_items'              => __( 'Popular Staff Members', 'beryllium' ),
		'search_items'               => __( 'Search Staff Members', 'beryllium' ),
		'not_found'                  => __( 'Not Found', 'beryllium' ),
		'no_terms'                   => __( 'No staff members', 'beryllium' ),
		'items_list'                 => __( 'Staff Members list', 'beryllium' ),
		'items_list_navigation'      => __( 'Staff Members list navigation', 'beryllium' ),
	);

	$args = array(
		'label'                 => __( 'Staff', 'beryllium' ),
		'description'           => __( 'Staff members.', 'beryllium' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-appearance',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);

	register_post_type( 'staff', $args );

}

add_action( 'init', 'staff_post_type', 0 );
