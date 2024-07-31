<div class="col-12 single-product-section d-flex flex-wrap dpt-160">
	<?php
	/**
	 * Single Product Image
	 *
	 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
	 *
	 * HOWEVER, on occasion WooCommerce will need to update template files and you
	 * (the theme developer) will need to copy the new files to your theme to
	 * maintain compatibility. We try to do this as little as possible, but it does
	 * happen. When this occurs the version of the template file will be bumped and
	 * the readme will list any important changes.
	 *
	 * @see     https://woo.com/document/template-structure/
	 * @package WooCommerce\Templates
	 * @version 7.8.0
	 */

	defined('ABSPATH') || exit;

	// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
	if (!function_exists('wc_get_gallery_image_html')) {
		return;
	}

	global $product;

	$columns = apply_filters('woocommerce_product_thumbnails_columns', 4);
	$post_thumbnail_id = $product->get_image_id();
	$wrapper_classes = apply_filters(
		'woocommerce_single_product_image_gallery_classes',
		array(
			'woocommerce-product-gallery',
			'woocommerce-product-gallery--' . ($post_thumbnail_id ? 'with-images' : 'without-images'),
			'woocommerce-product-gallery--columns-' . absint($columns),
			'images',
		)
	);
	?>
	<div class="woocommerce-product-small">
		<div class="woocommerce-product-small_image">
			<div class="small-img h-100 radius5 position-relative overflow-hidden">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/product-1.png" alt=""
					class="w-100 h-100 object-cover">
			</div>
			<div class="small-img h-100 radius5 position-relative overflow-hidden">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/product-2.png" alt=""
					class="w-100 h-100 object-cover">
			</div>
			<div class="small-img h-100 radius5 position-relative overflow-hidden">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/product-3.png" alt=""
					class="w-100 h-100 object-cover">
			</div>
			<div class="small-img h-100 radius5 position-relative overflow-hidden">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/product-4.png" alt=""
					class="w-100 h-100 object-cover">
			</div>
			<div class="small-img h-100 radius5 position-relative overflow-hidden">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/product-5.png" alt=""
					class="w-100 h-100 object-cover">
			</div>
			<div class="small-img h-100 radius5 position-relative overflow-hidden">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/product-1.png" alt=""
					class="w-100 h-100 object-cover">
			</div>
			<div class="small-img h-100 radius5 position-relative overflow-hidden">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/product-2.png" alt=""
					class="w-100 h-100 object-cover">
			</div>
			<div class="small-img h-100 radius5 position-relative overflow-hidden">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/product-3.png" alt=""
					class="w-100 h-100 object-cover">
			</div>
			<div class="small-img h-100 radius5 position-relative overflow-hidden">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/product-4.png" alt=""
					class="w-100 h-100 object-cover">
			</div>
			<div class="small-img h-100 radius5 position-relative overflow-hidden">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/product-5.png" alt=""
					class="w-100 h-100 object-cover">
			</div>
		</div>
	</div>

	<div class="<?php echo esc_attr(implode(' ', array_map('sanitize_html_class', $wrapper_classes))); ?>"
		data-columns="<?php echo esc_attr($columns); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
		<div class="woocommerce-product-gallery__wrapper">
			<?php
			if ($post_thumbnail_id) {
				$html = wc_get_gallery_image_html($post_thumbnail_id, true);
			} else {
				$html = '<div class="woocommerce-product-gallery__image--placeholder">';
				$html .= sprintf('<img src="%s" alt="%s" class="wp-post-image" id="gfg-img" />', esc_url(wc_placeholder_img_src('woocommerce_single')), esc_html__('Awaiting product image', 'woocommerce'));
				$html .= '<div class="zoom-preview">Zoom Preview Here</div>';
				$html .= '</div>';

				echo $html;

			}


			echo apply_filters('woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
			
			do_action('woocommerce_product_thumbnails');
			?>
		</div>
		<!-- <div class="main">
			<img src="https://media.geeksforgeeks.org/wp-content/uploads/20220316223348/gfg.jpg" id="gfg-img"
				height="300px" width="300px" />
			<div class="zoom-preview"></div>
		</div> -->
	</div>