<?php

/**
 * Simplus Blog Theme Customizer
 *
 * @package Simplus Blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function simplus_blog_customize_register( $wp_customize ) {

	global $simplus_blog_google_fonts;

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_setting( 'simplus_blog_primary_color', array(
		'default'			 => '#1a73e8',
		'transport'			 => 'postMessage',
		'sanitize_callback'	 => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'simplus_blog_primary_color', array(
		'label'		 => __( 'Primary Color', 'simplus-blog' ),
		'section'	 => 'colors',
		'settings'	 => 'simplus_blog_primary_color',
		'priority'	 => 3,
	) ) );

	$wp_customize->add_setting( 'simplus_blog_secondary_color', array(
		'default'			 => '#656565',
		'transport'			 => 'postMessage',
		'sanitize_callback'	 => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'simplus_blog_secondary_color', array(
		'label'		 => __( 'Secondary Color', 'simplus-blog' ),
		'section'	 => 'colors',
		'settings'	 => 'simplus_blog_secondary_color',
		'priority'	 => 5,
	) ) );
	
	$wp_customize->add_setting( 'simplus_blog_text_color', array(
		'default'			 => '#333333',
		'transport'			 => 'postMessage',
		'sanitize_callback'	 => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'simplus_blog_text_color', array(
		'label'		 => __( 'Text Color', 'simplus-blog' ),
		'section'	 => 'colors',
		'settings'	 => 'simplus_blog_text_color',
		'priority'	 => 7,
	) ) );
	
	$wp_customize->add_setting( 'simplus_blog_hover_color', array(
		'default'			 => '#2382ff',
		'transport'			 => 'postMessage',
		'sanitize_callback'	 => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'simplus_blog_hover_color', array(
		'label'		 => __( 'Hover Color', 'simplus-blog' ),
		'section'	 => 'colors',
		'settings'	 => 'simplus_blog_hover_color',
		'priority'	 => 8,
	) ) );

	$wp_customize->add_section( 'simplus_blog_theme_options', array(
		'title'		 => __( 'Theme options', 'simplus-blog' ),
		'priority'	 => 30,
	) );
	
	$wp_customize->add_setting( 'simplus_blog_sidebar_pos', array(
		'default'			 => 'right',
		'transport'			 => 'postMessage',
		'sanitize_callback'	 => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'simplus_blog_sidebar_pos', array(
		'label'		 => __( 'Sidebar Position', 'simplus-blog' ),
		'section'	 => 'simplus_blog_theme_options',
		'settings'	 => 'simplus_blog_sidebar_pos',
		'type'		 => 'radio',
		'choices'	 => array(
			'right'	 => __( 'Right sidebar', 'simplus-blog' ),
			'no'	 => __( 'No sidebar', 'simplus-blog' ),
		),
	) ) );

	$wp_customize->add_setting( 'simplus_blog_footer_copyright', array(
		'default'			 => 'Copyright',
		'transport'			 => 'postMessage',
		'sanitize_callback'	 => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'simplus_blog_footer_copyright', array(
		'type'			 => 'textarea',
		'section'		 => 'simplus_blog_theme_options',
		'label'			 => __( 'Footer Copyright', 'simplus-blog' ),
		'description'	 => __( 'Add Custom Copyright Text here.', 'simplus-blog' ),
	) );

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'			 => '.site-title a',
			'render_callback'	 => 'simplus_blog_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'			 => '.site-description',
			'render_callback'	 => 'simplus_blog_customize_partial_blogdescription',
		) );

		$wp_customize->selective_refresh->add_partial( 'simplus_blog_dynamic_css', array(
			'selector'			 => '#simplus_blog_dynamic_css',
			'render_callback'	 => 'simplus_blog_customizer_dynamic_css',
			'settings'			 => array(
				'simplus_blog_primary_color',
				'simplus_blog_secondary_color',
				'simplus_blog_text_color',
				'simplus_blog_hover_color',
			),
		) );
		
		$wp_customize->selective_refresh->add_partial( 'theme_name_here_sidebar_pos', array(
			'selector'			 => '.empty-node',
			'render_callback'	 => '__return_empty_string',
		) );

		$wp_customize->selective_refresh->add_partial( 'simplus_blog_footer_copyright', array(
			'selector'			 => '#footer_copyright',
			'render_callback'	 => 'simplus_blog_customize_partial_footer_copyright',
		) );
	}
}

add_action( 'customize_register', 'simplus_blog_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 */
function simplus_blog_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 */
function simplus_blog_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function simplus_blog_customize_preview_js() {
	wp_enqueue_script( 'simplus-blog-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}

add_action( 'customize_preview_init', 'simplus_blog_customize_preview_js' );

/**
 * Fix for load customizer from js only
 */
function simplus_blog_append_empty_node() {
	printf( '<div class="empty-node hidden"></div>' );
}

add_action( 'wp_footer', 'simplus_blog_append_empty_node' );

/**
 * Generate dynamic css based on users selection.
 */
function simplus_blog_customizer_dynamic_css() {

	$primary_color = esc_attr( get_theme_mod( 'simplus_blog_primary_color', '#1a73e8' ) );
	$secondary_color = esc_attr( get_theme_mod( 'simplus_blog_secondary_color', '#656565' ) );
	$text_color = esc_attr( get_theme_mod( 'simplus_blog_text_color', '#333333' ) );
	$hover_color = esc_attr( get_theme_mod( 'simplus_blog_hover_color', '#2382ff' ) );

	printf( '.primary-bg, .btn-primary, .site-header .bootsnipp-search .search-form .input-group-btn > .search-submit, .navbar-default .navbar-nav > .current-menu-item > a:after, .widget .widget-title:after, .comment-form .form-submit input[type="submit"], .calendar_wrap > table > tbody tr td#today, .comment-list .comment .reply .comment-reply-link { background-color: %s; }', $primary_color );

	printf( 'a, .primary-text { color: %s; }', $primary_color );

	printf( '.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav > .current-menu-item > a, .sub-menu > li > a:hover { color: %s; }', $primary_color );

	printf( '.secondary-bg { background-color: %s; }', $secondary_color );

	printf( '.secondary-text { color: %s; }', $secondary_color );
	
	printf( 'html, body { color: %s; }', $text_color );

	printf( '.btn-primary:hover, .btn-primary:focus, .site-header .bootsnipp-search .search-form .input-group-btn > .search-submit:hover, .comment-form .form-submit input[type="submit"]:hover, .comment-form .form-submit input[type="submit"]:focus, .comment-list .comment .reply .comment-reply-link:hover, .comment-list .comment .reply .comment-reply-link:focus { background-color: %s; }', $hover_color );
}

/**
 * Binds dynamic css for colors.
 */
function simplus_blog_color_styles() {
	printf( '<style type="text/css" id="simplus_blog_dynamic_css">' );
	simplus_blog_customizer_dynamic_css();
	printf( '</style>' );
}

add_action( 'wp_head', 'simplus_blog_color_styles' );

/**
 * Partial render for copyright text.
 */
function simplus_blog_customize_partial_footer_copyright() {
	$copyright_text = esc_html( get_theme_mod( 'simplus_blog_footer_copyright', 'Copyright' ), array(
		'a'		 => array( 'href' => array(), 'title' => array() ),
		'br'	 => array(),
		'em'	 => array(),
		'strong' => array(),
		) );
	printf( '<p>%s</p>', $copyright_text );
}

/**
 * Render function for Footer copyright.
 */
function simplus_blog_footer_copyright() {
	printf( '<div id="footer_copyright">' );
	simplus_blog_customize_partial_footer_copyright();
	printf( '</div><!-- #footer_copyright -->' );
}
