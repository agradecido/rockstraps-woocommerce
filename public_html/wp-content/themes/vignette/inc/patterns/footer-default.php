<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Default footer', 'vignette' ),
	'categories' => array( 'vignette' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"color":{"text":"#cccccc"},"spacing":{"padding":{"top":"160px"},"blockGap":"0px"}},"backgroundColor":"foreground","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-foreground-background-color has-text-color has-background has-link-color" style="color:#cccccc;padding-top:160px"><!-- wp:group {"align":"full","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"className":"footercontent"} -->
<div class="wp-block-columns footercontent"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"6rem"}}},"className":"copyinfo","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide copyinfo" style="padding-top:6rem"><!-- wp:navigation {"ref":121,"textColor":"secondary","showSubmenuIcon":false,"overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"},"fontSize":"medium"} /-->

<!-- wp:paragraph {"align":"right","textColor":"secondary","fontSize":"medium"} -->
<p class="has-text-align-right has-secondary-color has-text-color has-medium-font-size">© 2023 Vignette theme. All rights reserved.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:image {"id":2497,"width":364,"height":29,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/payments.png" alt="" class="wp-image-2497" width="364" height="29"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
