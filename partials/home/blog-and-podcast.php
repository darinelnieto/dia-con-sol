<?php
/**
 * 
 * Partial Name: blog-and-podcast
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$podcast_content = get_field('podcast_content');
if($podcast_content):
$script_handle = 'blog-and-podcast-js';
wp_enqueue_script(
    $script_handle,
    get_template_directory_uri() . '/js/partials-min/blog-and-podcast.min.js',
    array('jquery'),
    null,
    true
);
?>
<section class="blog-and-podcast-partial-34bffa">
    <div class="podcatst-contain">
        <div class="podscast-slide owl-carousel">
            <?php foreach($podcast_content as $item): $img = $item['main_image']; ?>
                <div class="item">
                    <a href="<?= $item['link']['url']; ?>" target="<?= $item['link']['target']; ?>">
                        <?= wp_get_attachment_image($img['ID'], 'large', false, array(
                            'class' => 'podcast-image',
                            'loading' => 'lazy',
                            'decoding' => 'async',
                        )) ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>