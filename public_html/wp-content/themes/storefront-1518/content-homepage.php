<?php
/**
 * The template used for displaying page content in template-homepage.php
 *
 * @package storefront
 */

?>
<?php
$featured_image = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('homepage-content'); ?> data-featured-image="<?php echo esc_url( $featured_image ); ?>">
	<div class="">
        <div class="hero">
            <div class="hero-content">
                <h1>Descubre la Elegancia</h1>
                <p>Nuestras correas de cuero hechas a mano</p>
                <a href="#shop" class="button">Ver Colección</a>
            </div>
        </div>
	</div>
</div><!-- #post-## -->
