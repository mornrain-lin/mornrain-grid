<?php
/**
 * Single post template.
 *
 * @package MornRain_Grid
 * @since   1.0.0
 */

get_header();
?>
<main id="main" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class="entry-meta">
					<time class="entry-date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
					<span class="entry-author"><?php echo esc_html( get_the_author() ); ?></span>
					<?php if ( has_category() ) : ?>
						<span class="entry-categories"><?php the_category( ', ' ); ?></span>
					<?php endif; ?>
				</div>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<figure class="post-thumbnail"><?php the_post_thumbnail( 'large' ); ?></figure>
			<?php endif; ?>

			<div class="entry-content">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<nav class="page-links">' . esc_html__( 'Pages:', 'mornrain-grid' ),
						'after'  => '</nav>',
					)
				);
				?>
			</div>

			<footer class="entry-footer">
				<?php the_tags( '<span class="tags-links">', ', ', '</span>' ); ?>
			</footer>
		</article>
		<?php
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	endwhile;
	?>
</main>
<?php
get_footer();
