<?php
// $script_handle = 'after-banner-js';
// wp_enqueue_script(
//     $script_handle,
//     get_template_directory_uri() . '/js/partials-min/after-banner.min.js',
//     array('jquery'),
//     null,
//     true
// );
/**
 * 
 * Partial Name: after-banner
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$about = get_field('about_content');
$bg_img = $about['secondary_image'];
$sodiac_sign = $about['zodiac_sign_icons'];
$about_us_end = get_field('about_us_end');
$sun = $about_us_end['icon'];
?>
<section class="after-banner-partial-aafaf9">
        <?= wp_get_attachment_image($bg_img['ID'], 'large', false, array(
            'class' => 'secondary-img',
            'loading' => 'lazy',
            'decoding' => 'async',
        )) ?>
        <?= wp_get_attachment_image($sodiac_sign['ID'], 'large', false, array(
            'class' => 'sodiac-sign',
            'loading' => 'lazy',
            'decoding' => 'async',
        )) ?>
    <div class="about-content">
        <?php if($about['title']): ?>
            <h1 class="title"><?= $about['title']; ?></h1>
        <?php endif; if($about['description']): ?>
            <p class="description"><?= $about['description']; ?></p>
        <?php endif; if($about['subtitle']): ?>
            <h2 class="subtitle"><?= $about['subtitle']; ?></h2>
        <?php endif; if($about['cta']): $cta = $about['cta']; ?>
            <a href="<?= $cta['url']; ?>" target="<?= $cta['target']; ?>" class="cta-border-gold">
                <?= $cta['title']; ?>
            </a>
        <?php endif; ?>
        <div class="end-section">
            <?php if($about_us_end['text_left']): ?>
                <p class="left"><?= $about_us_end['text_left']; ?></p>
            <?php endif; ?>
            <?= wp_get_attachment_image($sun['ID'], 'medium', false, array(
                'class' => 'sun',
                'loading' => 'lazy',
                'decoding' => 'async',
            )) ?>
            <?php if($about_us_end['text_right']): ?>
                <p class="right"><?= $about_us_end['text_right']; ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
                    