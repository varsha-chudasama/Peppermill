<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

do_action('woocommerce_before_customer_login_form'); ?>

<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')): ?>

	<div class="u-columns col2-set" id="customer_login">
		<div class="u-column1 col-1">
		<?php endif; ?>

		<div class="col-lg-5 tmb-50 pe-lg-2 me-auto px-p-p">
			<div class="border-bottom border-EBEBEB dpb-30 dmb-30">
				<h2 class="bodoni font40 leading48 text-black res-font30 res-leading35 dmb-5">
					<?php esc_html_e('Registered Customers', 'woocommerce'); ?>
				</h2>
				<div class="mont-medium font11 leading20 text-918E8E">
					If you already have and account, please
					sign in
					below
				</div>
			</div>
			<form class="woocommerce-form woocommerce-form-login" method="post">
				<?php do_action('woocommerce_login_form_start'); ?>
				<div class="login-input-group dmb-35">
					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide p-0 mb-4">
						<label for="username" class="mont-medium font13 leading20 text-black dmb-10"><?php esc_html_e('Email Address', 'woocommerce'); ?>&nbsp;<span
								class="required">*</span></label>
						<input type="text" placeholder="Please enter…" class="woocommerce-Input woocommerce-Input--text input-text input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4" name="username" id="username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
						<?php // @codingStandardsIgnoreLine ?>
					</p>
					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide p-0 mb-4">
						<label for="password" class="mont-medium font13 leading20 text-black dmb-10"><?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
						<input placeholder="Please enter…" class="woocommerce-Input woocommerce-Input--text input-text input-field w-100 mont-medium font12 leading16 text-918E8E radius5 ps-4 pe-5" type="password" name="password" id="password" autocomplete="current-password" />
					</p>
				</div>
				<?php do_action('woocommerce_login_form'); ?>
				<p class="form-row d-flex flex-wrap align-items-center dmt-35 p-0 mb-0">
					<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
					<button type="submit" class="woocommerce-button woocommerce-form-login__submit btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex w-fit align-items-center justify-content-center me-lg-4 <?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="login" value="<?php esc_attr_e('SIGN ME IN', 'woocommerce'); ?>">
						<?php esc_html_e('SIGN ME IN', 'woocommerce'); ?>
					</button>
					<span class="woocommerce-LostPassword lost_password res-w-100 tmt-30">
						<a class="mont-medium font13 leading20 text-black" href="<?php echo esc_url(wp_lostpassword_url()); ?>">
							<?php esc_html_e('Forgot your password? Reset here', 'woocommerce'); ?>
						</a>
					</span>
				</p>
				<?php do_action('woocommerce_login_form_end'); ?>
			</form>
		</div>

		<div class="col-lg-5 col-12 h-100 ms-auto position-absolute top-0 end-0 p-relative register-img">
          	<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/register-img.png" alt="" class="w-100 h-100 object-cover">
          	<div class="position-absolute w-100 h-100 bg-black opacity38 top-0"></div>
          	<div class="position-absolute w-100 top-center z-3 dmt-50 tmt-0 px-p-p">
				<div class="col-lg-8 col-12 mx-auto">
					<div class="mont-semibold font24 leading30 space0_68 text-white dmb-20 res-font20 res-leading24 res-space0_55">
						NEW CUSTOMER?
					</div>
					<div class="mont-medium font14 leading24 text-white dmb-20">
						Create an account for a quicker checkout, easy order tracking and exclusive news and updates.
					</div>
					<div class="d-inline-block">
						<a href="<?php echo get_home_url()?>/register"
						class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center me-4">CREATE
						AN ACCOUNT</a>
					</div>
				</div>
          	</div>
        </div>

		<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')): ?>

		</div>

		<div class="u-column2 col-2">

			<h2><?php esc_html_e('Register', 'woocommerce'); ?></h2>

			<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action('woocommerce_register_form_tag'); ?>>

				<?php do_action('woocommerce_register_form_start'); ?>

				<?php if ('no' === get_option('woocommerce_registration_generate_username')): ?>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="reg_username"><?php esc_html_e('Username', 'woocommerce'); ?>&nbsp;<span
								class="required">*</span></label>
						<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username"
							id="reg_username" autocomplete="username"
							value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
					</p>

				<?php endif; ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_email"><?php esc_html_e('Email address', 'woocommerce'); ?>&nbsp;<span
							class="required">*</span></label>
					<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email"
						id="reg_email" autocomplete="email"
						value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>

				<?php if ('no' === get_option('woocommerce_registration_generate_password')): ?>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="reg_password"><?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span
								class="required">*</span></label>
						<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password"
							id="reg_password" autocomplete="new-password" />
					</p>

				<?php else: ?>

					<p><?php esc_html_e('A link to set a new password will be sent to your email address.', 'woocommerce'); ?>
					</p>

				<?php endif; ?>

				<?php do_action('woocommerce_register_form'); ?>

				<p class="woocommerce-form-row form-row">
					<?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
					<button type="submit"
						class="woocommerce-Button woocommerce-button button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?> woocommerce-form-register__submit"
						name="register"
						value="<?php esc_attr_e('Register', 'woocommerce'); ?>"><?php esc_html_e('Register', 'woocommerce'); ?></button>
				</p>

				<?php do_action('woocommerce_register_form_end'); ?>

			</form>

		</div>

	</div>
<?php endif; ?>

<?php do_action('woocommerce_after_customer_login_form'); ?>