<?php
// $script_handle = 'contact-js';
// wp_enqueue_script(
//     $script_handle,
//     get_template_directory_uri() . '/js/partials-min/contact.min.js',
//     array('jquery'),
//     null,
//     true
// );
/**
 * 
 * Partial Name: contact
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$contact = get_field('contact_content');
?>
<section class="contact-partial-8825b8">
    <div class="contact">
        <?php if(!empty($contact['title'])): ?>
            <h2><?= $contact['title']; ?></h2>
        <?php endif; if(!empty($contact['shortcode_form'])): ?>
            <div class="form">
                <?= do_shortcode($contact['shortcode_form']); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
                    