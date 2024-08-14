<?php
/*
 * Template Name: Sign Up
 */
if (is_user_logged_in()) {
  wp_safe_redirect('/account/');
  exit;
}
$has_error = 0;
$login_success = '';
$fname = '';
$lname = '';
$email = '';
$password = '';

if (isset($_POST['register-firstname']) && !empty($_POST['register-firstname'])) {

  $fname = $_POST['register-firstname'];
  $lname = $_POST['register-last-name'];
  $email = $_POST['register-email'];
  $password = $_POST['register-password'];
  $cnf_pwd = $_POST['register-confirmpassword'];


  if (false == email_exists($email) && $password == $cnf_pwd) {

    $user_name = trim(strtolower($fname)) . trim(strtolower($lname));
    $user_id = wp_create_user($user_name, $password, $user_email);
    $login_success = '<p class="green-successtext-313825 ">Register Successfully. Login <a href="/my-account">here.</a></p>';

    if (is_wp_error($user_id)) {
      $login_success = '<p class="red-fail">' . $user_id->get_error_message() . '</p>';
      $has_error = 1;
    }

    if ($user_id) {
      $user_data = wp_update_user(array('ID' => $user_id, 'user_email' => $email, 'first_name' => $fname, 'last_name' => $lname, 'phone' => $phone_num, 'email_verify' => 0));
    }
  } else {

    $has_error = 1;
    $login_success = '<p class="red-fail">Email Already Exist.</p>';
    $login_success = ($password != $cnf_pwd) ? '<p class=" ">Mismatch Password and Confirm Password.</p>' : $login_success;
  }
}
?>

