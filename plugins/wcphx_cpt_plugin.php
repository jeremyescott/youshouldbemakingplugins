<?php
/*
Plugin Name: Custom Post Type for WCPHX16 Site
Plugin URI: http://jeremyescott.com/
Description: A custom post type to fix bad practices on my child-theme.
Author: WCPHX 2016
Version: 1.0
Author URI: http://jeremyescott.com/
*/


// Register Custom Post Type
function wcphx2016_widgets_post_type() {

	$labels = array(
		'name'                  => _x( 'Widgets', 'Post Type General Name', 'wcphx2016' ),
		'singular_name'         => _x( 'Widget', 'Post Type Singular Name', 'wcphx2016' ),
		'menu_name'             => __( 'Widgets', 'wcphx2016' ),
		'name_admin_bar'        => __( 'Widgets', 'wcphx2016' ),
		'archives'              => __( 'Widgets Archives', 'wcphx2016' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wcphx2016' ),
		'all_items'             => __( 'All Widgets', 'wcphx2016' ),
		'add_new_item'          => __( 'Add New Widget', 'wcphx2016' ),
		'add_new'               => __( 'Add New', 'wcphx2016' ),
		'new_item'              => __( 'New Widget', 'wcphx2016' ),
		'edit_item'             => __( 'Edit Widget', 'wcphx2016' ),
		'update_item'           => __( 'Update Widget', 'wcphx2016' ),
		'view_item'             => __( 'View Widget', 'wcphx2016' ),
		'search_items'          => __( 'Search Widget', 'wcphx2016' ),
		'not_found'             => __( 'Not found', 'wcphx2016' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wcphx2016' ),
		'featured_image'        => __( 'Featured Image', 'wcphx2016' ),
		'set_featured_image'    => __( 'Set featured image', 'wcphx2016' ),
		'remove_featured_image' => __( 'Remove featured image', 'wcphx2016' ),
		'use_featured_image'    => __( 'Use as featured image', 'wcphx2016' ),
		'insert_into_item'      => __( 'Insert into widget', 'wcphx2016' ),
		'uploaded_to_this_item' => __( 'Uploaded to this widget', 'wcphx2016' ),
		'items_list'            => __( 'Widgets list', 'wcphx2016' ),
		'items_list_navigation' => __( 'Widgets list navigation', 'wcphx2016' ),
		'filter_items_list'     => __( 'Filter widgets list', 'wcphx2016' ),
	);
	$args = array(
		'label'                 => __( 'Widget', 'wcphx2016' ),
		'description'           => __( 'Widgets are the universal \"something\".', 'wcphx2016' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-sticky',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'widgets_type', $args );

}
add_action( 'init', 'wcphx2016_widgets_post_type', 0 );
