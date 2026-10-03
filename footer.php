<?php
/**
 * Footer template.
 *
 * @package MornRain_Grid
 * @since   1.0.0
 */

?>
	</div><!-- #primary -->

	<footer id="colophon" class="site-footer">
		<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'mornrain-grid' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_id'        => 'footer-menu',
					'menu_class'     => 'footer-menu',
					'container'      => false,
					'fallback_cb'    => false,
					'depth'          => 1,
				)
			);
			?>
		</nav><!-- .footer-navigation -->

		<div class="site-info">
			<?php
			printf(
				/* translators: 1: current year, 2: site name. */
				esc_html__( 'Copyright %1$s %2$s. All rights reserved.', 'mornrain-grid' ),
				esc_html( gmdate( 'Y' ) ),
				esc_html( get_bloginfo( 'name' ) )
			);
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
