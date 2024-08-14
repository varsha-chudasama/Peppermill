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
<section class="sign-up-section position-relative dmt-250 tmt-210">
  <div class="container h-100 px-p-0">
    <div class="col-lg-11 px-lg-4 mx-auto">
      <form class="woocommerce-form contact-info woocommerce-form-register register auth-register-form h-100 px-lg-3" action="" method="POST">
        <div class="row justify-content-between h-100">
          <div class="col-lg-5 col-12 pe-lg-2 me-auto px-p-p border-bottom border-EDEDED tpb-70 tmb-70">
            <h2 class="bodoni font40 leading48 text-black dpb-15 border-bottom border-EDEDED res-font30 res-leading35 dmb-45">
              <?php esc_html_e('Contact Information', 'woocommerce'); ?>
            </h2>
            <?php do_action('woocommerce_login_form_start'); ?>
            <div class="login-input-group dmb-35 tmb-30">
              <div class="d-flex flex-column dmb-25">
                <label class="mont-medium font13 leading20 text-black dmb-10" for="user_login"><?php esc_html_e('First Name*', 'woocommerce'); ?></label>
                <input type="text" class="input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4" name="register-firstname" placeholder="Please enter…" id="firstusername" autocomplete="firstusername" required value="<?php echo (!empty($_POST['firstusername'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
                <?php // @codingStandardsIgnoreLine ?>
              </div>
              <div class="d-flex flex-column dmb-25">
                <label class="mont-medium font13 leading20 text-black dmb-10" for="user_login"><?php esc_html_e('Last Name*', 'woocommerce'); ?></label>
                <input type="text" class="input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4" required name="register-last-name" placeholder="Please enter…" id="lastusername" autocomplete="lastusername" value="<?php echo (!empty($_POST['lastusername'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
                <?php // @codingStandardsIgnoreLine ?>
              </div>
            </div>
            <div class="mont-medium font13 leading16 text-black d-flex flex-wrap align-items-center">
              <div class="checkbox-group me-lg-5 tmt-25 order-lg-0 order-1 res-w-100 mb-2">
                <label class="square-checkbox position-relative d-inline-block mont-semibold font9 leading16 text-black"> 
                  <input type="checkbox" checked class="position-absolute opacity-0">
                  <span class="checkmark position-absolute top-0 left-center"></span>
                  TRADE
                </label>
                <label class="square-checkbox position-relative d-inline-block mont-semibold font9 leading16 text-black"> 
                  <input type="checkbox" class="position-absolute opacity-0">
                  <span class="checkmark position-absolute top-0 left-center"></span>
                  HOME
                </label>
                <label class="square-checkbox position-relative d-inline-block mont-semibold font9 leading16 text-black"> 
                  <input type="checkbox" class="position-absolute opacity-0">
                  <span class="checkmark position-absolute top-0 left-center"></span>
                  BOTH
                </label>
              </div>
              Please tick to subscribe to our newsletter
            </div>
          </div>
          <div class="col-lg-5 col-12 ps-lg-2 ms-auto px-p-p">
            <h2 class="bodoni font40 leading48 text-black dpb-15 border-bottom border-EDEDED res-font30 res-leading35 dmb-25">
              <?php esc_html_e('Sign-in Information', 'woocommerce'); ?>
            </h2>
            <div class="login-input-group dmb-10 tmb-20">
              <div class="d-flex flex-column dmb-25">
                <label class="mont-medium font13 leading20 text-black dmb-10" for="user_login"><?php esc_html_e('Email Address*', 'woocommerce'); ?></label>
                <input type="mail" class="input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4" required name="register-email" placeholder="Please enter…" id="emailAddress" autocomplete="emailAddress" value="<?php echo (!empty($_POST['emailAddress'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
              </div>
              <div class="d-flex flex-column dmb-25">
                <label class="mont-medium font13 leading20 text-black dmb-10" for="user_login"><?php esc_html_e('Password*', 'woocommerce'); ?></label>
                <input type="password" class="input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4" required name="register-password" placeholder="Please enter…" id="register-password" autocomplete="password" value="<?php echo (!empty($_POST['password'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
              </div>
              <div class="d-flex flex-column dmb-25">
                <div class="d-flex align-items-center justify-content-between dmb-10">
                  <label class="mont-medium font13 leading20 text-black" for="user_login"><?php esc_html_e('Confirm Password*', 'woocommerce'); ?></label>
                  <div class="password-strength-group" data-strength="">
                    <div class="password-strength-message mont-semibold font9 leading11 space0_23 text-uppercase">
                      <div class="message-item d-none weak-password">
                        Password Strength: <span style="color:red;">Weak</span>
                      </div>
                      <div class="message-item d-none okay-password">
                        Password Strength: <span style="color:#d7cc00;">Okay</span>
                      </div>
                      <div class="message-item d-none strong-password">
                        Password Strength: <span style="color:#03a900;">Strong</span>
                      </div>
                      <div class="message-item d-none very-strong-password">
                        Password Strength: <span style="color:#03a900;">Very Strong!</span>
                      </div>
                    </div>
                  </div>
                </div>
                <input type="cpassword" required class="input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4" name="register-confirmpassword" placeholder="Please enter…" id="register-confirmpassword" autocomplete="cpassword" value="<?php echo (!empty($_POST['cpassword'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
              </div>
            </div>
            <div class="mont-medium font9 leading11 text-7D7D7D dmb-15">Please include at least one of the following:</div>
            <div class="d-lg-flex flex-wrap align-items-center dmb-30 tmb-35">
              <label class="d-flex align-items-center main-label p-0 me-lg-4 mb-2" id="capital">
                <span class="position-relative top-0 start-0 rounded-circle login-checkmark rounded-circle me-2"></span>
                <span class="mont-semibold font11 leading-11 text-black text-capitalize">
                  Uppercase character
                </span>
                <input type="checkbox" class="position-absolute opacity-0 login-check-input me-3">
              </label>
              <label class="d-flex align-items-center main-label p-0 me-lg-4 mb-2" id="number">
                <span class="position-relative top-0 start-0 rounded-circle login-checkmark rounded-circle me-2"></span>
                <span class="mont-semibold font11 leading-11 text-black text-capitalize">
                  Special character
                </span>
                <input type="checkbox" class="position-absolute opacity-0 login-check-input me-3">
              </label>
              <label class="d-flex align-items-center main-label p-0 me-lg-4 mb-2" id="length">
                <span class="position-relative top-0 start-0 rounded-circle login-checkmark rounded-circle me-2"></span>
                <span class="mont-semibold font11 leading-11 text-black text-capitalize">
                  8 character (min)
                </span>
                <input type="checkbox" class="position-absolute opacity-0 login-check-input me-3">
              </label>
            </div>
            <div class="form-row d-flex flex-wrap flex-lg-row flex-column align-items-lg-center">
              <button type="submit" onclick="wrong_pass_alert()" class="woocommerce-button btn submit-btn btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex w-fit align-items-center justify-content-center chainprinter me-lg-5 mb-2 tmb-25 woocommerce-form-login__submit<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="login" value="<?php esc_attr_e('sign me in', 'woocommerce'); ?>">
                <?php esc_html_e('CREATE MY ACCOUNT', 'woocommerce'); ?>
              </button>
              <p class="woocommerce-LostPassword lost_password d-flex align-items-center">
                <a href="<?php echo get_home_url(); ?>/my-account" class="mont-semibold font13 leading16 text-black">
                  <?php esc_html_e('I already have an account', 'woocommerce'); ?>
                </a>
              </p>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="text-center dmt-50">
      <?= $login_success; ?>
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