<?php
$script_handle = 'products-list-js';
wp_enqueue_script(
    $script_handle,
    get_template_directory_uri() . '/js/partials-min/products-list.min.js',
    array('jquery'),
    null,
    true
);
/**
 * 
 * Partial Name: products-list
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => -1, // todos
    'tax_query'      => array(
        array(
            'taxonomy' => 'product_type',
            'field'    => 'slug',
            'terms'    => 'simple', // solo productos simples
        ),
    ),
);
$prod = new WP_Query($args);
if($prod->have_posts()):
?>
<section class="products-list-partial-dc09c7">
    <div class="content">
        <h1><?= the_title(); ?></h1>
        <div class="products-content">
            <?php while($prod->have_posts()): $prod->the_post(); ?>
                <?= do_shortcode('[product id="' . get_the_ID() . '"]'); ?>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php endif; ?>