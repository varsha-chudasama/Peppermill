<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
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

defined('ABSPATH') || exit;
?>
<div class="delivery-details d-flex container-checkbox-password ps-0 dmb-45">
	<div class="delivery-btn-main w-100 me-4">
		<!-- <input type="radio" checked name="checkout-radio" id="checkout-radio-1">
		<label for="checkout-radio-1" class="font-sackers fontS leading16 spacing1-2 textlight-border position-relative cursor-pointer w-100 fw-400">delivery details</label> -->

		<label
			class="container-checkbox-password mont-semibold font9 leading16 space0_23 text-uppercase text-918E8E position-relative text-nowrap d-flex align-items-center"
			for="checkout-radio-1">
			<span class="label-text">
				delivery details
			</span>
			<input type="radio" class=" opacity-0" checked name="checkout-radio" id="checkout-radio-1">
			<span
				class="checkmark position-absolute top-0 end-0 bg-transparent rounded-circle border  border-BCBCBC"></span>
		</label>
	</div>
	<div class="payment-btn-main w-100 me-4">
		<!-- <input type="radio" name="checkout-radio" id="checkout-radio-2">
		<label class="font-sackers w-100 fontS fw-400 leading16 spacing1-2 textlight-border position-relative cursor-pointer payment-details" for="checkout-radio-2">review & payments</label> -->
		<label
			class="container-checkbox-password disable mont-semibold font9 leading16 space0_23 text-uppercase text-918E8E position-relative text-nowrap d-flex align-items-center"
			for="checkout-radio-2">
			<span class="label-text">
				REVIEW & PAYMENTS
			</span>
			<input type="radio" class=" opacity-0" checked name="checkout-radio" id="checkout-radio-2">
			<span
				class="checkmark position-absolute top-0 end-0 bg-transparent rounded-circle border  border-BCBCBC"></span>
		</label>
	</div>
</div>

<div class="woocommerce-billing-fields">
	
	<?php if (wc_ship_to_billing_address_only() && WC()->cart->needs_shipping()): ?>

		<h3><?php esc_html_e('Billing &amp; Shipping', 'woocommerce'); ?></h3>

	<?php else: ?>

		<h3 class="mont-medium font20 leading30 dmb-20"><?php esc_html_e('Delivery Details', 'woocommerce'); ?></h3>

	<?php endif; ?>

	<?php do_action('woocommerce_before_checkout_billing_form', $checkout); ?>

	<div class="woocommerce-billing-fields__field-wrapper">
		<?php
		$fields = $checkout->get_checkout_fields('billing');

		foreach ($fields as $key => $field) {
			woocommerce_form_field($key, $field, $checkout->get_value($key));
		}
		?>
	</div>

	<?php do_action('woocommerce_after_checkout_billing_form', $checkout); ?>
</div>

<?php if (!is_user_logged_in() && $checkout->is_registration_enabled()): ?>
	<div class="woocommerce-account-fields">
		<?php if (!$checkout->is_registration_required()): ?>

			<p class="form-row form-row-wide create-account">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount"
						<?php checked((true === $checkout->get_value('createaccount') || (true === apply_filters('woocommerce_create_account_default_checked', false))), true); ?> type="checkbox"
						name="createaccount" value="1" />
					<span><?php esc_html_e('Create an account?', 'woocommerce'); ?></span>
				</label>
			</p>

		<?php endif; ?>

		<?php do_action('woocommerce_before_checkout_registration_form', $checkout); ?>

		<?php if ($checkout->get_checkout_fields('account')): ?>

			<div class="create-account">
				<?php foreach ($checkout->get_checkout_fields('account') as $key => $field): ?>
					<?php woocommerce_form_field($key, $field, $checkout->get_value($key)); ?>
				<?php endforeach; ?>
				<div class="clear"></div>
			</div>

		<?php endif; ?>

		<?php do_action('woocommerce_after_checkout_registration_form', $checkout); ?>
	</div>
<?php endif; ?>