<!-- <div class="dmt-105 tmt-75"></div> -->
<section class="sign-up-section position-relative">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <form class="woocommerce-form contact-info woocommerce-form-register register auth-register-form h-100" action="" method="POST">
        <div class="row h-100 dmt-250">
          <div class="col-5 ms-5 ps-5 pe-3">
            <div class="pe-4">

                <h2 class="bodoni font40 leading48 text-black dmb-5">
                  <?php esc_html_e('Contact Information', 'woocommerce'); ?>
                </h2>
                <div class="border-bottom border-EDEDED"></div>
                <div class="dmt-30">
                  <?php do_action('woocommerce_login_form_start'); ?>
                  <div class="d-flex flex-column dmb-25">
                    <label class="mont-medium font13 leading20 text-black dmb-10" for="user_login"><?php esc_html_e('First Name*', 'woocommerce'); ?></label>
                    <input type="text" class="input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4" name="register-firstname" placeholder="First Name*" id="firstusername" autocomplete="firstusername" required value="<?php echo (!empty($_POST['firstusername'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
                    <?php // @codingStandardsIgnoreLine
                    ?>
                  </div>
                  <div class="d-flex flex-column dmb-25">
                  <label class="mont-medium font13 leading20 text-black dmb-10" for="user_login"><?php esc_html_e('Last Name*', 'woocommerce'); ?></label>

                  <input type="text" class="input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4" required name="register-last-name" placeholder="Last Name*" id="lastusername" autocomplete="lastusername" value="<?php echo (!empty($_POST['lastusername'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
                  <?php // @codingStandardsIgnoreLine
                  ?>
                </div>
                <div class="dmt-30">
                  <label class="square-checkbox position-relative d-inline-block crimson fw-normal text-2D392A font-16px resfont-14px"> Please tick to subscribe to our newsletter
                    <input type="checkbox" class="position-absolute opacity-0">
                    <span class="checkmark position-absolute top-center start-0"></span>
                  </label>
                </div>

            </div></div>
            </div>
            <div class="col-5 ms-5 ps-5 pe-3">
              <div class="pe-4">
                <h2 class="bodoni font40 leading48 text-black dmb-5">
                  <?php esc_html_e('Sign-in Information', 'woocommerce'); ?>
                </h2>
                <div class="border-bottom border-EDEDED"></div>
                <div class="d-flex flex-column dmb-25">
                  <label class="mont-medium font13 leading20 text-black dmb-10" for="user_login"><?php esc_html_e('Email Address*', 'woocommerce'); ?></label>
                  <input type="mail" class="input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4" required name="register-email" placeholder="Email Address*" id="emailAddress" autocomplete="emailAddress" value="<?php echo (!empty($_POST['emailAddress'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
                  </div>
                  <div class="d-flex flex-column dmb-25">
                  <label class="mont-medium font13 leading20 text-black dmb-10" for="user_login"><?php esc_html_e('Password*', 'woocommerce'); ?></label>
                  <input type="password" class="input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4" required name="register-password" placeholder="Password*" id="register-password" autocomplete="password" value="<?php echo (!empty($_POST['password'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
                  </div>
                  <div class="d-flex flex-column dmb-25">
                <div class="d-flex align-items-center justify-content-between mb-2 pb-1">
                  <label class="mont-medium font13 leading20 text-black dmb-10" for="user_login"><?php esc_html_e('Confirm Password*', 'woocommerce'); ?></label>
                  <div class="password-strength-group" data-strength="">
                    <div class="password-strength-message">
                      <div class="message-item d-none weak-password font-8px avenir-heavy text-uppercase text-707070 spacing-8px">
                        Password Strength: <span style="color:#FF0000;">Weak</span>
                      </div>

                      <div class="message-item d-none okay-password font-8px avenir-heavy text-uppercase text-707070 spacing-8px">
                        Password Strength: <span style="color:#FF0000;">Okay</span>
                      </div>

                      <div class="message-item d-none strong-password font-8px avenir-heavy text-uppercase text-707070 spacing-8px">
                        Password Strength: <span style="color:#FF0000;">Strong</span>
                      </div>

                      <div class="message-item d-none very-strong-password font-8px avenir-heavy text-uppercase text-707070 spacing-8px">
                        Password Strength: <span style="color:#FF0000;">Very Strong!</span>

                      </div>
                    </div>

                  </div>
                </div>
                <input type="cpassword" required class="input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4" name="register-confirmpassword" placeholder="Confirm Password*" id="register-confirmpassword" autocomplete="cpassword" value="<?php echo (!empty($_POST['cpassword'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
                </div>

                <div class="dmt-15 d-lg-flex overflow-y-auto align-items-center">
                  <label class="d-flex align-items-center font-8px avenir-heavy text-uppercase text-707070 spacing-8px me-lg-4" id="capital">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/03/assets.svg" class="pe-2 blank-check" alt="" />
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/03/fill-round-svg.svg" class="pe-2 d-none fill-check" alt="" />
                    <span class="">
                      ONE UPPERCASE CHARACTER
                    </span>
                    <input type="checkbox" class="position-absolute opacity-0">
                    <span class="checkmark position-absolute top-0 start-0 bg-transparent rounded-circle"></span>
                  </label>
                  <label class="d-flex align-items-center font-8px avenir-heavy text-uppercase text-707070 spacing-8px me-lg-4 tmt-15" id="number">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/03/assets.svg" class="pe-2 blank-check" alt="" />
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/03/fill-round-svg.svg" class="pe-2 d-none fill-check" alt="" />
                    <span class="">
                      ONE NUMBER
                    </span>
                    <input type="checkbox" class="position-absolute opacity-0">
                    <span class="checkmark position-absolute top-0 start-0 bg-transparent rounded-circle"></span>
                  </label>
                  <label class="d-flex align-items-center font-8px avenir-heavy text-uppercase text-707070 spacing-8px me-lg-4 tmt-15" id="length">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/03/assets.svg" class="pe-2 blank-check" alt="" />
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/03/fill-round-svg.svg" class="pe-2 d-none fill-check" alt="" />
                    <span class="">
                      8 CHARACTER (MIN)
                    </span>
                    <input type="checkbox" class="position-absolute opacity-0">
                    <span class="checkmark position-absolute top-0 start-0 bg-transparent rounded-circle"></span>
                  </label>
                </div>

                <div class="d-lg-flex align-items-center dmt-35">
                  <div class="form-row d-flex flex-lg-row flex-column align-items-lg-center">
                    <button type="submit" onclick="wrong_pass_alert()" class="woocommerce-button resfont-11px btn me-lg-5 bg-2D392A submit-btn btnA text-nowrap btnL text-white chainprinter fw-normal text-uppercase font-13px spacing-13px woocommerce-form-login__submit<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="login" value="<?php esc_attr_e('sign me in', 'woocommerce'); ?>">
                      <?php esc_html_e('CREATE MY ACCOUNT', 'woocommerce'); ?>
                    </button>
                    <p class="woocommerce-LostPassword lost_password tpt-25 tpb-40">

                      <a href="<?php echo get_home_url(); ?>/my-account" class="text-313825 text-uppercase font-9px spacing-135px avenir-heavy">
                        <?php esc_html_e('I ALREADY HAVE AN ACCOUNT', 'woocommerce'); ?>
                      </a>

                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </form>
      <div class="text-center dmt-50">
        <?= $login_success; ?>
      </div>
    </div>

  </div>
