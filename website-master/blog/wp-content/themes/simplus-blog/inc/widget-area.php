<?php

/**
 * Widget area file for widgets and registers
 *
 * @package Simplus Blog
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function simplus_blog_widgets_init() {
	register_sidebar( array(
		'name'			 => esc_html__( 'Sidebar', 'simplus-blog' ),
		'id'			 => 'sidebar-1',
		'description'	 => esc_html__( 'Add widgets here.', 'simplus-blog' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h3 class="widget-title">',
		'after_title'	 => '</h3>',
	) );

	register_sidebar( array(
		'name'			 => esc_html__( 'Footer 1', 'simplus-blog' ),
		'id'			 => 'footer-1',
		'description'	 => esc_html__( 'Add widgets here.', 'simplus-blog' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h3 class="widget-title">',
		'after_title'	 => '</h3>',
	) );
	register_sidebar( array(
		'name'			 => esc_html__( 'Footer 2', 'simplus-blog' ),
		'id'			 => 'footer-2',
		'description'	 => esc_html__( 'Add widgets here.', 'simplus-blog' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h3 class="widget-title">',
		'after_title'	 => '</h3>',
	) );
	register_sidebar( array(
		'name'			 => esc_html__( 'Footer 3', 'simplus-blog' ),
		'id'			 => 'footer-3',
		'description'	 => esc_html__( 'Add widgets here.', 'simplus-blog' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h3 class="widget-title">',
		'after_title'	 => '</h3>',
	) );
	register_sidebar( array(
		'name'			 => esc_html__( 'Footer 4', 'simplus-blog' ),
		'id'			 => 'footer-4',
		'description'	 => esc_html__( 'Add widgets here.', 'simplus-blog' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h3 class="widget-title">',
		'after_title'	 => '</h3>',
	) );
}

add_action( 'widgets_init', 'simplus_blog_widgets_init' );
