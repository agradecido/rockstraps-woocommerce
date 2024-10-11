<?php
/**
 * Default header block pattern
 */
return array(
	'title'      => __( 'Process, text and video', 'vignette' ),
	'categories' => array( 'vignette' ),
	'content'    => '<!-- wp:columns {"align":"wide","className":"processblock"} -->
<div class="wp-block-columns alignwide processblock"><!-- wp:column {"className":"animated fadeInUpShort delay-500"} -->
<div class="wp-block-column animated fadeInUpShort delay-500"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading -->
<h2>Learn more about our process</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Designers must balance both the logic and lyricism of humanity every time they design something, a task that requires a singularly mysterious skill.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link">About us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/yellow-chair.jpg","id":20,"dimRatio":0,"overlayColor":"foreground","minHeight":500,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-20" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/yellow-chair.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',
);
