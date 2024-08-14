<?php
/*
 * Template Name: blog-open
 */

$date = the_date();
$date_m = date_create($date);
$date_value = date_format($date_m, "d/m/Y");
?>

<main>
    <!-- blog-open-section -->
    <section class="blog-open-section tpt-175 dpt-185">
        <div class="container px-p-0">
            <div class="row">
                <div class="col-12 col-lg-2 menu-links position-sticky p-initial d-flex flex-column justify-content-between px-p-p">
                    <a href="<?php echo get_home_url(); ?>/blogs" class="mont-medium font13 leading24 text-black tmb-60">Back to all</a>
                    <div class="d-none d-lg-block">
                        <div class="mont-normal font13 leading24 text-black dmb-15">
                            Share this post:
                        </div>
                        <?php echo do_shortcode('[ssba url=”http://simplesharebuttons.xn--com-9o0a title=”Simple Share Buttons”]'); ?>
                    </div>
                </div>
                <div class="col-12 col-lg-8 mx-xl-2 px-lg-1">
                    <div class="col-12 col-lg-9 px-lg-1 mx-auto text-start text-lg-center px-p-p">
                        <div class="mont-medium font13 leading24 text-918E8E tmb-30 dmb-40">
                           <?php echo $date_value; ?>
                        </div>
                        <div class="bodoni font45 leading55 res-font32 res-leading45 text-black tmb-20 dmb-45">
                            <?php the_title(); ?>
                        </div>
                        <div class="mont-normal font13 leading24 text-black tmb-40 dmb-60 pe-5 pe-lg-0">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <div class="blog-img w-100 radius5 position-relative overflow-hidden card-hover tmb-40 dmb-60 px-p-0">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""
                            class="w-100 h-100 object-cover img">
                    </div>
                    <div class="col-12 col-lg-9 px-lg-1 mx-auto px-p-p">
                    <?php if (have_rows('flexible_content')):
                    while (have_rows('flexible_content')): the_row();
                        if (get_row_layout() == 'content'): 
                        if(!empty(get_sub_field('heading'))): 
                        ?> 
                        <div class="bodoni font25 leading30 text-black dmb-15">
                        <?php echo get_sub_field('heading'); ?>
                        </div>
                        <?php endif;
                        if(!empty(get_sub_field('content'))): ?>
                        <div class="mont-normal font13 leading24 text-black tmb-55 dmb-70 pe-4 pe-lg-0">
                            <?php echo get_sub_field('content'); ?>
                        </div>
                        <?php endif;?>
                        <?php if(!empty(get_sub_field('button')['url'])): 
                        $target_1 = (get_sub_field('button')['target'] == '_blank') ? "_blank" : "";
                        ?>
                        <a href="<?php echo get_sub_field('button')['url']; ?>" target="<?php echo $target_1; ?>" class="mont-semibold font11 leading20 space0_28 text-black text-uppercase">BROWSE
                        <?php echo get_sub_field('button')['title']; ?></a>
                        <?php endif; ?>
                        <?php elseif (get_row_layout() == 'product_all'): 
                        $master = get_sub_field('product_value');
                        if(!empty($master)): 
                            foreach($master as $product_value):
                                $product = wc_get_product($product_value->ID);
                                if ($product_value) { // Ensure the product object is valid
                                    $price = $product->get_price();
                                    $price_html = $product->get_price_html();
                                    $type = $product->get_type();
                                    $min_price = get_minimum_variation_price($product_value->ID);
                                } else {
                                    // Handle the case where the product is not found or is invalid
                                    $price_html = 'N/A';
                                    $type = '';
                                }
                        ?>
                        <a href="<?php echo get_permalink($product_value->ID); ?>"
                            class="product-cards w-100 d-inline-block text-decoration-none tpb-55 dpb-50 tmb-55 dmb-40 border-bottom border-EBEBEB">
                            <div class="product-img position-relative radius10 overflow-hidden card-hover tmb-15 dmb-25">
                                <img src="<?php echo get_the_post_thumbnail_url($product_value->ID); ?>"
                                    class="w-100 h-100 object-cover img" alt="">
                            </div>
                            <div class="product-content">
                                <div class="mont-medium font16 leading20 res-font14 text-black dpb-10"><?php echo $product_value->post_title; ?>
                                </div>
                                <?php if($type == 'simple'): ?>
                                <div class="mont-medium font13 res-font11 leading20 text-7D7D7D"><?php echo $price_html; ?></div>
                                <?php else: ?>
                                <div class="mont-medium font13 res-font11 leading20 text-7D7D7D">From <?php echo get_woocommerce_currency_symbol(); echo $min_price; ?></div>
                                <?php endif; ?>
                            </div>
                        </a>
                        <?php 
                        endforeach;
                        endif; ?>
                        <?php endif;
                        endwhile;
                    endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="spacing tmb-70 dmb-85"></div>

    <div class="border-bottom border-EBEBEB"></div>

    <div class="spacing dmb-70"></div>

    <!-- blog-card-section -->
  

    <div class="spacing dmb-75"></div>
</main>