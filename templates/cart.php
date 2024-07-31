<?php
/*
 * Template Name: Cart
 */
?>

<section class="cart-section dpt-165 dpb-105">
  <div class="container">
    <div class="row">
      <div class="col-11 px-5 mx-auto">
        <h5 class="bodoni font30 leading45 text-black dmb-40">
          Your Basket [2]
        </h5>
        <?php echo do_shortcode('[woocommerce_cart]'); ?>
      </div>
    </div>
  </div>
</section>