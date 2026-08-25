<?php
$script_handle = 'footer-js';
wp_enqueue_script(
    $script_handle,
    get_template_directory_uri() . '/js/partials-min/footer.min.js',
    array('jquery'),
    null,
    true
);
/**
 * 
 * Partial Name: footer
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$footer = get_field('footer_content', 'option');
$copyright = get_field('copyright', 'option');
$bacground = get_field('background_image', 'option');
?>
<section class="footer-partial-c3d0a9" style="background-image: url('<?= $bacground; ?>');">
     <div class="top-contain">
        <div class="left">
            <?php if($footer['title']): ?>
                <h3><?= $footer['title']; ?></h3>
            <?php endif; if($footer['description_form']): ?>
                <p><?= $footer['description_form']; ?></p>
            <?php endif; if($footer['shortcode_form']): ?>
                <div class="form-contain">
                    <?= do_shortcode($footer['shortcode_form']); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="right">
            <?php if($footer['menu_title']): ?>
                <h3><?= $footer['menu_title']; ?></h3>
                <div class="menu">
                    <?= wp_nav_menu([ 'menu' => 'Footer' ]); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="bottom-contain">
        <p class="copyright"><?= $copyright['the_copi']; ?></p>
        <img src="<?= $copyright['favivon']['url']; ?>" alt="<?= $copyright['favivon']['title']; ?>" width="<?= $copyright['favivon']['width']; ?>" height="<?= $copyright['favivon']['height']; ?>">
        <?php if($copyright['social_networks']): ?>
            <ul class="social-networks">
                <?php foreach($copyright['social_networks'] as $network): ?>
                    <li>
                        <a href="<?= $network['link']['url']; ?>" target="_blank" rel="noopener">
                            <?= $network['icon']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
                    