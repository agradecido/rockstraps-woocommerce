<?php
/**
 * Vignette: Block Patterns
 *
 */

/**
 * Registers block patterns.
 *
 * @return void
 */
function vignette_register_block_patterns() {
	$block_pattern_categories = array(
		'vignette' => array( 'label' => __( 'Vignette', 'vignette' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @param array[] $block_pattern_categories {
	 */
	$block_pattern_categories = apply_filters( 'vignette_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'partners',
		'products-featured',
		'products-onsale',
		'products-new',
		'features',
		'process-block',
		'team',
		'footer-default',
		'header-large',
		'header-small',
		'hidden-404',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'vignette_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'vignette/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'vignette_register_block_patterns', 9 );
