<?php
/**
 * Checkout shipping information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-shipping.php.
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
 * @global WC_Checkout $checkout
 */

defined( 'ABSPATH' ) || exit;
?>
<div id="ship-to-different-address" class="dpt-65 tpt-25 dmt-60">
		<label class="woocommerce-form__label d-flex lh-1 align-items-center justify-content-between toggle-checkbox-ship woocommerce-form__label-for-checkbox checkbox">
			<span class="lh-base text-uppercase avenir-heavy font-11px resfont-18px text-uppercase spacing-165px label"><?php esc_html_e('Is your billing address the same as the delivery', 'woocommerce'); ?></span>
			<div class="value-yes-no d-flex align-items-center ps-4 ms-3">
				<span class="lh-1 text-uppercase avenir-heavy font-10px text-uppercase spacing-1px">Yes</span>
				<div class="toogle-btn-div position-relative mb-0 px-2">
					<input id="ship-to-different-address-checkbox toggle-btn" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox " <?php checked(apply_filters('woocommerce_ship_to_different_address_checked', 'shipping' === get_option('woocommerce_ship_to_destination') ? 1 : 0), 1); ?> type="checkbox" name="ship_to_different_address" value="1" />
					<label for="toggle-btn" class="toogle-btn"></label>
				</div>
				<span class="lh-1 text-uppercase avenir-heavy font-10px text-uppercase spacing-1px">No</span>
			</div>
		</label>
	</div>
<div class="">Delivery Options</div>
	<?php if (WC()->cart->needs_shipping() && WC()->cart->show_shipping()): ?>

<?php do_action('woocommerce_review_order_before_shipping'); ?>

<?php wc_cart_totals_shipping_html(); ?>

<?php do_action('woocommerce_review_order_after_shipping'); ?>

<?php endif; ?>
<div class="">Please fill in the below for ease of delivery:</div>
<div class="">Are there any parking restrictions?</div>
<div class="">
	<div class="radio">
		<input type="radio" name="billing_parking" value="Yes" checked>
		<label>Yes</label>
	</div>

	<div class="radio">
		<input type="radio" name="billing_parking" Value="No">
		<label>No</label>
	</div>
	<div class="d-flex flex-column dmb-25">
	<input type="text" class="input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4" name="parking_billing" placeholder="Enter here…"/>
	</div>
</div>
<div class="">Are there any access restrictions?</div>
<div class="">
	<div class="radio">
		<input type="radio" name="billing_access" value="Yes" checked>
		<label>Yes</label>
	</div>

	<div class="radio">
		<input type="radio" name="billing_access" Value="No">
		<label>No</label>
	</div>
<div class="">How many flights of stairs?</div>
	<div class="d-flex flex-column dmb-25">
	<select name="stairs">
		<option value="10">10</option>
		<option value="20">20</option>
		<option value="30">30</option>
		<option value="40">40</option>
		<option value="50">50</option>
		<option value="60">60</option>
	</select>
	</div>
</div>

<div class="">Does your property have a lift?</div>
<div class="">
	<div class="radio">
		<input type="radio" name="billing_lift" value="Yes" checked>
		<label>Yes</label>
	</div>

	<div class="radio">
		<input type="radio" name="billing_lift" Value="No">
		<label>No</label>
	</div>
</div>

<div class="woocommerce-shipping-fields">
	<?php if ( true === WC()->cart->needs_shipping_address() ) : ?>

		<div class="shipping_address">

			<?php do_action( 'woocommerce_before_checkout_shipping_form', $checkout ); ?>

			<div class="woocommerce-shipping-fields__field-wrapper">
				<?php
				$fields = $checkout->get_checkout_fields( 'shipping' );

				foreach ( $fields as $key => $field ) {
					woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
				}
				?>
			</div>

			<?php do_action( 'woocommerce_after_checkout_shipping_form', $checkout ); ?>

		</div>

	<?php endif; ?>
</div>
<div class="woocommerce-additional-fields">
	<?php do_action( 'woocommerce_before_order_notes', $checkout ); ?>

	<?php if ( apply_filters( 'woocommerce_enable_order_notes_field', 'yes' === get_option( 'woocommerce_enable_order_comments', 'yes' ) ) ) : ?>

		<?php if ( ! WC()->cart->needs_shipping() || wc_ship_to_billing_address_only() ) : ?>

			<h3><?php esc_html_e( 'Additional information', 'woocommerce' ); ?></h3>

		<?php endif; ?>

		<div class="woocommerce-additional-fields__field-wrapper">
			<?php foreach ( $checkout->get_checkout_fields( 'order' ) as $key => $field ) : ?>
				<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
			<?php endforeach; ?>
		</div>

	<?php endif; ?>

	<?php do_action( 'woocommerce_after_order_notes', $checkout ); ?>
</div>
