<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
$attachment_ids = $product->get_gallery_image_ids();
$featured_image_id = get_post_thumbnail_id( $product->get_id() );

if ( $featured_image_id ) {
	$featured_image = wp_get_attachment_image_url( $featured_image_id, 'full' );
	$featured_thumb_html = wp_get_attachment_image( $featured_image_id, 'woocommerce_thumbnail', false, array(
		'class' => 'zoom-image',
		'fetchpriority' => 'high',
        'loading' => 'eager',
	) );
} elseif ( ! empty( $attachment_ids ) ) {
	$featured_image = wp_get_attachment_image_url( $attachment_ids[0], 'full' );
	$featured_thumb_html = wp_get_attachment_image( $attachment_ids[0], 'woocommerce_thumbnail', false, array(
		'class' => 'zoom-image',
		'fetchpriority' => 'high',
        'loading' => 'eager',
	));
} else {
	$featured_image = wc_placeholder_img_src( 'full' );
	$featured_thumb_html = wc_placeholder_img( 'woocommerce_thumbnail' );
}

$key = 0;
$args = array(
    'post_type'      => 'product',
	'post_status'	=> 'publish',
    'posts_per_page' => 4,
	'orderby' => 'rand',
    'tax_query'      => array(
        array(
            'taxonomy' => 'product_type',
            'field'    => 'slug',
            'terms'    => 'simple', // solo productos simples
        ),
    ),
);
$prod = new WP_Query($args);
$product_page = get_field('products_page', 'option');
$cta_text = get_field('text_cta', 'option');
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<section class="product-detail">
		<div class="content">
			<div class="left">
				<div class="nav-controller">
					<ul>
						<li>
							<button data-target="0">
								<?= $featured_thumb_html; ?>
							</button>
						</li>
						<?php foreach ($attachment_ids as $attachment_id): $key++; $image_url = wp_get_attachment_image_src($attachment_id, 'full'); ?>
							<li>
								<button data-target="<?= $key; ?>">
									<?= wp_get_attachment_image($attachment_id, 'full', false, array(
										'class' => 'zoom-image',
										'fetchpriority' => 'high',
        								'loading' => 'eager',	
									)) ?>
								</button>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<!-- Gallery -->
				<div class="gallery">
					<div class="gallery-slide owl-carousel">
						<div class="item">
							<a href="<?= $featured_image; ?>" class="zoom-trigger">
								<?= $featured_thumb_html; ?>
							</a>
						</div>
						<?php foreach ($attachment_ids as $attachment_id): $image_url = wp_get_attachment_image_src($attachment_id, 'full'); ?>
							<div class="item">
								<a href="<?= $image_url[0]; ?>" class="zoom-trigger">
									<?= wp_get_attachment_image($attachment_id, 'full', false, array(
										'class' => 'zoom-image',
										'fetchpriority' => 'high',
        								'loading' => 'eager',	
									)) ?>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="right">
				<h1 class="title"><?= the_title(); ?></h1>
				<div class="description"><?= $product->get_description(); ?></div>
				<div class="price">
					<?= $product->get_price_html(); ?>
				</div>
				<div class="count">
					<h3>Cantidad</h3>
					<div class="add-to-cart">
						<?php 
							if ( $product && $product->is_type( 'simple' ) ) {
								woocommerce_simple_add_to_cart();
							} elseif ( $product && $product->is_type( 'variable' ) ) {
								woocommerce_variable_add_to_cart();
							} else {
								woocommerce_template_single_add_to_cart();
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php if($prod->have_posts()): ?>
		<section class="related-products">
			<div class="content">
				<div class="svg-contain">
					<svg id="Grupo_1501" data-name="Grupo 1501" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="564.455" height="183.507" viewBox="0 0 564.455 183.507">
						<defs>
							<clipPath id="clip-path">
							<rect id="Rectángulo_1062" data-name="Rectángulo 1062" width="564.455" height="183.507" fill="none"/>
							</clipPath>
						</defs>
						<g id="Grupo_1496" data-name="Grupo 1496">
							<g id="Grupo_1495" data-name="Grupo 1495" clip-path="url(#clip-path)">
							<text id="P" transform="translate(41.956 125.435) rotate(-53.949)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">P</tspan></text>
							</g>
						</g>
						<text id="r" transform="translate(61.02 99.615) rotate(-45.578)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">r</tspan></text>
						<text id="o" transform="translate(75.124 84.506) rotate(-36.575)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">o</tspan></text>
						<text id="d" transform="translate(97.254 67.579) rotate(-23.966)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">d</tspan></text>
						<g id="Grupo_1498" data-name="Grupo 1498">
							<g id="Grupo_1497" data-name="Grupo 1497" clip-path="url(#clip-path)">
							<text id="u" transform="translate(124.084 55.397) rotate(-10.071)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">u</tspan></text>
							<text id="c" transform="matrix(1, -0.01, 0.01, 1, 152.892, 50.497)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">c</tspan></text>
							<text id="t" transform="translate(177.157 50.271) rotate(7.914)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">t</tspan></text>
							<text id="o-2" data-name="o" transform="translate(196.327 52.355) rotate(18.262)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">o</tspan></text>
							</g>
						</g>
						<text id="s" transform="matrix(0.881, 0.472, -0.472, 0.881, 223.016, 61.47)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">s</tspan></text>
						<text id="_" data-name=" " transform="matrix(0.83, 0.558, -0.558, 0.83, 240.546, 71.027)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0"> </tspan></text>
						<text id="r-2" data-name="r" transform="translate(252.022 78.564) rotate(38.439)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">r</tspan></text>
						<text id="e" transform="matrix(0.746, 0.666, -0.666, 0.746, 268.903, 91.981)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">e</tspan></text>
						<text id="l" transform="translate(287.758 108.919) rotate(42.525)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">l</tspan></text>
						<text id="a" transform="translate(299.874 120.236) rotate(41.233)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">a</tspan></text>
						<text id="c-2" data-name="c" transform="matrix(0.849, 0.529, -0.529, 0.849, 325.608, 143.427)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">c</tspan></text>
						<text id="i" transform="translate(354.67 159.356) rotate(15.442)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">i</tspan></text>
						<g id="Grupo_1500" data-name="Grupo 1500">
							<g id="Grupo_1499" data-name="Grupo 1499" clip-path="url(#clip-path)">
							<text id="o-3" data-name="o" transform="translate(376.825 165.375) rotate(1.943)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">o</tspan></text>
							<text id="n" transform="translate(412.797 165.853) rotate(-11.423)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">n</tspan></text>
							</g>
						</g>
						<text id="a-2" data-name="a" transform="translate(449.094 157.877) rotate(-22.344)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">a</tspan></text>
						<text id="d-2" data-name="d" transform="translate(481.215 144.299) rotate(-32.294)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">d</tspan></text>
						<text id="o-4" data-name="o" transform="matrix(0.741, -0.672, 0.672, 0.741, 511.601, 124.559)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">o</tspan></text>
						<text id="s-2" data-name="s" transform="matrix(0.631, -0.776, 0.776, 0.631, 536.193, 101.418)" fill="#373a36" font-size="62" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">s</tspan></text>
					</svg>
				</div>
				<div class="relateds-contain owl-carousel">
					<?php while($prod->have_posts()): $prod->the_post(); ?>
						<?= do_shortcode('[product id="' . get_the_ID() . '"]'); ?>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
			<?php if(!empty($product_page)): ?>
			<a href="<?= $product_page; ?>" class="see-all">
				<span> <?= $cta_text; ?> </span>
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
		</section>
	<?php endif; ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>
<?php 
$script_handle = 'footer-js';
wp_enqueue_script(
	$script_handle,
	get_template_directory_uri() . '/js/partials-min/single-product.min.js',
	array('jquery'),
	null,
	true
);
?>