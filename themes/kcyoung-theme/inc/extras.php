<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package kcyoung_theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function kcyoung_theme_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'kcyoung_theme_body_classes' );

// Archive Projects Title Filter
function kcyoung_filter_titles($title) {
	if (is_post_type_archive('projects')){
		$title = 'Projects';
	}
  return $title;
}
add_filter('get_the_archive_title','kcyoung_filter_titles');
