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
$content = get_field('products_conntent');
$products = $content['products_list'];
if($products):
$img = $content['text_title_image']
?>
<section class="products-list-partial-e9d941">
    <div class="products-content">
        <?= wp_get_attachment_image($img['ID'], 'large', false, array(
            'class' => 'title-image',
            'loading' => 'lazy',
            'decoding' => 'async',
        )); ?>
        <div class="slide-product owl-carousel">
            <?php foreach($products as $product){
                echo do_shortcode('[product ids"'. implode(',', $product) .'"]');
            }; ?>
        </div>
        <?php if($content['see_all']): $see_all = $content['see_all']; ?>
            <a href="<?= $see_all['url'] ?>" class="see-all-cta">
                <span> <?= $see_all['title']; ?> </span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="29.037" height="23.081" viewBox="0 0 29.037 23.081">
                    <defs>
                        <clipPath id="clip-path">
                        <rect id="Rectángulo_39" data-name="Rectángulo 39" width="29.037" height="23.081" transform="translate(0 0)" fill="none"/>
                        </clipPath>
                    </defs>
                    <g id="Grupo_30" data-name="Grupo 30" transform="translate(0 0)">
                        <g id="Grupo_29" data-name="Grupo 29" clip-path="url(#clip-path)">
                        <line id="Línea_1" data-name="Línea 1" x1="27.548" transform="translate(0.745 11.54)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.489"/>
                        <path id="Trazado_41" data-name="Trazado 41" d="M17.5,22.336l10.8-10.8L17.5.744" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.489"/>
                        </g>
                    </g>
                </svg>
            </a>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>  