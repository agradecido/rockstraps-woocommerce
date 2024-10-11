<?php
/**
 * Vignette functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Vignette
 * @since Vignette 1.0
 */

if ( ! function_exists( 'vignette_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.\
	 *
	 * @return void
	 */
	function vignette_support() {

		load_theme_textdomain( 'vignette', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
				vignette_fonts_url(),
			)
		);
	}
endif;

add_action( 'after_setup_theme', 'vignette_support' );

if ( ! function_exists( 'vignette_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 */
	function vignette_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'vignette-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
		wp_enqueue_script( 'vignette-animate', get_template_directory_uri() . '/js/animate.js', array( 'jquery' ), $version_string, true );
		wp_enqueue_style( 'vignette-fonts', vignette_fonts_url(), array(), $version_string );
		if ( is_woocommerce_activated() ) {
			wp_enqueue_script( 'woo-scripts', get_template_directory_uri() . '/js/wc.js', array( 'jquery' ), $version_string, true );
			wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl-carousel.min.js', array( 'jquery' ), $version_string, true );
			if ( is_rtl() ) {
				wp_enqueue_script( 'owl-rtl', get_template_directory_uri() . '/js/owl-rtl.js', array( 'jquery' ), $version_string, true );
			} else {
				wp_enqueue_script( 'owl-ltr', get_template_directory_uri() . '/js/owl-ltr.js', array( 'jquery' ), $version_string, true );
			}
		}
		wp_enqueue_style( 'animate-style', get_template_directory_uri() . '/animate.css', array(), $version_string, 'screen' );
		// Enqueue theme stylesheet.
		wp_enqueue_style( 'vignette-style' );
		wp_style_add_data( 'vignette-style', 'rtl', 'replace' );
	}
endif;

add_action( 'wp_enqueue_scripts', 'vignette_styles' );

/** Define fonts.
 */
function vignette_fonts_url() {

	$fonts = array(
		'family=Urbanist:wght@300;400;500;600;700',
	);

	// Make a single request for all Google Fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', array_unique( $fonts ) ) . '&display=swap' );
}

add_action( 'customize_register', '__return_true' );

if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	/**
	 * Load WooCommerce compatibility files.
	 */
	function is_woocommerce_activated() {
		if ( class_exists( 'woocommerce' ) ) {
			return true; } else {
				return false; }
	}
}
if ( is_woocommerce_activated() ) {
	require get_template_directory() . '/inc/wc-functions.php';
}

// Add block patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Add some extras.
require get_template_directory() . '/inc/extras.php';
