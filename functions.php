<?php
/**
 * MornRain Grid functions and definitions.
 *
 * @package MornRain_Grid
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! defined( 'MORNRAIN_GRID_VERSION' ) ) {
	define( 'MORNRAIN_GRID_VERSION', '1.0.0' );
}

if ( ! function_exists( 'mornrain_gridsetup' ) ) :
	/**
	 * Register theme defaults and WordPress feature support.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function mornrain_gridsetup() {
		load_theme_textdomain( 'mornrain-grid', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 64,
				'width'       => 240,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'mornrain-grid' ),
				'footer'  => __( 'Footer Menu', 'mornrain-grid' ),
			)
		);

		add_image_size( 'mornrain-grid-feature', 1280, 720, true );
		add_image_size( 'mornrain-grid-card', 640, 420, true );
	}
endif;
add_action( 'after_setup_theme', 'mornrain_gridsetup' );

if ( ! function_exists( 'mornrain_gridscripts' ) ) :
	/**
	 * Enqueue front-end styles and scripts.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function mornrain_gridscripts() {
		wp_enqueue_style(
			'mornrain-grid',
			get_stylesheet_uri(),
			array(),
			MORNRAIN_GRID_VERSION
		);

		wp_enqueue_style(
			'mornrain-grid-main',
			get_template_directory_uri() . '/assets/css/main.css',
			array( 'mornrain-grid' ),
			MORNRAIN_GRID_VERSION
		);

		wp_enqueue_script(
			'mornrain-grid-main',
			get_template_directory_uri() . '/assets/js/main.js',
			array(),
			MORNRAIN_GRID_VERSION,
			true
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'mornrain_gridscripts' );

if ( ! function_exists( 'mornrain_gridexcerpt_length' ) ) :
	/**
	 * Filter the excerpt length.
	 *
	 * @since 1.0.0
	 * @param int $length Default excerpt length in words.
	 * @return int
	 */
	function mornrain_gridexcerpt_length( $length ) {
		return 22;
	}
endif;
add_filter( 'excerpt_length', 'mornrain_gridexcerpt_length' );

if ( ! function_exists( 'mornrain_gridexcerpt_more' ) ) :
	/**
	 * Filter the excerpt "read more" suffix.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	function mornrain_gridexcerpt_more() {
		return '&hellip;';
	}
endif;
add_filter( 'excerpt_more', 'mornrain_gridexcerpt_more' );

if ( ! function_exists( 'mornrain_gridpingback_header' ) ) :
	/**
	 * Add the pingback link to the document head when needed.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function mornrain_gridpingback_header() {
		if ( is_singular() && pings_open() ) {
			printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
		}
	}
endif;
add_action( 'wp_head', 'mornrain_gridpingback_header' );
