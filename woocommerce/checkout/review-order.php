<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined('ABSPATH') || exit;
?>
<div class="shop_table woocommerce-checkout-review-order-table border-top border-EBEBEB">
	<div>
		<div class="d-flex align-items-center dmb-30 dpt-20">
			<div class="col-8">
				<div class="product-name mont-semibold font9 leading11 space0_23 text-918E8E text-uppercase">
					<?php esc_html_e('Product', 'woocommerce'); ?>
				</div>
			</div>
			<div class="col-2">
				<div class="product-quantity mont-semibold font9 leading11 space0_23 text-918E8E text-uppercase text-center">
					<?php esc_html_e('QTY', 'woocommerce'); ?>
				</div>
			</div>
			<div class="col-2">
				<div class="product-price mont-semibold font9 leading11 space0_23 text-918E8E text-uppercase text-end">
					<?php esc_html_e('Price', 'woocommerce'); ?>
				</div>
			</div>
			<!-- <div class="product-total"><?php esc_html_e('Subtotal', 'woocommerce'); ?></div> -->
		</div>
	</div>
	<div class="border-bottom border-EBEBEB">
		<?php
		do_action('woocommerce_review_order_before_cart_contents');

		foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
			$_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);

			if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key)) {
				?>
				<div
					class="<?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item d-flex align-items-center dpb-35', $cart_item, $cart_item_key)); ?>">
					<div class="col-8 product-detail d-flex align-items-center">
						<div class="product-thumbnail">
							<?php
							$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

							if (!$product_permalink) {
								echo $thumbnail; // PHPCS: XSS ok.
							} else {
								printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
							}
							?>
						</div>
						<div class="px-lg-4 px-3">
							<div class="product-name mont-medium font13 leading16 text-black dmb-5">
								<?php echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key)) . '&nbsp;'; ?>
								<?php echo wc_get_formatted_cart_item_data($cart_item); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
							<div class="mont-medium font13 leading20 text-918E8E">
								<?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
						</div>
					</div>
					<div class="col-2">
						<?php echo apply_filters('woocommerce_checkout_cart_item_quantity', ' <div class="product-quantity mont-medium font13 leading20 text-918E8E">' . sprintf('&nbsp;%s', $cart_item['quantity']) . '</div>', $cart_item, $cart_item_key); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</div>
					<div class="col-2">
						<div class="product-price mont-medium font13 leading20 text-918E8E">
							<?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</div>
					</div>
				</div>
				<?php
			}
		}

		do_action('woocommerce_review_order_after_cart_contents');
		?>
	</div>
	<div class="dpt-20">

		<div class="cart-delivery dmb-15 d-flex align-items-center justify-content-between">
			<div><?php esc_html_e('Delivery', 'woocommerce'); ?></div>
			<div><?php wc_cart_totals_subtotal_html(); ?></div>
		</div>

		<div class="cart-subtotal dmb-15 d-flex align-items-center justify-content-between">
			<div><?php esc_html_e('Subtotal', 'woocommerce'); ?></div>
			<div><?php wc_cart_totals_subtotal_html(); ?></div>
		</div>

		<?php foreach (WC()->cart->get_coupons() as $code => $coupon): ?>
			<div class="cart-discount coupon-<?php echo esc_attr(sanitize_title($code)); ?>">
				<div><?php wc_cart_totals_coupon_label($coupon); ?></div>
				<div><?php wc_cart_totals_coupon_html($coupon); ?></div>
			</div>
		<?php endforeach; ?>

		

		<?php foreach (WC()->cart->get_fees() as $fee): ?>
			<div class="fee">
				<div><?php echo esc_html($fee->name); ?></div>
				<div><?php wc_cart_totals_fee_html($fee); ?></div>
			</div>
		<?php endforeach; ?>

		<?php if (wc_tax_enabled() && !WC()->cart->display_prices_including_tax()): ?>
			<?php if ('itemized' === get_option('woocommerce_tax_total_display')): ?>
				<?php foreach (WC()->cart->get_tax_totals() as $code => $tax): // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited ?>
					<div class="tax-rate tax-rate-<?php echo esc_attr(sanitize_title($code)); ?>">
						<div><?php echo esc_html($tax->label); ?></div>
						<div><?php echo wp_kses_post($tax->formatted_amount); ?></div>
					</div>
				<?php endforeach; ?>
			<?php else: ?>
				<div class="tax-total">
					<div><?php echo esc_html(WC()->countries->tax_or_vat()); ?></div>
					<div><?php wc_cart_totals_taxes_total_html(); ?></div>
				</div>
			<?php endif; ?>
		<?php endif; ?>

		<?php do_action('woocommerce_review_order_before_order_total'); ?>

		<div class="order-total d-flex align-items-center justify-content-between">
			<div><?php esc_html_e('Total', 'woocommerce'); ?></div>
			<div><?php wc_cart_totals_order_total_html(); ?></div>
		</div>

		<?php do_action('woocommerce_review_order_after_order_total'); ?>

	</div>
</div>