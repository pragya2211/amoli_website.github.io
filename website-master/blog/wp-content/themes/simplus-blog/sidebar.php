<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simplus Blog
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
if ( simplus_blog_get_sidebar_pos() === 'no' && ! is_customize_preview() ){
	return;
}
?>

<aside id="secondary" <?php simplus_blog_secondary_section_class(); ?>>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
