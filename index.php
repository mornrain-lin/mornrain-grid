<?php
/**
 * Main template file.
 *
 * @package MornRain_Grid
 * @since   1.0.0
 */

get_header();
?>
<main id="main" class="site-main">
	<?php if ( have_posts() ) : ?>
		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</header>
		<?php endif; ?>

		<div class="post-list">
__CARD_LOOP__
		</div>

__PAGINATION__
	<?php else : ?>
		<p class="no-results"><?php esc_html_e( 'Nothing found.', 'mornrain-grid' ); ?></p>
	<?php endif; ?>
</main>
<?php
get_footer();
