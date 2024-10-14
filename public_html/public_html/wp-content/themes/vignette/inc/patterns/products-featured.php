<?php
/**
 * Featured products Carousel
 */
return array(
	'title'      => __( 'Featured products carousel', 'vignette' ),
	'categories' => array( 'vignette' ),
	'content'    => '<!-- wp:heading {"align":"wide","className":"carouseltitle"} -->
<h2 class="alignwide carouseltitle">Featured products</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","className":"wc-carousel-viva-c"} -->
<div class="wp-block-group alignwide wc-carousel-viva-c"><!-- wp:woocommerce/handpicked-products /--></div>
<!-- /wp:group -->',
);
