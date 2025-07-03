<?php

/**
 * DGM Theme Functions
 * 
 * @package dgm-theme
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
  exit;
}

/**
 * Theme setup function
 */
function dgm_theme_setup()
{
  // Add theme support for title tag
  add_theme_support('title-tag');

  // Add theme support for post thumbnails
  add_theme_support('post-thumbnails');

  // Register navigation menus
  register_nav_menus([
    'menu-principal' => __('Menú Principal', 'dgm-theme'),
  ]);
}
add_action('after_setup_theme', 'dgm_theme_setup');

/**
 * Enqueue theme resources
 */
function dgm_theme_resources()
{
  // Enqueue main stylesheet
  wp_enqueue_style('dgm-style', get_stylesheet_uri(), [], '1.0.0');

  // Enqueue main script
  wp_enqueue_script('dgm-script', get_template_directory_uri() . '/script.js', ['jquery'], '1.0.0', true);

  // Localize script for AJAX and translations
  wp_localize_script('dgm-script', 'dgm_ajax', [
    'ajax_url' => admin_url('admin-ajax.php'),
    'nonce' => wp_create_nonce('dgm_nonce'),
  ]);
}
add_action('wp_enqueue_scripts', 'dgm_theme_resources');

/**
 * Register custom post type for sliders
 */
function dgm_main_sliders()
{
  $labels = [
    'name' => __('Sliders', 'dgm-theme'),
    'singular_name' => __('Slider', 'dgm-theme'),
    'menu_name' => __('Sliders', 'dgm-theme'),
    'add_new' => __('Agregar Nuevo', 'dgm-theme'),
    'add_new_item' => __('Agregar Nuevo Slider', 'dgm-theme'),
    'edit_item' => __('Editar Slider', 'dgm-theme'),
    'new_item' => __('Nuevo Slider', 'dgm-theme'),
    'view_item' => __('Ver Slider', 'dgm-theme'),
    'search_items' => __('Buscar Sliders', 'dgm-theme'),
    'not_found' => __('No se encontraron sliders', 'dgm-theme'),
    'not_found_in_trash' => __('No se encontraron sliders en la papelera', 'dgm-theme'),
  ];

  $args = [
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => false,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => ['slug' => 'slider'],
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'has_archive' => false,
    'hierarchical' => false,
    'menu_position' => 20,
    'menu_icon' => 'dashicons-images-alt2',
    'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
    'show_in_rest' => true,
  ];

  register_post_type('slider', $args);
}
add_action('init', 'dgm_main_sliders');

/**
 * Enqueue external libraries
 */
function dgm_enqueue_external_libraries()
{
  // Enqueue Swiper.js
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11.0.0');
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], '11.0.0', true);

  // Enqueue Fancybox
  wp_enqueue_style('fancybox-css', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css', [], '5.0.0');
  wp_enqueue_script('fancybox-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', [], '5.0.0', true);
}
add_action('wp_enqueue_scripts', 'dgm_enqueue_external_libraries');

/**
 * Load theme components
 */
function dgm_load_components()
{
  $components = [
    'menu',
    'button',
    'nuestros-productos',
    'icon-boxes',
    'feature-basico',
    'call-to-action',
    'slider',
    'gallery',
    'listing-post'
  ];

  foreach ($components as $component) {
    $file_path = get_template_directory() . '/components/' . $component . '.php';
    if (file_exists($file_path)) {
      require_once $file_path;
    }
  }
}
add_action('after_setup_theme', 'dgm_load_components');

/**
 * Add custom image sizes
 */
function dgm_add_image_sizes()
{
  add_image_size('slider-large', 1200, 600, true);
  add_image_size('slider-medium', 800, 400, true);
  add_image_size('product-thumb', 300, 300, true);
}
add_action('after_setup_theme', 'dgm_add_image_sizes');

/**
 * Security: Disable file editing in admin
 */
if (!defined('DISALLOW_FILE_EDIT')) {
  define('DISALLOW_FILE_EDIT', true);
}

/**
 * Add theme support for custom logo
 */
function dgm_custom_logo_setup()
{
  add_theme_support('custom-logo', [
    'height' => 100,
    'width' => 400,
    'flex-height' => true,
    'flex-width' => true,
  ]);
}
add_action('after_setup_theme', 'dgm_custom_logo_setup');

/**
 * Yoast SEO Support
 */
function dgm_yoast_seo_support()
{
  // Add theme support for Yoast SEO breadcrumbs
  add_theme_support('yoast-seo-breadcrumbs');

  // Add theme support for Yoast SEO schema markup
  add_theme_support('yoast-seo-schema');
}
add_action('after_setup_theme', 'dgm_yoast_seo_support');

/**
 * Google Site Kit Support
 */
function dgm_google_site_kit_support()
{
  // Add theme support for Google Site Kit
  add_theme_support('google-site-kit');

  // Add theme support for Google Analytics
  add_theme_support('google-analytics');

  // Add theme support for Google Tag Manager
  add_theme_support('google-tag-manager');
}
add_action('after_setup_theme', 'dgm_google_site_kit_support');

/**
 * Add meta tags support for SEO
 */
function dgm_add_meta_tags()
{
  // Add support for meta description
  add_theme_support('meta-description');

  // Add support for Open Graph meta tags
  add_theme_support('open-graph');

  // Add support for Twitter Card meta tags
  add_theme_support('twitter-card');
}
add_action('after_setup_theme', 'dgm_add_meta_tags');

/**
 * Add structured data support
 */
function dgm_add_structured_data_support()
{
  // Add support for JSON-LD structured data
  add_theme_support('json-ld');

  // Add support for microdata
  add_theme_support('microdata');
}
add_action('after_setup_theme', 'dgm_add_structured_data_support');

/**
 * Add support for Yoast SEO breadcrumbs in theme
 */
function dgm_yoast_breadcrumbs()
{
  if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<nav class="breadcrumbs">', '</nav>');
  }
}

/**
 * Add support for Google Site Kit analytics
 */
function dgm_google_site_kit_analytics()
{
  if (function_exists('googlesitekit_analytics_tracking')) {
    googlesitekit_analytics_tracking();
  }
}

/**
 * Add support for Google Site Kit tag manager
 */
function dgm_google_site_kit_tag_manager()
{
  if (function_exists('googlesitekit_tagmanager_tracking')) {
    googlesitekit_tagmanager_tracking();
  }
}
