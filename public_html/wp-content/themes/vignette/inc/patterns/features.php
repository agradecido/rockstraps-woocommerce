<?php
/**
 * Default header block pattern
 */
return array(
	'title'      => __( 'Features Pattern', 'vignette' ),
	'categories' => array( 'vignette' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/livingroom.jpg","id":2131,"hasParallax":true,"dimRatio":70,"minHeight":600,"align":"full","className":"productfeatures","style":{"spacing":{"padding":{"top":"140px","bottom":"140px"}}}} -->
<div class="wp-block-cover alignfull has-parallax productfeatures" style="padding-top:140px;padding-bottom:140px;background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/images/livingroom.jpg);min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"animated fadeInUpShort delay-500"} -->
<div class="wp-block-columns animated fadeInUpShort delay-500"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading -->
<h2>Custom features</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:columns {"style":{"spacing":{"blockGap":"140px"}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"fontSize":"upper-medium"} -->
<h2 class="has-upper-medium-font-size">New designs</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our new design features a fresh new look, but with the same quality products that you have come to expect from us.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"upper-medium"} -->
<h2 class="has-upper-medium-font-size">Hand made</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our new furniture line is going to give your home a breath of fresh air. Whether you are looking for something simple and modern or something more extravagant.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"fontSize":"upper-medium"} -->
<h2 class="has-upper-medium-font-size">Quality products</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We are committed to offering quality furniture at affordable prices, and we are excited to announce our new line of furniture.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"upper-medium"} -->
<h2 class="has-upper-medium-font-size">For all spaces</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We believe in making the world a better place! That is why we have taken steps to make sure our furniture does not just look good but also built to last.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->',
);
