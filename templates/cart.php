<?php
/*
 * Template Name: Cart
 */
?>

<section class="cart-section dpt-165 dpb-105 tpt-145 tpb-65">
  <div class="container">
    <div class="col-lg-11 px-lg-4 mx-auto">
      <div class="row px-lg-3">
        <h5 class="bodoni font30 leading45 text-black dmb-40 res-font24 res-leading30 tmb-30">
          Your Basket [2]
        </h5>
        <?php echo do_shortcode('[woocommerce_cart]'); ?>
      </div>
    </div>
  </div>
</section>