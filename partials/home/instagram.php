<?php
// $script_handle = 'instagram-js';
// wp_enqueue_script(
//     $script_handle,
//     get_template_directory_uri() . '/js/partials-min/instagram.min.js',
//     array('jquery'),
//     null,
//     true
// );
/**
 * 
 * Partial Name: instagram
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$instagram = get_field('instagram_content');
if($instagram['shortcode']):
?>
<section class="instagram-partial-2d0893">
    <div class="content-intagram">
        <div class="title-and-link">
            <?php if($instagram['title']): ?>
                <h2><?= $instagram['title']; ?></h2>
            <?php endif; if($instagram['link']): $cta = $instagram['link']; ?>
                <a href="<?= $cta['url']; ?>" target="<?= $cta['target']; ?>">
                    <span><?= $cta['title']; ?></span>
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
        <div class="instagram-posts">
            <?= do_shortcode($instagram['shortcode']); ?>
        </div>
    </div>
</section>
<?php endif; ?>