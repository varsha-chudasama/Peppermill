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
<div class="col-lg-5 tmb-50 pe-lg-2 me-auto px-p-p">
	<form method="post" class="woocommerce-ResetPassword lost_reset_password">
		<div class="border-bottom border-EBEBEB dpb-30 dmb-30">
			<h2 class="bodoni font40 leading48 text-black res-font30 res-leading35 dmb-5">Password Reset</h2>
			<p class="mont-medium font11 leading20 text-918E8E">
				<?php echo apply_filters('woocommerce_lost_password_message', esc_html__('Please enter your email below to receive a password reset link.', 'woocommerce')); ?>
			</p>
			<?php // @codingStandardsIgnoreLine ?>
		</div>

		<div class="login-input-group dmb-50">
			<p class="woocommerce-form-row w-100 woocommerce-form-row--first form-row form-row-first mb-0 float-none clear">
				<label for="user_login" class="mont-medium font13 leading20 text-black dmb-10">
					<?php esc_html_e('Email Address*', 'woocommerce'); ?>
				</label>
				<input placeholder="Please enter…" class="woocommerce-Input woocommerce-Input--text input-text input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4" type="text" name="user_login" id="user_login" autocomplete="username" />
			</p>
		</div>

		<?php do_action('woocommerce_lostpassword_form'); ?>

		<div class="d-flex align-items-center">
			<p class="woocommerce-form-row form-row">
				<input type="hidden" name="wc_reset_password" value="true" />
				<button type="submit"
					class="woocommerce-Button btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex w-fit align-items-center justify-content-center <?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"
					value="<?php esc_attr_e('RESET MY PASSWORD', 'woocommerce'); ?>"><?php esc_html_e('RESET MY PASSWORD', 'woocommerce'); ?></button>
			</p>

			<a href="<?php echo get_home_url(); ?>/my-account" class="mont-medium font13 leading20 text-black ms-4">
				Back to login
			</a>
		</div>
		<?php wp_nonce_field('lost_password', 'woocommerce-lost-password-nonce'); ?>
	</form>
</div>
<?php
do_action('woocommerce_after_lost_password_form');
