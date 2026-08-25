<?php
/**
 * 
 * Partial Name: hero-banner
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$banner = get_field('banner_content');
if($banner):
$script_handle = 'hero-banner-js';
wp_enqueue_script(
    $script_handle,
    get_template_directory_uri() . '/js/partials-min/hero-banner.min.js',
    array('jquery'),
    null,
    true
);
?>
<section class="hero-banner-partial-d9ee41 owl-carousel">
    <?php foreach($banner as $item): ?>
        <div class="item">
            <?php if($item['main_image']): $image = $item['main_image']; ?>
                <?= wp_get_attachment_image($image['ID'], 'large', false, array(
                    'class' => 'main-image',
                    'fetchpriority' => 'high',
                    'loading' => 'eager',
                )) ?>
            <?php endif;  ?>
            <div class="text-contain">
                <?php if($item['enable_image_text'] === true): $text_img = $item['image_text']; ?>
                    <?= wp_get_attachment_image($text_img['ID'], 'large', false, array(
                        'class' => 'text-image',
                        'fetchpriority' => 'high',
                        'loading' => 'eager',
                    )) ?>
                <?php else: ?>
                    <h2 class="title" style="color:<?= $item['text_color']; ?>"><?= $item['banner_text']; ?></h2>
                <?php endif; if($item['cta']): $cta = $item['cta']; ?>
                    <a href="<?= $cta['url']; ?>" target="<?= $cta['target']; ?>" class="the-cta <?= $item['cta_style']; ?>">
                        <?= $cta['title']; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>
<?php endif; ?>