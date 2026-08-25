   
<?php
/**
 * 
 * Template Name: shop-page
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
?>
<main id="shop-page-template-abac3b">
    <?php get_template_part('partials/shop/banner-shop'); ?>
    <?php get_template_part('partials/shop/products-list'); ?>
</main>
<?php get_footer(); ?>
                    