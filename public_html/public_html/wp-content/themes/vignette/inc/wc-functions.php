<?php
/**
 * WooCommerce functions.
 *
 * @package Vignette
 */

add_action( 'after_setup_theme', 'woocommerce_support' );
/**
 * Add necessary support for WooCommerce.
 */
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );

remove_action( 'woocommerce_mini_cart_contents', 'woocommerce_cart_item_remove_link' );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 60 );

add_action( 'woocommerce_before_main_content', 'vignette_theme_wrapper_start', 10 );
add_action( 'woocommerce_after_main_content', 'vignette_theme_wrapper_end', 10 );

add_action( 'wp', 'vignette_remove_zoom_lightbox_theme_support', 99 );
/**
 * Remove product lightbox gallery.
 */
function vignette_remove_zoom_lightbox_theme_support() {
	remove_theme_support( 'wc-product-gallery-lightbox' );
}

/**
 * Add new wrapper to shop pages.
 */
function vignette_theme_wrapper_start() {
	echo '<div id="wrapper" class="animated fadeIn delay-250">';
}

/**
 * End of wrapper.
 */
function vignette_theme_wrapper_end() {
	echo '</div>';
}

add_action( 'woocommerce_after_shop_loop_item', 'remove_add_to_cart_buttons', 1 );
/**
 * Remove cart button in shop page.
 */
function remove_add_to_cart_buttons() {
	if ( is_product_category() || is_shop() ) {
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
	}
}

/**
 * Change product sorting names for WooCommerce.
 *
 * @param array $options Parsed arguments.
 */
function bass_change_sorting_options_order( $options ) {
	$options = array(
		'menu_order' => esc_html__( 'Default', 'vignette' ),
		'date'       => esc_html__( 'Latest', 'vignette' ),
		'popularity' => esc_html__( 'Popularity', 'vignette' ),
		'price'      => esc_html__( 'Price: Low to High', 'vignette' ),
		'price-desc' => esc_html__( 'Price: High to Low', 'vignette' ),
		'rating'     => 'Rating',
	);
	return $options;
}

/**
 * Related products for WooCommerce.
 */
function woo_related_products_limit() {
	global $product;

	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'vignette_related_products_args' );
/**
 * Related products columns.
 *
 * @param array $args Parsed arguments.
 */
function vignette_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns']        = 3; // arranged in 2 columns.
	return $args;
}
// Change number or products per row to 3.
add_filter( 'loop_shop_columns', 'loop_columns' );
if ( ! function_exists( 'loop_columns' ) ) {
	/**
	 * Loop columns.
	 */
	function loop_columns() {
		return 3; // 2 products per row
	}
}

add_filter( 'loop_shop_per_page', 'vignette_loop_shop_per_page', 20 );
/**
 * Products per shop page.
 *
 * @param array $cols Parsed arguments.
 */
function vignette_loop_shop_per_page( $cols ) {
	// $cols contains the current number of products per page based on the value stored on Options -> Reading
	// Return the number of products you wanna show per page.
	$cols = 9;
	return $cols;
}


/**
 * Changes the redirect URL for the Return To Shop button in the cart.
 *
 * @return string
 */
function vignette_empty_cart_redirect_url() {
	return '' . esc_url( get_post_type_archive_link( 'product' ) ) . '';
}
add_filter( 'woocommerce_return_to_shop_redirect', 'vignette_empty_cart_redirect_url' );


// Remove the product description Title.
add_filter( 'woocommerce_product_description_heading', '__return_null' );


add_filter( 'woocommerce_product_additional_information_heading', 'vignette_product_additional_information_heading' );
/** Remove the additional information title.
 */
function vignette_product_additional_information_heading() {
	echo '';
}


add_filter( 'woocommerce_get_image_size_thumbnail', 'vignette_theme_override_woocommerce_image_size_thumbnail' );
/**
 * Change product image size.
 *
 * @param array $size Parsed arguments.
 */
