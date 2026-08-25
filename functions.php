<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

/**
 * Register Theme Styles
 * https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 */
function sajo_styles() {
  wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/main.bundle.css' );
  wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style('owl-carousel.css', get_template_directory_uri() . '/css/owl.carousel.min.css');
  wp_enqueue_style('font-awesome.css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');

  $mainColor = get_field('primary_color', 'option');
  $secondaryColor = get_field('secundary_color', 'option');
  $thirdColor = get_field('third_color', 'option');
  $fourColor = get_field('four_color', 'option');
  $marronDark = get_field('marron_dark', 'option');
  $texture = get_field('background_global', 'option');
  $textureUrl = (is_array($texture) && !empty($texture['url'])) ? $texture['url'] : '';

  $inline_css = ":root {\n";
  $inline_css .= "  --main-color: {$mainColor};\n";
  $inline_css .= "  --secondary-color: {$secondaryColor};\n";
  $inline_css .= "  --third-color: {$thirdColor};\n";
  $inline_css .= "  --four-color: {$fourColor};\n";
  $inline_css .= "  --marron-dark: {$marronDark};\n";
  $inline_css .= "}\n";
  if (!empty($textureUrl)) {
    $inline_css .= "body { background-image: url('{$textureUrl}'); }\n";
  }

  wp_add_inline_style('main-styles', $inline_css);
}
add_action('wp_enqueue_scripts', 'sajo_styles');

/**
 * Register Theme Scripts
 * https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 */
function sajo_scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/main.bundle.js', array( 'jquery' ), '', true );
  wp_enqueue_script('font-awesome.js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js', array(), null, true);
  wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
  wp_enqueue_script('owl-carousel.js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true);

  $inline_js = 'const _sajoURI_ = "' . esc_js(get_template_directory_uri()) . '", _sajoURL_ = "' . esc_js(get_site_url()) . '";';
  wp_add_inline_script('main-scripts', $inline_js, 'before');
}
add_action('wp_enqueue_scripts', 'sajo_scripts');

/**
 * Register Navigation Menus
 * https://developer.wordpress.org/reference/functions/register_nav_menus/
 */
function sajo_navigation_menus() {
  $locations = array(
    'main_menu' => __( 'Main Menu', 'text_domain' )
  );
  register_nav_menus( $locations );
}
add_action( 'init', 'sajo_navigation_menus' );

/**
 * Theme support
 * https://developer.wordpress.org/reference/functions/add_theme_support/
 */
add_theme_support( 'custom-logo' );

/**
 * Install latest jQuery version 3.5.1
 */
function sajo_register_jquery() {
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', true);
  }
}
add_action('wp_enqueue_scripts', 'sajo_register_jquery', 1);

// Options page
add_action('init', function(){
  if (function_exists('acf_add_options_page')){
    acf_add_options_page(array(
      'page_title'    => 'Theme Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-settings',
      'capability'    => 'edit_posts',
      'redirect'      =>  true
      ));
    acf_add_options_sub_page(array(
      'page_title'     => 'Header',
      'menu_title'     => 'Header',
      'parent_slug'   => 'theme-settings',
    ));
    acf_add_options_sub_page(array(
      'page_title'     => 'Footer',
      'menu_title'     => 'Footer',
      'parent_slug'   => 'theme-settings',
    ));
    acf_add_options_sub_page(array(
      'page_title'     => 'Single product',
      'menu_title'     => 'Single product',
      'parent_slug'   => 'theme-settings',
    ));
  };
});
/*=========== Astral guide ===========*/
add_theme_support('post-thumbnails');
add_post_type_support( 'astral_guide', 'thumbnail' );
function astral_guide_post(){
  /*====== Argument post type =====*/
  $astral_guide = array(
    'public' => true,
    'has_archive' => true,
    'label'  => 'Astral guide',
    'menu_icon' => 'dashicons-book',
    'supports' => ['title', 'editor', 'thumbnail']
  );
  /*============ Register post type ============*/
  register_post_type('astral_guide', $astral_guide);
}
add_action('init', 'astral_guide_post', 3);
/*========== Endopint to show all Astral guide ==========*/
add_action( 'rest_api_init', function () {
  register_rest_route( 'astral', '/guides', array(
      array(
          'methods'               => WP_REST_Server::READABLE,
          'callback'              => 'show_astral_guide_handler',
          'permission_callback'   => '__return_true',          
      )
  ));
});
function show_astral_guide_handler($request){
  $page     = $request->get_param('page') ?: 1;
  $per_page = $request->get_param('per_page') ?: 6;
  $args = [
    'post_type'      => 'astral_guide',
    'post_status'    => 'publish',
    'paged'          => $page,
    'posts_per_page' => $per_page,
    'order'        => 'DESC',
  ];
  $query = new WP_Query($args);
  $astralGuides = [];

  while ($query->have_posts()) {
    $query->the_post();
    setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'Spanish_Spain');
    $date = get_the_date('j \d\e F Y');
    $publication_date = mb_strtoupper($date, 'UTF-8');
    array_push($astralGuides, array(
      'guide_name' => get_the_title(),
      'feature_image' => get_the_post_thumbnail(),
      'permalink' => get_the_permalink(),
      'the_date' => $publication_date,
    ));
  }
  wp_reset_postdata();
  return new WP_REST_Response([
    'astral_guide'   => $astralGuides,
    'total'      => $query->found_posts,
    'max_pages'  => $query->max_num_pages,
    'page'       => (int) $page,
  ], 200);
}

function sajo_hide_woocommerce_template_notice() {
  if ( is_admin() && class_exists( 'WC_Admin_Notices' ) ) {
    WC_Admin_Notices::remove_notice( 'template_files' );
  }
}
add_action( 'admin_init', 'sajo_hide_woocommerce_template_notice', 99 );