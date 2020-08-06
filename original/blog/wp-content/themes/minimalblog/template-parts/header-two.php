<header id="masthead" class="site-header header-layout-two">
	<?php 
	$gettopbar	= get_theme_mod( 'topbar_section_on_off', false );
	if (true == $gettopbar) :
	 ?>
	<div class="site-topbar-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="topbar-search-form">
						<?php get_search_form(); ?>
					</div>
				</div>
				<div class="col-sm-8 text-right">
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
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div class="menu-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-4 text-left">
					<div class="site-branding">
					<?php
					if ( has_custom_logo() ) :
						the_custom_logo();
					else :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
					
						$minimalblog_description = get_bloginfo( 'description', 'display' );
						if ( $minimalblog_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo esc_html( $minimalblog_description ); /* WPCS: xss ok. */ ?></p>
							<?php
						endif;
					endif;
					?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-md-8 text-right">
					<div class="stellarnav">
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'main-menu',
								'container' => 'ul',
							)
						);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header><!-- #masthead -->