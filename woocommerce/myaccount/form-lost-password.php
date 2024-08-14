<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_lost_password_form');
?>
<div class="col-5 ms-5 ps-5 pe-3">
	<div class="pe-3"></div>
	<form method="post" class="woocommerce-ResetPassword lost_reset_password">
		<div class="border-bottom border-EBEBEB dmb-30">
			<h2 class="bodoni font40 leading48 text-black dmb-5">Password Reset</h2>
			<p class="mont-medium font11 leading20 text-918E8E dmb-30">
				<?php echo apply_filters('woocommerce_lost_password_message', esc_html__('Please enter your email below to receive a password reset link.', 'woocommerce')); ?>
			</p><?php // @codingStandardsIgnoreLine ?>
		</div>

		<p class="woocommerce-form-row w-100 woocommerce-form-row--first form-row form-row-first mb-0">
			<label for="user_login"
				class="mont-medium font13 leading20 text-black dmb-10"><?php esc_html_e('Email Address*', 'woocommerce'); ?></label>
			<input placeholder="Please enter…"
				class="woocommerce-Input woocommerce-Input--text input-text input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4"
				type="text" name="user_login" id="user_login" autocomplete="username" />
		</p>

		<div class="clear"></div>

		<?php do_action('woocommerce_lostpassword_form'); ?>

		<div class="d-flex align-items-center dmt-35">
			<p class="woocommerce-form-row form-row">
				<input type="hidden" name="wc_reset_password" value="true" />
				<button type="submit"
					class="woocommerce-Button button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"
					value="<?php esc_attr_e('RESET MY PASSWORD', 'woocommerce'); ?>"><?php esc_html_e('RESET MY PASSWORD', 'woocommerce'); ?></button>
			</p>

			<a href="<?php echo get_home_url(); ?>/my-account" class="mont-medium font13 leading20 text-black ms-4">
				Back to login
			</a>
		</div>
		<?php wp_nonce_field('lost_password', 'woocommerce-lost-password-nonce'); ?>

	</form>
</div>
</div>
<?php
do_action('woocommerce_after_lost_password_form');
