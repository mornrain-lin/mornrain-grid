<?php
/**
 * Header template.
 *
 * @package MornRain_Grid
 * @since   1.0.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'mornrain-grid' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<div class="site-logo"><?php the_custom_logo(); ?></div>
			<?php elseif ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php
			$mornrain_grid_description = get_bloginfo( 'description', 'display' );
			if ( $mornrain_grid_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo esc_html( $mornrain_grid_description ); ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'mornrain-grid' ); ?>">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'mornrain-grid' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'primary-menu',
					'container'      => false,
					'fallback_cb'    => false,
					'depth'          => 2,
				)
			);
			?>
		</nav><!-- .main-navigation -->
	</header><!-- #masthead -->

	<div id="primary" class="site-content">
