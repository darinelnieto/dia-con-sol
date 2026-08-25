<?php
// $script_handle = 'about-js';
// wp_enqueue_script(
//     $script_handle,
//     get_template_directory_uri() . '/js/partials-min/about.min.js',
//     array('jquery'),
//     null,
//     true
// );
/**
 * 
 * Partial Name: about
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$about = get_field('about_content');
$img = $about['main_image'];
?>
<section class="about-partial-5558a0">
    <div class="content">
        <div class="top">
            <div class="title-content">
                <h1 class="title"><?= the_title(); ?></h1>
                <?= wp_get_attachment_image($about['icon']['ID'] ?? '', 'large', false, array(
                    'class' => 'icon',
                    'fetchpriority' => 'high',
                    'loading' => 'eager',
                )) ?>
            </div>
            <?php if(!empty($img)): ?>
                <div class="image-contain">
                    <?= wp_get_attachment_image($img['ID'], 'large', false, array(
                        'class' => 'main-image',
                        'fetchpriority' => 'high',
                        'loading' => 'eager',
                    )) ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="buttom">
            <?= $about['description'] ?? ''; ?>
        </div>
    </div>
</section>
                    