function vignette_theme_override_woocommerce_image_size_thumbnail( $size ) {
		// Catalog images: specific size.
		return array(
			'width'  => 800,
			'height' => 800,
			'crop'   => 1,
		);
}

add_filter( 'woocommerce_get_image_size_single', 'vignette_theme_override_woocommerce_image_size_single' );
/**
 * Change product image size.
 *
 * @param array $size Parsed arguments.
 */
function vignette_theme_override_woocommerce_image_size_single( $size ) {
		// Single product image: square.
		return array(
			'width'  => 800,
			'height' => 800,
			'crop'   => 1,
		);
}

add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'vignette_theme_override_woocommerce_image_size_gallery_thumbnail' );
/**
 * Change product image size.
 *
 * @param array $size Parsed arguments.
 */
function vignette_theme_override_woocommerce_image_size_gallery_thumbnail( $size ) {
		// Gallery thumbnails: proportional, max width 200px.
		return array(
			'width'  => 800,
			'height' => 800,
			'crop'   => 0,
		);
}

/**
 * Add search box.
 */
function custom_content_after_body_open_tag() {
	?>

	<div id="search-panel">
		<div class="search-close">
			<a class="icon-container has-icon-color" href="#" style="color:#ccc;width:24px">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"></path></svg>
			</a>
		</div>
		<?php get_product_search_form(); ?>
	</div>
	<?php
}

add_action( 'wp_body_open', 'custom_content_after_body_open_tag' );

/**
 * Add to cart ajax.
 */
function vignette_product_page_ajax_add_to_cart_js() {
	?>
		<script type="text/javascript" charset="UTF-8">
		jQuery(function($) {

			$('form.cart').on('submit', function(e) {
				e.preventDefault();

				var form = $(this);
				form.block({ message: null, overlayCSS: { background: '#fff', opacity: 0.6 } });

				var formData = new FormData(form[0]);
				formData.append('add-to-cart', form.find('[name=add-to-cart]').val() );

				// Ajax action.
				$.ajax({
					url: wc_add_to_cart_params.wc_ajax_url.toString().replace( '%%endpoint%%', 'vignette_add_to_cart' ),
					data: formData,
					type: 'POST',
					processData: false,
					contentType: false,
					complete: function( response ) {
						response = response.responseJSON;

						if ( ! response ) {
							return;
						}

						if ( response.error && response.product_url ) {
							window.location = response.product_url;
							return;
						}

						// Redirect to cart option
						if ( wc_add_to_cart_params.cart_redirect_after_add === 'yes' ) {
							window.location = wc_add_to_cart_params.cart_url;
							return;
						}

						var $thisbutton = form.find('.single_add_to_cart_button'); //
//						var $thisbutton = null; // uncomment this if you don't want the 'View cart' button

						// Trigger event so themes can refresh other areas.
						$( document.body ).trigger( 'added_to_cart', [ response.fragments, response.cart_hash, $thisbutton ] );

						// Remove existing notices
						$( '.woocommerce-error, .woocommerce-message, .woocommerce-info' ).remove();

						// Add new notices
						form.closest('.product').before(response.fragments.notices_html)

						form.unblock();
					}
				});
			});
		});
	</script>
	<?php
}
add_action( 'wp_footer', 'vignette_product_page_ajax_add_to_cart_js' );

/**
 * Ajax add to cart handler.
 */
function vignette_ajax_add_to_cart_handler() {
	WC_Form_Handler::add_to_cart_action();
	WC_AJAX::get_refreshed_fragments();
}
add_action( 'wc_ajax_vignette_add_to_cart', 'vignette_ajax_add_to_cart_handler' );
add_action( 'wc_ajax_nopriv_vignette_add_to_cart', 'vignette_ajax_add_to_cart_handler' );

// Remove WC Core add to cart handler to prevent double-add.
remove_action( 'wp_loaded', array( 'WC_Form_Handler', 'add_to_cart_action' ), 20 );
