<?php

/**
 * Simplus Blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Simplus Blog
 */
if ( !function_exists( 'simplus_blog_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function simplus_blog_setup() {
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'simplus-blog' );

		// Setting global content width.
		global $content_width;
		if ( !isset( $content_width ) ) {
			$content_width = 1170;
		}

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, and column width.
		 */
		add_editor_style( array( 'css/editor-style.css' ) );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'simplus-blog' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		
		
		// Add Theme Support for wide and full-width images.
		add_theme_support( 'align-wide' );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'simplus_blog_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height' => 50,
			'width' => 200,
			'flex-width' => true,
			'flex-height' => true,
		) );
	}

endif;
add_action( 'after_setup_theme', 'simplus_blog_setup' );

/**
 * Enqueue scripts and styles.
 */
function simplus_blog_scripts() {

	wp_enqueue_style( 'simplus-blog-google-fonts', 'https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'simplus-blog-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap-jquery', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'simplus-blog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'simplus-blog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'simplus-blog-custom-js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), false, true );
}

add_action( 'wp_enqueue_scripts', 'simplus_blog_scripts' );

/**
 *  Defining theme version.
 */
define( 'WP_SIMPLE_BLOG_VERSION', '1.0.3' );

/**
 * Loading Required Classes and Collections
 */
require get_theme_file_path( '/inc/fonts-collection.php' );

/**
 * Registering widgets and sidebars
 */
require get_template_directory() . '/inc/widget-area.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
