<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Simplus Blog
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function simplus_blog_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( !is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( !is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	} else {
		$classes[] = simplus_blog_get_sidebar_pos() . '-sidebar';
	}

	$classes[] = 'box-layout';

	return $classes;
}

add_filter( 'body_class', 'simplus_blog_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function simplus_blog_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}

add_action( 'wp_head', 'simplus_blog_pingback_header' );

/**
 * Get classes for primary section.
 * @param type $class
 */
function simplus_blog_primary_section_class( $class = array() ) {
	$class[] = 'content-area';
	switch ( simplus_blog_get_sidebar_pos() ) {
		case 'no':
			$class[] = 'col-sm-12';
			break;
		case 'left':
			$class[] = 'col-sm-8';
			$class[] = 'col-sm-push-4';
			break;
		default: // right
			$class[] = 'col-sm-8';
			break;
	}
	$class = apply_filters( 'simplus_blog_primary_section_class', $class );
	echo 'class="' . implode( ' ', $class ) . '"';
}

/**
 * Get classes for secondary section.
 * @param type $class
 */
function simplus_blog_secondary_section_class( $class = array() ) {
	$class[] = 'widget-area';
	switch ( simplus_blog_get_sidebar_pos() ) {
		case 'no':
			$class[] = 'hidden';
			break;
		case 'left':
			$class[] = 'col-sm-4';
			$class[] = 'col-sm-pull-8';
			break;
		default: // right
			$class[] = 'col-sm-4';
			break;
	}
	$class = apply_filters( 'simplus_blog_secondary_section_class', $class );
	echo 'class="' . implode( ' ', $class ) . '"';
}

/**
 * Get classes for content section.
 * @param type $class
 */
function simplus_blog_content_section_class( $class = array() ) {
	$class[] = 'site-content';
	$class[] = 'container';
	$class = apply_filters( 'simplus_blog_content_section_class', $class );
	echo 'class="' . implode( ' ', $class ) . '"';
}

/**
 * Render footer widgets.
 */
function simplus_blog_render_footer_widgets() {
	$active_areas = array( );
	$active_area_count = 0;
	for ( $i = 1; $i <= 4; $i++ ) {
		$active_areas[ $i ] = is_active_sidebar( 'footer-' . $i );
		if ( $active_areas[ $i ] ) {
			$active_area_count++;
		}
	}
	if ( 0 < $active_area_count ) {
		printf( '<div class="row">' );
		for ( $i = 1; $i <= 4; $i++ ) {
			if ( $active_areas[ $i ] ) {
				$col_sm = round( 12 / $active_area_count );
				printf( '<div class="col-sm-%s">', $col_sm );
				dynamic_sidebar( 'footer-' . $i );
				printf( '</div><!-- .col-sm-%s -->', $col_sm );
			}
		}
		printf( '</div><!-- .row -->' );
	}
}

/**
 * Use to get sidebar position.
 * @return string
 */
function simplus_blog_get_sidebar_pos(){
	return esc_attr( get_theme_mod( 'simplus_blog_sidebar_pos', 'right' ) );
}