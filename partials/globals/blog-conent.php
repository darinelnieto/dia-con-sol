<?php
$script_handle = 'blog-conent-js';
wp_enqueue_script(
    $script_handle,
    get_template_directory_uri() . '/js/partials-min/blog-conent.min.js',
    array('jquery'),
    null,
    true
);
/**
 * 
 * Partial Name: blog-conent
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
<section class="blog-conent-partial-95825f">
    <div class="content">
        <h1><?= the_title(); ?></h1>
        <div id="astral-guides"></div>
        <button class="see-more">VER MÁS</button>
    </div>
</section>
                    