<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package minimalblog
 */
?>

</div><!-- #content -->

<?php
if (!is_page_template( 'blankpage.php' ) && !is_page_template( 'fullwidth.php' )) :
	$footernewsletter = get_theme_mod('footer_news_letter_on_off', false);
	if (true == $footernewsletter) :
		get_template_part( 'template-parts/newslatter' );
	endif;
endif;
dynamic_sidebar( 'footer-top' );
$getfooter_column = get_theme_mod( 'footer_column', 3 );
$footerlayout = 'three';
if (4 == $getfooter_column) {
	$footerlayout = 'four';
}elseif (2 == $getfooter_column) {
	$footerlayout = 'two';
}else{
	$footerlayout = 'three';
}
get_template_part( 'template-parts/footer', $footerlayout );

?>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<div class="site-info">
						<?php
						$getcopyrighttext = get_theme_mod('copyright_text');
						if (!empty($getcopyrighttext)) {
							echo wp_kses_post($getcopyrighttext);
						}else{
						printf('<p>%s <a href="%s">%s</a>', esc_html__( 'Theme', 'minimalblog' ), 'https://theimran.com/best-free-wordpress-theme-for-blogging-minimalblog/', esc_html__('Minimalblog', 'minimalblog' ) );
					} ?>
					</div><!-- .site-info -->
				</div>
				<div class="col-md-6 text-right">
					<div class="social-link-top">
						<?php 
						$facebook = get_theme_mod( 'facebook' );
						$twitter = get_theme_mod('twitter');
						$googleplus = get_theme_mod('googleplus');
						$pinterest = get_theme_mod('pinterest');
						$youtube = get_theme_mod('youtube');
						if(!empty($facebook)) : ?>
							<a href="<?php echo esc_url( $facebook ); ?>" class="fa fa-facebook"></a>
							<?php endif; if(!empty($twitter)):
								?>
							<a href="<?php echo esc_url( $twitter ); ?>" class="fa fa-twitter"></a>
							<?php endif; if(!empty($googleplus)) :?>
							<a href="<?php echo esc_url( $googleplus ); ?>" class="fa fa-google-plus"></a>
							<?php endif; if(!empty($pinterest)) : ?>
							<a href="<?php echo esc_url( $pinterest ); ?>" class="fa fa-pinterest"></a>
							<?php endif; if(!empty($youtube)) :?>
							<a href="<?php echo esc_url( $youtube ); ?>" class="fa fa-youtube"></a>
							<?php endif;?>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div class="scrooltotop">
		<a href="#" class="fa fa-angle-up"></a>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
