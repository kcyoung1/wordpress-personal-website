<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Projects Type
function kcyoung_register_projects() {

	$labels = array(
		'name'                  => 'Projects',
		'singular_name'         => 'Project',
		'menu_name'             => 'Projects',
		'name_admin_bar'        => 'Project',
		'archives'              => 'Project Archives',
		'parent_item_colon'     => 'Parent Project:',
		'all_items'             => 'All Projects',
		'add_new_item'          => 'Add New Project',
		'add_new'               => 'Add New',
		'new_item'              => 'New Project',
		'edit_item'             => 'Edit Project',
		'update_item'           => 'Update Project',
		'view_item'             => 'View Project',
		'search_items'          => 'Search Project',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into project',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Projects list',
		'items_list_navigation' => 'Projects list navigation',
		'filter_items_list'     => 'Filter projects list',
	);
	$args = array(
		'label'                 => 'Project',
		'description'           => 'for project posts',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-laptop',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'kcyoung_register_projects', 0 );

// Register Custom Post Type
function kcyoung_skills() {

	$labels = array(
		'name'                  => 'Skills',
		'singular_name'         => 'Skill',
		'menu_name'             => 'Skills',
		'name_admin_bar'        => 'Skill',
		'archives'              => 'Skill Archives',
		'parent_item_colon'     => 'Parent Skill:',
		'all_items'             => 'All Skills',
		'add_new_item'          => 'Add New Skill',
		'add_new'               => 'Add New',
		'new_item'              => 'New Skill',
		'edit_item'             => 'Edit Skill',
		'update_item'           => 'Update Skill',
		'view_item'             => 'View Skill',
		'search_items'          => 'Search Skill',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into skill',
		'uploaded_to_this_item' => 'Uploaded to this skill',
		'items_list'            => 'Skills list',
		'items_list_navigation' => 'Skills list navigation',
		'filter_items_list'     => 'Filter skills list',
	);
	$args = array(
		'label'                 => 'Skill',
		'description'           => 'for skills posts',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'trackbacks', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-hammer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'skills', $args );

}
add_action( 'init', 'kcyoung_skills', 0 );
