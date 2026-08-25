<?php
// $script_handle = 'grouped-products-js';
// wp_enqueue_script(
//     $script_handle,
//     get_template_directory_uri() . '/js/partials-min/grouped-products.min.js',
//     array('jquery'),
//     null,
//     true
// );
/**
 * 
 * Partial Name: grouped-products
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$products_list = get_field('list_of_grouped_products');
if(!empty($products_list)):
?>
<section class="grouped-products-partial-fc3d4b">
    <?php foreach($products_list as $product): ?>
        <?php
        if (!isset($product['product'])) continue;

        $product_obj = $product['product']; // WP_Post
        $product_id  = $product_obj->ID;

        $wc_product = wc_get_product($product_id);

        if ($wc_product && $wc_product->is_type('grouped')) :
            $link  = get_permalink($product_id);
            $image = get_the_post_thumbnail($product_id, 'full', false, array(
                'class' => 'product-image',
                'loading' => 'lazy',
                'decoding' => 'async'
            ));
        ?>
            <article class="custom-grouped-product">
                <?php if($image): ?>
                    <div class="product-image">
                        <?= $image ?>
                    </div>
                <?php endif; ?>
                <a href="<?= esc_url($link); ?>" class="btn-comprar">Compra tu Ritwals</a>
            </article>
        <?php endif; ?>
    <?php endforeach; ?>
</section>
<?php endif; ?>