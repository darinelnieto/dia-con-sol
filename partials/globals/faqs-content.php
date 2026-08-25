<?php
$script_handle = 'faqs-content-js';
    wp_enqueue_script(
    $script_handle,
    get_template_directory_uri() . '/js/partials-min/faqs-content.min.js',
    array('jquery'),
    null,
    true
);
/**
 * 
 * Partial Name: faqs-content
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$faqs = get_field('faqs');
$key = 0;
$cta = get_field('cta_appointment');
?>
<section class="faqs-content-partial-ab2fc2">
    <div class="content">
        <div class="title-contain">
            <h1><?= the_title(); ?></h1>
        </div>
        <?php if($faqs): ?>
            <div class="faqs-contain">
                <?php foreach($faqs as $item): $key++; ?>
                    <div class="the-faq <?php if($key === 1): ?>active<?php endif ?>">
                        <div class="faq-question">
                            <h2><?= $item['question']; ?></h2>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22.856" height="20.969" viewBox="0 0 22.856 20.969">
                                <defs>
                                    <clipPath id="clip-path">
                                    <rect id="Rectángulo_1061" data-name="Rectángulo 1061" width="22.856" height="20.969" transform="translate(0 0)" fill="none"/>
                                    </clipPath>
                                </defs>
                                <g id="Grupo_1494" data-name="Grupo 1494" transform="translate(0 0.001)">
                                    <g id="Grupo_1493" data-name="Grupo 1493" clip-path="url(#clip-path)">
                                    <line id="Línea_279" data-name="Línea 279" x1="19.479" y1="19.479" transform="translate(0.745 0.745)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.489"/>
                                    <path id="Trazado_541" data-name="Trazado 541" d="M4.956,20.224H20.224V4.956" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.489"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="faq-answer">
                            <?= $item['answer']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; if($cta): ?>
            <a href="<?= $cta['url']; ?>" target="<?= $cta['target']; ?>" class="appointment-cta">
                <?= $cta['title']; ?>
            </a>
        <?php endif; ?>
    </div>
</section>
                    