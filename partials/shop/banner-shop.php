<?php
// $script_handle = 'banner-shop-js';
// wp_enqueue_script(
//     $script_handle,
//     get_template_directory_uri() . '/js/partials-min/banner-shop.min.js',
//     array('jquery'),
//     null,
//     true
// );
/**
 * 
 * Partial Name: banner-shop
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$banner = get_field('hero_banner');
$m_img = $banner['main_image'];
$s_img = $banner['secondary_image'];
?>
<section class="banner-shop-partial-39400d">
    <?= wp_get_attachment_image($m_img['ID'] ?? '', 'large', false, array(
        'class' => 'main-image',
        'fetchpriority' => 'high',
        'loading' => 'eager',
    )); ?>
    <?= wp_get_attachment_image($s_img['ID'] ?? '', 'large', false, array(
        'class' => 'secondary-image',
        'fetchpriority' => 'high',
        'loading' => 'eager',
    )); ?>
    <div class="scroll-down">
        <button>
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49.5 25.5">
                <polyline class="cls-1" points="1 1 24.5 24.5 25 24.5 48.5 1"/>
            </svg>
        </button>
    </div>
</section>
                    