</section>

<script>
  var myInput = document.getElementById("register-password");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");
  var passwordsmain = jQuery('#register-password').val().trim();


  // When the user starts to type something inside the password field
  myInput.onkeyup = function() {
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (myInput.value.match(upperCaseLetters)) {
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (myInput.value.match(numbers)) {
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }

    // Validate length
    if (myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }

    jQuery
  }

  function validate_password() {
    var pass = document.getElementById('register-password').value;
    var confirm_pass = document.getElementById('register-confirmpassword').value;
    if (pass != confirm_pass) {
      document.getElementById('wrong_pass_alert').classList.remove("invalid");
      document.getElementById('create').disabled = true;
      document.getElementById('create').style.opacity = (0.4);
    } else {
      document.getElementById('wrong_pass_alert').classList.add("valid");
      document.getElementById('create').disabled = false;
      document.getElementById('create').style.opacity = (1);
    }
  }

  function wrong_pass_alert() {
    if (document.getElementById('pass').value != "" &&
      document.getElementById('confirm_pass').value != "") {
      alert("Your response is submitted");
    } else {
      alert("Please fill all the fields");
    }
  }

  function passwordCheck(password) {
    var strength = 0;

    if (password.length >= 8) {
      strength += 1;

    }

    if (password.match(/(?=.*[0-9])/)) {
      strength += 1;
    }

    if (password.match(/(?=.*[!,%,&,@,#,$,^,*,?,_,~,<,>,])/)) {
      strength += 1;
    }

    if (password.match(/(?=.*[a-z])/)) {
      strength += 1;
    }

    displayBar(strength);
  }

  function displayBar(strength) {
    jQuery(".password-strength-group").attr('data-strength', strength);

    if (strength === 1) {
      jQuery(".weak-password").removeClass('d-none');
      jQuery(".okay-password, .strong-password, .very-strong-password").addClass('d-none');
    } else if (strength === 2) {
      jQuery(".okay-password").removeClass('d-none');
      jQuery(".weak-password, .strong-password, .very-strong-password").addClass('d-none');
    } else if (strength === 3) {
      jQuery(".strong-password").removeClass('d-none');
      jQuery(".weak-password, .okay-password, .very-strong-password").addClass('d-none');
    } else if (strength === 4) {
      jQuery(".very-strong-password").removeClass('d-none');
      jQuery(".weak-password, .okay-password, .strong-password").addClass('d-none');
    } else {
      jQuery(".weak-password, .okay-password, .strong-password, .very-strong-password").addClass('d-none');
    }
  }


  jQuery("#register-password").keyup(function() {
    var password = jQuery(this).val();
    passwordCheck(password);
  });
</script>