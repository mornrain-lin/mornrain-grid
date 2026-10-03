<?php
/**
 * 404 template.
 *
 * @package MornRain_Grid
 * @since   1.0.0
 */

get_header();
?>
<main id="main" class="site-main">
	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Page not found', 'mornrain-grid' ); ?></h1>
		</header>

		<div class="page-content">
			<p><?php esc_html_e( 'The page you are looking for does not exist. It may have been moved, or the address may be mistyped.', 'mornrain-grid' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</section>
</main>
<?php
get_footer();
