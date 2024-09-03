<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
$pro_id = $product->get_id();
?>
<?php if (get_the_post_thumbnail_url($pro_id, 'medium_large')) {
	$image = get_the_post_thumbnail_url($pro_id, 'medium_large');
} else {
	$image = '/wp-content/uploads/woocommerce-placeholder.png';
}
$attachment_ids = $product->get_gallery_image_ids();
$date = get_the_date();
$date_m = date_create($date);
$date_value = date_format($date_m, "d.m.Y");
$newDate = date("d.m.Y", strtotime($date_value . "+7 day"));
$date_today = date("d.m.Y");
$type = $product->get_type();
$price_html = $product->get_price_html();
$min_price = get_minimum_variation_price( $pro_id );
?>
<div class="product-cards d-inline-block text-decoration-none col-xl-3 col-md-4 col-6">
	<div class="product-img position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-20">
		<a href="<?php echo get_permalink($pro_id); ?>">
			<img src="<?php echo $image; ?>" class="w-100 h-100 object-cover img" alt="">
		</a>
		<?php if ($newDate >= $date_today) : ?>
			<div class="mont-medium font13 res-font11 leading20 res-leading16 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 mt-3 ms-4"> New In</div>
		<?php endif; ?>
		<?php if (is_user_logged_in()) : ?>
		<div class="like-img position-absolute bottom-0 end-0 me-3 mb-3 z-3">
		<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
		</div>
		<?php endif; ?>
	</div>
	<div class="product-content">
	<a href="<?php echo get_permalink($pro_id); ?>" class="text-decoration-none">
		<div class="mont-medium font16 res-font14 leading20 text-black dpb-10"><?= $product->get_name(); ?></div></a>
		<?php if($type == 'simple'): ?>
		<div class="mont-medium font13 res-font11 leading20 text-7D7D7D"><?php echo $price_html; ?></div>
		<?php else: ?>
		<div class="mont-medium font13 res-font11 leading20 text-7D7D7D">From <?php echo get_woocommerce_currency_symbol(); echo $min_price; ?></div>
		<?php endif; ?>
	</div>

</div>