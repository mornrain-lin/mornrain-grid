<?php
/**
 * Search results template.
 *
 * @package MornRain_Grid
 * @since   1.0.0
 */

get_header();
?>
<main id="main" class="site-main">
	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<h1 class="page-title">
				<?php
				printf(
					/* translators: %s: search query. */
					esc_html__( 'Search results for: %s', 'mornrain-grid' ),
					'<span class="search-query">' . esc_html( get_search_query( false ) ) . '</span>'
				);
				?>
			</h1>
			<?php get_search_form(); ?>
		</header>

		<div class="post-list">
__CARD_LOOP__
		</div>

__PAGINATION__
	<?php else : ?>
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Nothing found', 'mornrain-grid' ); ?></h1>
		</header>
		<p class="no-results"><?php esc_html_e( 'No results matched your search. Try different keywords.', 'mornrain-grid' ); ?></p>
		<?php get_search_form(); ?>
	<?php endif; ?>
</main>
<?php
get_footer();
