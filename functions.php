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


add_filter('woocommerce_default_address_fields', 'override_address_fields');
function override_address_fields($address_fields)
{
  $address_fields['first_name']['placeholder'] = 'First Name…';
  $address_fields['last_name']['placeholder'] = 'Last Name…';
  $address_fields['address_1']['placeholder'] = 'House Number*…';
  $address_fields['address_2']['placeholder'] = 'Select Address…';
  $address_fields['state']['placeholder'] = 'State...';
  $address_fields['city']['placeholder'] = 'City...';
  return $address_fields;
}


add_filter('woocommerce_checkout_fields', function ($fields) {

  $fields['billing']['billing_postcode']['placeholder'] = __('Postcode*…', 'woocommerce');
  $fields['billing']['billing_phone']['placeholder'] = __('Phone Number*…', 'woocommerce');
  $fields['billing']['billing_email']['placeholder'] = __('Email Address…', 'woocommerce');
  $fields['billing']['billing_company']['placeholder'] = __('Company…', 'woocommerce');


  return $fields;
});

add_filter("woocommerce_checkout_fields", "custom_override_checkout_fields", 1);
function custom_override_checkout_fields($fields)
{
  $fields['billing']['billing_email']['priority'] = 1;
  $fields['billing']['billing_first_name']['priority'] = 2;
  $fields['billing']['billing_last_name']['priority'] = 3;
  $fields['billing']['billing_address_1']['priority'] = 5;
  $fields['billing']['billing_postcode']['priority'] = 4;
  $fields['billing']['billing_address_2']['priority'] = 6;
  $fields['billing']['billing_phone']['priority'] = 11;
  $fields['billing']['billing_company']['priority'] = 10;
  $fields['billing']['billing_country']['priority'] = 9;
  $fields['billing']['billing_state']['priority'] = 8;
  $fields['billing']['billing_city']['priority'] = 7;
  return $fields;
}

function custom_woocommerce_checkout_fields($fields) {
  // Add a new custom field
  $fields['billing']['billing_parking'] = array(
      'type'        => 'text',
      'value'        => 'yes',
      'label'       => __('Parking', 'text-domain'),
      'placeholder' => __('Enter parking information', 'text-domain'),
      'required'    => false,
      'class'       => array('form-row-wide'),
      'clear'       => true,
      'priority'    => 30,
  );

  // Add other custom fields similarly
  $fields['billing']['parking_billing'] = array(
      'type'        => 'text',
      'label'       => __('Parking Billing', 'text-domain'),
      'placeholder' => __('Enter parking billing information', 'text-domain'),
      'required'    => false,
      'class'       => array('form-row-wide'),
      'clear'       => true,
      'priority'    => 31,
  );

  $fields['billing']['billing_access'] = array(
      'type'        => 'text',
      'label'       => __('Access', 'text-domain'),
      'placeholder' => __('Enter access information', 'text-domain'),
      'required'    => false,
      'class'       => array('form-row-wide'),
      'clear'       => true,
      'priority'    => 32,
  );

  $fields['billing']['stairs'] = array(
      'type'        => 'text',
      'label'       => __('Stairs', 'text-domain'),
      'placeholder' => __('Enter stairs information', 'text-domain'),
      'required'    => false,
      'class'       => array('form-row-wide'),
      'clear'       => true,
      'priority'    => 33,
  );

  $fields['billing']['billing_lift'] = array(
      'type'        => 'text',
      'label'       => __('Lift', 'text-domain'),
      'placeholder' => __('Enter lift information', 'text-domain'),
      'required'    => false,
      'class'       => array('form-row-wide'),
      'clear'       => true,
      'priority'    => 34,
  );

  return $fields;
}
add_filter('woocommerce_checkout_fields', 'custom_woocommerce_checkout_fields');

