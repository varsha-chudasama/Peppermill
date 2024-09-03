<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;
$current_cat = get_queried_object();
$total   = 0;
if (is_shop()) :
    $page_id = wc_get_page_id('shop');
    $description = get_field('description', $page_id);
    $bottom_description = get_field('bottom_description', $page_id);
    $middle_box = get_field('middle_box', $page_id);

else :
    $description = get_field('description', $current_cat);
    $bottom_description = get_field('bottom_description', $current_cat);
    $middle_box = get_field('middle_box', $current_cat);
endif;
// get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

?>
<header class="woocommerce-products-header">

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action('woocommerce_archive_description');
	?>
</header>

<section class="center-title-section dpt-135 dmb-110">
	<div class="container">
		<div class="col-12 col-md-9 col-xl-7 px-lg-5 mx-auto text-center">
		<?php if (apply_filters('woocommerce_show_page_title', true)): ?>
			<div class="content-title bodoni font60 leading70 res-font35 res-leading45 dmb-25"><?php woocommerce_page_title(); ?></div>
		<?php endif; ?>
		<?php if(!empty($description)): ?>
			<div class="content-desc mont-normal font13 leading24">
				<?php echo $description;?>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>

<section class="product-filter dmb-60">
	<div class="container">
		<div class="row">
			<div class="project-dropdown position-relative w-100 d-flex align-items-center justify-content-between">
			<?php echo do_shortcode('[yith_wcan_filters slug="default-preset"]'); ?>
		
				<div class="d-flex justify-content-end position-relative">
			<?php echo do_shortcode('[yith_wcan_filters slug="draft-preset"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="product-section-main">
	<div class="container">

		<?php
		if (woocommerce_product_loop()) {

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */
			do_action('woocommerce_before_shop_loop');

			woocommerce_product_loop_start();

			if (wc_get_loop_prop('total')) {
				?>
				<div class="row row10">
					<div class="col-xl-6 col-md-8 col-12">
						<div class="product-cards product-banner-card">
							<div class="product-img position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-20">
								<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/home-hero.png" alt="" class="h-100 w-100 object-cover">
							</div>
							<div class="product-content">
								<div class="mont-medium font16 res-font14 leading20 text-black dpb-10 res-font15">Need help deciding?</div>
								<div class="mont-medium font13 leading20 text-7D7D7D">Explore our buying guide to find the right design and style for furnishing your home.</div>
								<a href="" class="mont-medium font13 leading20 text-black">Learn more</a>
							</div>
						</div>
					</div>
					<?php
					while (have_posts()) {
						the_post();

						/**
						 * Hook: woocommerce_shop_loop.
						 */
						do_action('woocommerce_shop_loop');

						wc_get_template_part('content', 'product');
					}
					?>
				</div>
			<?php }

			woocommerce_product_loop_end();
			$total = wc_get_loop_prop('total_pages');
            $current = isset($current) ? $current : wc_get_loop_prop('current_page');
            $base = isset($base) ? $base : esc_url_raw(str_replace(999999999, '%#%', remove_query_arg('add-to-cart', get_pagenum_link(999999999, false))));
            $format = isset($format) ? $format : '';

			/**
			 * Hook: woocommerce_after_shop_loop.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action('woocommerce_after_shop_loop');
		} else {
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action('woocommerce_no_products_found');
		}


		/**
		 * Hook: woocommerce_after_main_content.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action('woocommerce_after_main_content');

		/**
		 * Hook: woocommerce_sidebar.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		// do_action( 'woocommerce_sidebar' );
		?>
	</div>
</section>
<?php if(!empty($bottom_description)): ?>
<div class="spacing dmb-80"></div>
<!-- category-content-section -->
<section class="category-content-section">
	<div class="container">
		<div class="col-lg-7 col-12 mx-auto text-center px-lg-3">
			<?php foreach($bottom_description as $bottom_description_custom): ?>
			<div class="category-content dmb-80 px-1">
				<div class="bodoni font35 leading45 text-black dmb-30"><?php echo $bottom_description_custom['heading']; ?></div>
				<div class="mont-normal font13 leading23 space0_88 text-black">
					<div class="dmb-40">
					<?php echo $bottom_description_custom['content']; ?>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<div class="spacing dpb-90"></div>
<?php endif; ?>