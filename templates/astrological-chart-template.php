<?php
/**
 * 
 * Template Name: astrological-chart
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
$main_img = get_field('main_image');
?>
<main id="astrological-chart-template-835eff">
    <section class="astrological-chart">
        <?= wp_get_attachment_image($main_img, 'full', false, array(
            'class' => 'main-image',
            'fetchpriority' => 'high',
            'loading' => 'eager',
        )); ?>
        <div class="content">
            <div class="main-content">
                <h1 class="title"><?= get_field('title') ?? ''; ?></h1>
                <p class="description"><?= get_field('description') ?? ''; ?></p>
            </div>
            <div class="form">
                <h2 class="subtitle"><?= get_field('subtitle') ?? ''; ?></h2>
                <p class="intro"><?= get_field('text_after_subtitle') ?? ''; ?></p>
                <div class="the_form">
                    <?= do_shortcode(get_field('form_shortcode') ?? ''); ?>
                </div>
            </div>
        </div>
        <?= wp_get_attachment_image(get_field('end_image'), 'full', false, array(
            'class' => 'end-image',
            'loading' => 'lazy',
            'decoding' => 'async',
        )); ?>
    </section>
</main>
<?php get_footer(); ?>