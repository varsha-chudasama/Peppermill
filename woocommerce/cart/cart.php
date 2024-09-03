<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart'); ?>

<div class="col-lg-8 col-12 pe-lg-5">
	<div class="pe-lg-3">
		<form class="woocommerce-cart-form pe-lg-1" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
			<?php do_action('woocommerce_before_cart_table'); ?>

			<div class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
				<div class="dmt-20">
					<div class="d-flex align-items-center">
						<div class="col-lg-7 col-8">
							<div class="product-name mont-semibold font9 leading11 text-918E8E text-uppercase"><?php esc_html_e('Product', 'woocommerce'); ?></div>
						</div>
						<div class="col-2">
							<div class="product-quantity mont-semibold font9 leading11 text-918E8E text-uppercase text-center"><?php esc_html_e('QTY', 'woocommerce'); ?></div>
						</div>
						<div class="col-2 d-none d-lg-block">
							<div class="product-price mont-semibold font9 leading11 text-918E8E text-uppercase text-center"><?php esc_html_e('Price', 'woocommerce'); ?></div>
						</div>
						<div class="col-lg-1 col-2">
							<div class="product-remove mont-semibold font9 leading11 text-918E8E text-uppercase text-center">
								<!-- <span class="screen-reader-text"><?php esc_html_e('Remove', 'woocommerce'); ?></span> -->
								<span><?php esc_html_e('Remove', 'woocommerce'); ?></span>
							</div>
						</div>
					</div>
				</div>
				<div class="">
					<?php do_action('woocommerce_before_cart_contents'); ?>

					<?php
					foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
						$_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
						$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
						/**
						 * Filter the product name.
						 *
						 * @since 2.1.0
						 * @param string $product_name Name of the product in the cart.
						 * @param array $cart_item The product in the cart.
						 * @param string $cart_item_key Key for the product in the cart.
						 */
						$product_name = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);

						if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
							$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
							?>
							<div
								class="woocommerce-cart-form__cart-item d-flex align-items-center dpt-25 dpb-35 <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">

								<div class="col-lg-7 col-8 d-flex align-items-center">
									<div class="product-thumbnail">
										<?php
										$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

										if (!$product_permalink) {
											echo $thumbnail; // PHPCS: XSS ok.
										} else {
											printf('<a href="%s" class="d-inline-block h-100 w-100">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
										}
										?>
									</div>

									<div class="product-name px-lg-4 px-3" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
										<?php
										if (!$product_permalink) {
											echo wp_kses_post($product_name . '&nbsp;');
										} else {
											/**
											 * This filter is documented above.
											 *
											 * @since 2.1.0
											 */
											echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s" class="text-decoration-none mont-medium font16 leading16 text-black res-font14 res-leading16">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
										}

										do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

										// Meta data.
										echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.
								
										// Backorder notification.
										if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
											echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
										}
										?>
										<div class="product-price mont-medium font13 leading16 text-black d-lg-none" data-title="<?php esc_attr_e('Price', 'woocommerce'); ?>">
										<?php
										echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
										?>
									</div>
									</div>
								</div>

								<div class="col-2 d-flex align-items-center justify-content-center">
									<div class="mont-medium font13 leading20 text-black">
										-
									</div>
									<div class="product-quantity" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
										<?php
										if ($_product->is_sold_individually()) {
											$min_quantity = 1;
											$max_quantity = 1;
										} else {
											$min_quantity = 0;
											$max_quantity = $_product->get_max_purchase_quantity();
										}

										$product_quantity = woocommerce_quantity_input(
											array(
												'input_name' => "cart[{$cart_item_key}][qty]",
												'input_value' => $cart_item['quantity'],
												'max_value' => $max_quantity,
												'min_value' => $min_quantity,
												'product_name' => $product_name,
											),
											$_product,
											false
										);

										echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
										?>
									</div>
									<div class="mont-medium font13 leading20 text-black">
										+
									</div>
								</div>

								<div class="col-2 product-data text-center d-none d-lg-block">
									<div class="product-price mont-medium font13 leading16 text-black" data-title="<?php esc_attr_e('Price', 'woocommerce'); ?>">
										<?php
										echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
										?>
									</div>
								</div>

								<div class="col-lg-1 col-2 d-flex align-items-center justify-content-center">
									<div class="product-remove">
										<?php
										echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
											'woocommerce_cart_item_remove_link',
											sprintf(
												'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
												esc_url(wc_get_cart_remove_url($cart_item_key)),
												/* translators: %s is the product name */
												esc_attr(sprintf(__('Remove %s from cart', 'woocommerce'), wp_strip_all_tags($product_name))),
												esc_attr($product_id),
												esc_attr($_product->get_sku())
											),
											$cart_item_key
										);
										?>
									</div>
								</div>
							</div>
							<?php
						}
					}
					?>

					<?php do_action('woocommerce_cart_contents'); ?>

					<div>
						<div colspan="6" class="actions dmb-40">
							<div class="dpt-20 dpb-20 tpt-10 tpb-10 border-bottom border-EBEBEB dmb-40 d-flex justify-content-lg-end justify-content-between tmb-30">
								<a href="<?php echo get_home_url(); ?>/shop"
									class="d-inline-block mont-semibold font11 leading20 space0_28 text-918E8E bg-transparent border-0 ms-lg-5 res-font9 res-leading11">
									CONTINUE SHOPPING
								</a>
								<button type="submit"
									class="bg-transparent border-0 text-decoration-underline p-0 mont-semibold font11 leading20 space0_28 text-918E8E bg-transparent border-0 text-decoration-underline opacity-100 res-font9 res-leading11 ms-lg-5<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"
									name="update_cart"
									value="<?php esc_attr_e('UPDATE BASKET', 'woocommerce'); ?>"><?php esc_html_e('UPDATE BASKET', 'woocommerce'); ?></button>
							</div>

							<?php if (wc_coupons_enabled()) { ?>
								<div class="coupon d-flex align-items-center justify-content-lg-start justify-content-between">
									<label for="coupon_code" class="screen-reader-text"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label>
									<input type="text" name="coupon_code" class="input-text input-field mont-medium font12 leading16 text-black radius5 px-4 d-inline-flex res-font11 res-leading16"
										id="coupon_code" value="" placeholder="<?php esc_attr_e('Enter Promo Code…', 'woocommerce'); ?>" /> 
									<button type="submit" class="btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center ms-2 res-font9 res-leading11 <?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="apply_coupon" value="<?php esc_attr_e('ADD CODE +', 'woocommerce'); ?>">
										<?php esc_html_e('ADD CODE +', 'woocommerce'); ?>
									</button>
									<?php do_action('woocommerce_cart_coupon'); ?>
								</div>
							<?php } ?>

							<?php do_action('woocommerce_cart_actions'); ?>

							<?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
						</div>
					</div>
					<?php  $image = get_field('before_section'); ?>
					<div class="cart-banner-section position-relative overflow-hidden radius10 d-none d-lg-block">
						<img src="<?php echo $image['image']['url'] ?>" alt="">
						<div class="position-absolute bg-black w-100 h-100 top-0 opacity38"></div>
						<div
							class="position-absolute w-100 h-100 top-0 d-flex align-items-center justify-content-between px-5">
							<?php if(!empty($image['heading'])): ?>
							<div class="bodoni font35 leading45 text-white">
							<?php echo $image['heading'] ?>
							</div>
							<?php endif; ?>
							<?php if(!empty($image['button']['url'])): 
								$target_1 = ($image['button']['target'] == '_blank') ? "_blank" : "";
							?>
							<a href="<?php echo $image['button']['url']; ?>" target="<?php echo $target_1; ?>"
								class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
								<?php echo $image['button']['title']; ?>
							</a>
							<?php endif; ?>
						</div>
					</div>

					<?php do_action('woocommerce_after_cart_contents'); ?>
				</div>
			</div>
			<?php do_action('woocommerce_after_cart_table'); ?>
		</form>
	</div>
</div>

<?php do_action('woocommerce_before_cart_collaterals'); ?>

<div class="col-lg-4 col-12 ps-lg-4">
	<div class="cart-collaterals w-100">
		<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action('woocommerce_cart_collaterals');
		?>
	</div>
</div>

<?php do_action('woocommerce_after_cart'); ?>