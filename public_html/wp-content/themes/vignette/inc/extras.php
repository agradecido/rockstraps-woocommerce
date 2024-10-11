<?php
/**
 * Extra functions for this theme.
 *
 * @package Vignette
 */

/**
 * Archives Titles
 *
 * @param array $title Configuration arguments.
 */
function vignette_get_the_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_year() ) {
		$title = get_the_date( _x( 'Y', 'yearly archives date format', 'vignette' ) );
	} elseif ( is_month() ) {
		$title = get_the_date( _x( 'F Y', 'monthly archives date format', 'vignette' ) );
	} elseif ( is_day() ) {
		$title = get_the_date( _x( 'F j, Y', 'daily archives date format', 'vignette' ) );
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	} else {
		$title = esc_html__( 'Archives', 'vignette' );
	}
	return $title;
};
add_filter( 'get_the_archive_title', 'vignette_get_the_archive_title', 10, 1 );

/**
 * Add class to single post if no featured image.
 *
 * @param array $classes Configuration arguments.
 */
function add_body_class_no_featured_image( $classes ) {
	if ( is_single() && ! has_post_thumbnail() ) {
		$classes[] = 'no-featured-image';
	}
	return $classes;
}
add_filter( 'body_class', 'add_body_class_no_featured_image' );

add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
/**
 * Add dashicons frontend.
 */
function load_dashicons_front_end() {
	wp_enqueue_style( 'dashicons' );
}

// Add suggested plugins activation.
require_once get_parent_theme_file_path( '/inc/tgmpa/class-tgm-plugin-activation.php' );

// Add automated theme demo.
require_once get_parent_theme_file_path( '/inc/merlin/class-merlin.php' );

add_action( 'tgmpa_register', 'vignette_register_required_plugins' );
/**
 * Register required plugins.
 */
function vignette_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		array(
			'name'     => 'WooCommerce Blocks',
			'slug'     => 'woo-gutenberg-products-block',
			'required' => false,
		),

		array(
			'name'     => 'The Icon Block',
			'slug'     => 'icon-block',
			'required' => false,
		),

		array(
			'name'     => 'Contact Form 7',
			'slug'     => 'contact-form-7',
			'required' => false,
		),

		array(
			'name'     => 'WooCommerce',
			'slug'     => 'woocommerce',
			'required' => false,
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'vignette',              // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}

/**
 * Demo import files.
 */
function merlin_import_files() {
	return array(
		array(
			'import_file_name'           => 'Demo Import',
			'import_file_url'            => 'https://vivathemes.com/files/demo_content/vignette/demo_content.xml',
		),
	);
}
add_filter( 'merlin_import_files', 'merlin_import_files' );

// Prevent WooCommerce setup wizard.
add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );
