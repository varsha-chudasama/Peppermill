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
	<?php if (apply_filters('woocommerce_show_page_title', true)): ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

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
		<div class="col-7 px-5 mx-auto text-center">
			<div class="content-title bodoni font60 leading70 dmb-25">Dining Chairs</div>
			<div class="content-desc mont-normal font13 leading24">
				Crafted to the highest standards, explore a diverse collection of dining chairs from Peppermill
				Interiors and uncover the perfect seating for your home dining room or business. 
			</div>
		</div>
	</div>
</section>

<section class="product-filter dmb-60">
	<div class="container">
		<div class="row">
			<div class="project-dropdown position-relative w-100 d-flex align-items-center justify-content-between">
				<div class="d-flex align-items-center">
					<div class="me-2">
						<div class="project-toggle mont-medium font13 leading24 border border-707070 d-inline-flex align-items-center rounded-pill"
							type="button" id="projectMenuButtonCategory" data-toggle="project" aria-haspopup="true"
							aria-expanded="false">
							Category
						</div>
						<div class="project-menu project-menus position-absolute radius10 flex-column z-3 p-3 dmt-10"
							aria-labelledby="projectMenuButtonCategory">
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10 active"
								data-filter="all">View All</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="kent">Kent action</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="las-vegas">Las Vegas</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="spa">Leamington spa</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="kent-1">Kent action 1</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="las-vegas-1">Las Vegas 1</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="spa-1">Leamington spa 1</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="kent-2">Kent action 2</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="las-vegas-2">Las Vegas 2</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="spa-2">Leamington spa 2</a>
						</div>
					</div>

					<div class="me-2">
						<div class="project-toggle mont-medium font13 leading24 border border-707070 d-inline-flex align-items-center rounded-pill"
							type="button" id="projectMenuButtonType" data-toggle="project" aria-haspopup="true"
							aria-expanded="false">
							Type
						</div>
						<div class="project-menu project-menus position-absolute radius10 flex-column z-3 p-3 dmt-10"
							aria-labelledby="projectMenuButtonType">
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10 active"
								data-filter="all">View All</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="type-1">Type 1</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="type-2">Type 2</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="type-3">Type 3</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="type-4">Type 4</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="type-5">Type 5</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="type-6">Type 6</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="type-7">Type 7</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="type-8">Type 8</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="type-9">Type 9</a>
						</div>
					</div>

					<div class="me-2">
						<div class="project-toggle mont-medium font13 leading24 border border-707070 d-inline-flex align-items-center rounded-pill"
							type="button" id="projectMenuButtonColour" data-toggle="project" aria-haspopup="true"
							aria-expanded="false">
							Colour
						</div>
						<div class="project-menu project-menus position-absolute radius10 flex-column z-3 p-3 dmt-10"
							aria-labelledby="projectMenuButtonColour">
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10 active"
								data-filter="all">All Colors</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="black">Black</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="blue">Blue</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="brown">Brown</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="cream">Cream</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="green">Green</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="grey">Grey</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="mixed">Mixed</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="natural">Natural</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="orange">Orange</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="pink">Pink</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="red">Red</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="white">white</a>
						</div>
					</div>

					<div class="me-2">
						<div class="project-toggle mont-medium font13 leading24 border border-707070 d-inline-flex align-items-center rounded-pill"
							type="button" id="projectMenuButtonAvailability" data-toggle="project" aria-haspopup="true"
							aria-expanded="false">
							Availability
						</div>
						<div class="project-menu project-menus position-absolute radius10 flex-column z-3 p-3 dmt-10"
							aria-labelledby="projectMenuButtonType">
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10 active"
								data-filter="all">View All</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="availability-1">Availability 1</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="availability-2">Availability 2</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="availability-3">Availability 3</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="availability-4">Availability 4</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="availability-5">Availability 5</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="availability-6">Availability 6</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="availability-7">Availability 7</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="availability-8">Availability 8</a>
							<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
								data-filter="availability-9">Availability 9</a>
						</div>
					</div>
				</div>
				<!-- <form class="woocommerce-ordering mb-0" method="get">
					<div class="select-sort-by">
						<select name="orderby"
							class="form-input select-custom-dropdown h-100 orderby mont-medium font13 leading24 border border-707070 d-inline-flex align-items-center rounded-pill "
							data-placeholder="Sort: Name" aria-label="Shop order">
							<option value="menu_order" selected="selected"
								class="text-decoration-none mont-medium font13 leading24 text-black position-relative text-nowrap dpt-10 dpb-10">sort by</option>
							<option value="popularity" class="text-decoration-none mont-medium font13 leading24 text-black position-relative text-nowrap dpt-10 dpb-10">Sort by
								popularity</option>
							<option value="rating" class="text-decoration-none mont-medium font13 leading24 text-black position-relative text-nowrap dpt-10 dpb-10">Sort by average
								rating</option>
							<option value="date" class="text-decoration-none mont-medium font13 leading24 text-black position-relative text-nowrap dpt-10 dpb-10">Sort by latest
							</option>
							<option value="price" class="text-decoration-none mont-medium font13 leading24 text-black position-relative text-nowrap dpt-10 dpb-10">Sort by price: low
								to high</option>
							<option value="price-desc" class="text-decoration-none mont-medium font13 leading24 text-black position-relative text-nowrap dpt-10 dpb-10">Sort by
								price: high to low</option>
						</select>
					</div>
				</form> -->
				<div class="d-flex justify-content-end position-relative">
					<div class="project-toggle mont-medium font13 leading24 border border-707070 d-inline-flex align-items-center rounded-pill"
						type="button" id="projectMenuButtonSort" data-toggle="project" aria-haspopup="true"
						aria-expanded="false">
						Sort: Name
					</div>
					<div class="project-menu project-menus position-absolute radius10 flex-column z-3 p-3 dmt-40"
						aria-labelledby="projectMenuButtonSort">
						<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative text-nowrap dmb-10 active"
							data-filter="all">Default Sorting</a>
						<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative text-nowrap dmb-10"
							data-filter="popularity">Sort by popularity</a>
						<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative text-nowrap dmb-10"
							data-filter="rating">Sort by average rating</a>
						<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative text-nowrap dmb-10"
							data-filter="date">Sort by latest</a>
						<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative text-nowrap dmb-10"
							data-filter="price">Sort by price: low to high</a>
						<a class="activity-button text-decoration-none mont-medium font13 leading24 text-white position-relative text-nowrap dmb-10"
							data-filter="price-desc">Sort by price: high to low</a>
					</div>
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