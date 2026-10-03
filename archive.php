<?php
/**
 * Archive template.
 *
 * @package MornRain_Grid
 * @since   1.0.0
 */

get_header();
?>
<main id="main" class="site-main">
	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header>

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
