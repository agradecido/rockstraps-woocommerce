<?php
/**
 * New products Carousel
 */
return array(
	'title'      => __( 'New products carousel', 'vignette' ),
	'categories' => array( 'vignette' ),
	'content'    => '<!-- wp:heading {"align":"wide","className":"carouseltitle"} -->
<h2 class="alignwide carouseltitle">New Products</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","className":"wc-carousel-viva-b"} -->
<div class="wp-block-group alignwide wc-carousel-viva-b"><!-- wp:woocommerce/product-new /--></div>
<!-- /wp:group -->',
);
