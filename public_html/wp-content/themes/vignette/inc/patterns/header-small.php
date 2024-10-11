<?php
/**
 * Small header with dark background block pattern
 */
return array(
	'title'      => __( 'Small header with image background', 'vignette' ),
	'categories' => array( 'vignette' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"overlayColor":"foreground","contentPosition":"top center","align":"full","className":"small-header"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-top-center small-header"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"0px","bottom":"100px","right":"0px","left":"0px"}}},"textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-background-color has-text-color has-link-color" style="padding-top:0px;padding-right:0px;padding-bottom:100px;padding-left:0px"><!-- wp:template-part {"slug":"header","theme":"vignette","tagName":"header","align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","align":"wide"} /-->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->',
);
