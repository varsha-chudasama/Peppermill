<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
$curious_includes = [
  'lib/assets.php',  // Scripts and stylesheets
  'lib/extras.php',  // Custom functions
  'lib/setup.php',   // Theme setup
  'lib/titles.php',  // Page titles
  'lib/wrapper.php'  // Theme wrapper class
];

foreach ($curious_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function mytheme_add_woocommerce_support()
{
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(
    array(
      'page_title' => 'Header',
      'menu_title' => 'Header',
      'menu_slug' => 'header-options',
      'capability' => 'edit_posts',
      'redirect' => false
    )
  );
  acf_add_options_page(
    array(
      'page_title' => 'Footer',
      'menu_title' => 'Footer',
      'menu_slug' => 'footer-options',
      'capability' => 'edit_posts',
      'redirect' => false
    )
  );
}

add_action('init', 'create_project_post_type');
function create_project_post_type()
{

  $supports = array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes');
  $item_name = 'project';
  $plural_name = 'projects';
  $singular_name = 'project';

  register_post_type(
    $item_name,
    array(
      'labels' => array(
        'name' => __(ucfirst($plural_name)),
        'singular_name' => __(ucfirst($singular_name)),
        'add_new' => 'Add new ' . $singular_name,
        'add_new_item' => 'Add new ' . $singular_name,
        'edit_item' => ' Edit' . $singular_name,
        'new_item' => 'New ' . $singular_name,
        'all_items' => 'All ' . $plural_name,
        'view_item' => 'View ' . $plural_name,
        'search_items' => 'Search ' . $plural_name,
      ),
      'public' => true,
      'has_archive' => true,

      'supports' => $supports,
    )
  );
  flush_rewrite_rules();
}

add_action('init', 'create_testimonial_post_type');
function create_testimonial_post_type()
{

  $supports = array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes');
  $item_name = 'testimonial';
  $plural_name = 'testimonials';
  $singular_name = 'testimonial';

  register_post_type(
    $item_name,
    array(
      'labels' => array(
        'name' => __(ucfirst($plural_name)),
        'singular_name' => __(ucfirst($singular_name)),
        'add_new' => 'Add new ' . $singular_name,
        'add_new_item' => 'Add new ' . $singular_name,
        'edit_item' => ' Edit' . $singular_name,
        'new_item' => 'New ' . $singular_name,
        'all_items' => 'All ' . $plural_name,
        'view_item' => 'View ' . $plural_name,
        'search_items' => 'Search ' . $plural_name,
      ),
      'public' => true,
      'has_archive' => true,

      'supports' => $supports,
    )
  );
  flush_rewrite_rules();
}

add_action('init', 'create_faq_post_type');
function create_faq_post_type()
{

  $supports = array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes');
  $item_name = 'faq';
  $plural_name = 'faqs';
  $singular_name = 'faq';

  register_post_type(
    $item_name,
    array(
      'labels' => array(
        'name' => __(ucfirst($plural_name)),
        'singular_name' => __(ucfirst($singular_name)),
        'add_new' => 'Add new ' . $singular_name,
        'add_new_item' => 'Add new ' . $singular_name,
        'edit_item' => ' Edit' . $singular_name,
        'new_item' => 'New ' . $singular_name,
        'all_items' => 'All ' . $plural_name,
        'view_item' => 'View ' . $plural_name,
        'search_items' => 'Search ' . $plural_name,
      ),
      'public' => true,
      'has_archive' => true,

      'supports' => $supports,
    )
  );
  flush_rewrite_rules();
}


add_action('init', 'create_Vacancies_post_type');
function create_Vacancies_post_type()
{

  $supports = array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes');
  $item_name = 'Vacancies';
  $plural_name = 'Vacancies';
  $singular_name = 'Vacancies';

  register_post_type(
    $item_name,
    array(
      'labels' => array(
        'name' => __(ucfirst($plural_name)),
        'singular_name' => __(ucfirst($singular_name)),
        'add_new' => 'Add new ' . $singular_name,
        'add_new_item' => 'Add new ' . $singular_name,
        'edit_item' => ' Edit' . $singular_name,
        'new_item' => 'New ' . $singular_name,
        'all_items' => 'All ' . $plural_name,
        'view_item' => 'View ' . $plural_name,
        'search_items' => 'Search ' . $plural_name,
      ),
      'public' => true,
      'has_archive' => true,

      'supports' => $supports,
    )
  );
  flush_rewrite_rules();
}

// Post Handlebar
add_action( 'wp_ajax_get_post_ajax', 'getpostAJAX' );
add_action( 'wp_ajax_nopriv_get_post_ajax', 'getpostAJAX' );

function getpostAJAX()
{
    $postQuery = isset($_POST['post_main']) ? sanitize_text_field($_POST['post_main']) : '';
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;

    $args_cat = [
      'post_type' => 'post',
      'posts_per_page' => 9,
      'post_status' => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => $paged
    ];
    if ($postQuery != 'all') {
      $tax_query = [
          [
              'taxonomy' => 'category',
              'field' => 'slug',
              'terms' => explode(',', $postQuery),
          ],
      ];
      $args_cat['tax_query'] = $tax_query;
  }
    $master_insight = new WP_Query($args_cat);
    if ($master_insight->have_posts()) :
        while ($master_insight->have_posts()) : $master_insight->the_post();

            $id = get_the_ID();
            $callback['data'][] = array(
                'title' => get_the_title(),               
                'content' => get_the_excerpt(),
                'link' => get_the_permalink($id),
                'image' => get_the_post_thumbnail_url( $id ),
                'current' =>  $term_value[0]->name,
            );

        endwhile;
        $callback['pagination'] = array(
          'current_page' => $paged,
          'total_pages' => $master_insight->max_num_pages,
      );
    else: 
      $callback['data'] = [];
      $callback['pagination'] = array(
          'current_page' => $paged,
          'total_pages' => 0,
      );  
      endif;

    echo json_encode($callback);

    wp_die();
}

function get_minimum_variation_price( $product_id ) {
  // Get the product object by ID
  $product = wc_get_product( $product_id );

  // Check if the product is a variable product
  if ( $product && $product->is_type( 'variable' ) ) {
      // Get all variations of the product
      $available_variations = $product->get_available_variations();

      // Initialize minimum price
      $min_price = null;

      // Loop through each variation
      foreach ( $available_variations as $variation ) {
          // Get the variation object
          $variation_obj = wc_get_product( $variation['variation_id'] );

          // Get the price of the variation
          $variation_price = $variation_obj->get_price();

          // Set the minimum price if it's the first variation or if the current variation's price is lower
          if ( is_null( $min_price ) || $variation_price < $min_price ) {
              $min_price = $variation_price;
          }
      }

      // Return the minimum price found
      return $min_price;
  }

  // Return false if the product is not variable or doesn't exist
  return false;
}