function custom_woocommerce_checkout_field_update_order_meta($order_id) {
  error_log(print_r($_POST, true)); // This will log all POST data to your debug log

  if (!empty($_POST['billing_parking'])) {
      update_post_meta($order_id, 'billing_parking', sanitize_text_field($_POST['billing_parking']));
  }

  if (!empty($_POST['parking_billing'])) {
      update_post_meta($order_id, 'parking_billing', sanitize_text_field($_POST['parking_billing']));
  }

  if (!empty($_POST['billing_access'])) {
      update_post_meta($order_id, 'billing_access', sanitize_text_field($_POST['billing_access']));
  }

  if (!empty($_POST['stairs'])) {
      update_post_meta($order_id, 'stairs', sanitize_text_field($_POST['stairs']));
  }

  if (!empty($_POST['billing_lift'])) {
      update_post_meta($order_id, 'billing_lift', sanitize_text_field($_POST['billing_lift']));
  }
}
add_action('woocommerce_checkout_update_order_meta', 'custom_woocommerce_checkout_field_update_order_meta');

function display_custom_fields_in_admin_order_meta($order) {
  $order_id = $order->get_id();

  // Retrieve custom fields
  $billing_parking = get_post_meta($order_id, 'billing_parking', true);
  $parking_billing = get_post_meta($order_id, 'parking_billing', true);
  $billing_access = get_post_meta($order_id, 'billing_access', true);
  $stairs = get_post_meta($order_id, 'stairs', true);
  $billing_lift = get_post_meta($order_id, 'billing_lift', true);

  // Display each custom field if it exists
  if ($billing_parking) {
      echo '<p><strong>' . __('Parking Information:', 'text-domain') . '</strong> ' . esc_html($billing_parking) . '</p>';
  }
  if ($parking_billing) {
      echo '<p><strong>' . __('Parking Billing:', 'text-domain') . '</strong> ' . esc_html($parking_billing) . '</p>';
  }
  if ($billing_access) {
      echo '<p><strong>' . __('Access Information:', 'text-domain') . '</strong> ' . esc_html($billing_access) . '</p>';
  }
  if ($stairs) {
      echo '<p><strong>' . __('Stairs Information:', 'text-domain') . '</strong> ' . esc_html($stairs) . '</p>';
  }
  if ($billing_lift) {
      echo '<p><strong>' . __('Lift Information:', 'text-domain') . '</strong> ' . esc_html($billing_lift) . '</p>';
  }
}
add_action('woocommerce_admin_order_data_after_billing_address', 'display_custom_fields_in_admin_order_meta', 10, 1);

function my_taxonomies_testimonial_type()
{
  $plural_name = 'testimonial Type';
  $singular_name = 'testimonial type';

  $labels = array(
    'name' => _x($singular_name, 'taxonomy general name'),
    'singular_name' => _x($singular_name . ' Category', 'taxonomy singular name'),
    'search_items' => __('Search ' . $singular_name . ' Categories'),
    'all_items' => __('All ' . $singular_name . ' Categories'),
    'parent_item' => __('Parent ' . $singular_name . ' Category'),
    'parent_item_colon' => __('Parent ' . $singular_name . ' Category:'),
    'edit_item' => __('Edit ' . $singular_name . ' Category'),
    'update_item' => __('Update ' . $singular_name . ' Category'),
    'add_new_item' => __('Add New ' . $singular_name . ' Category'),
    'new_item_name' => __('New ' . $singular_name . ' Category'),
    'menu_name' => __('' . $singular_name . ' Categories'),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy('testimonial-type', 'testimonial', $args);
}
add_action('init', 'my_taxonomies_testimonial_type', 0);

function my_taxonomies_testimonial_category()
{
  $plural_name = 'testimonial Category';
  $singular_name = 'testimonial category';

  $labels = array(
    'name' => _x($singular_name, 'taxonomy general name'),
    'singular_name' => _x($singular_name . ' Category', 'taxonomy singular name'),
    'search_items' => __('Search ' . $singular_name . ' Categories'),
    'all_items' => __('All ' . $singular_name . ' Categories'),
    'parent_item' => __('Parent ' . $singular_name . ' Category'),
    'parent_item_colon' => __('Parent ' . $singular_name . ' Category:'),
    'edit_item' => __('Edit ' . $singular_name . ' Category'),
    'update_item' => __('Update ' . $singular_name . ' Category'),
    'add_new_item' => __('Add New ' . $singular_name . ' Category'),
    'new_item_name' => __('New ' . $singular_name . ' Category'),
    'menu_name' => __('' . $singular_name . ' Categories'),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy('testimonial-category', 'testimonial', $args);
}
add_action('init', 'my_taxonomies_testimonial_category', 0);
