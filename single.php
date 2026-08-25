<?php
/**
 * 
 * Default single.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$posttype = get_post_type();
switch ($posttype){
	case 'astral_guide':
		get_template_part('/templates/single-guide-template');
	break;
	case 'product':
		wc_get_template_part('single', 'product');
	break;
}
?>