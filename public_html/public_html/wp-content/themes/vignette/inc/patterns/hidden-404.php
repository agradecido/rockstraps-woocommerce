<?php
/**
 * 404 content.
 */
return array(
	'title'    => __( '404 content', 'vignette' ),
	'inserter' => false,
	'content'  => '<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 40vw, 20rem)","fontWeight":"200","lineHeight":"1"}},"className":"has-text-align-center"} -->
					<h2 class="has-text-align-center" style="font-size:clamp(4rem, 40vw, 20rem);font-weight:400;line-height:1">' . esc_html( _x( '404', 'Error code for a webpage that is not found.', 'vignette' ) ) . '</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html__( 'This page could not be found.', 'vignette' ) . '</p>
					<!-- /wp:paragraph -->',
);
