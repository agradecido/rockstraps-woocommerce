<?php
/**
 * Default header block pattern
 */
return array(
	'title'      => __( 'Partners', 'vignette' ),
	'categories' => array( 'vignette' ),
	'content'    => '<!-- wp:group {"className":"partners animated fadeIn delay-500"} -->
<div class="wp-block-group partners animated fadeIn delay-500"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary"} -->
<h2 class="has-text-align-center has-secondary-color has-text-color" style="font-style:normal;font-weight:600">As seen on</h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":2317,"width":150,"height":46,"sizeSlug":"medium","linkDestination":"custom","className":"is-style-default"} -->
<figure class="wp-block-image size-medium is-resized is-style-default"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/mode.png" alt="" class="wp-image-2317" width="150" height="46"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2308,"width":225,"height":127,"sizeSlug":"medium","linkDestination":"custom","className":"is-style-default"} -->
<figure class="wp-block-image size-medium is-resized is-style-default"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/vogue.jpeg" alt="" class="wp-image-2308" width="225" height="127"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2322,"width":150,"height":46,"sizeSlug":"medium","linkDestination":"custom","className":"is-style-default"} -->
<figure class="wp-block-image size-medium is-resized is-style-default"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/time.png" alt="" class="wp-image-2322" width="150" height="46"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2328,"width":150,"height":76,"sizeSlug":"medium","linkDestination":"custom","className":"is-style-default"} -->
<figure class="wp-block-image size-medium is-resized is-style-default"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/style.png" alt="" class="wp-image-2328" width="150" height="76"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
