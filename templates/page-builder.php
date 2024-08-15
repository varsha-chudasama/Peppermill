<?php
/*
 * Template Name: Page Builder
 */
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
?>
<?php if (have_rows('flexible_content')):
        while (have_rows('flexible_content')): the_row();
            if (get_row_layout() == 'hero_section'): 
        $hero_section_background_image = get_sub_field('background_image');    
        $hero_section_prefix = get_sub_field('prefix');    
        $hero_section_heading = get_sub_field('heading');    
        $hero_section_sub_content = get_sub_field('sub_content');    
        $hero_section_button = get_sub_field('button');    
        ?>
    <!-- hero-section -->
    <section class="hero-section position-relative w-100">
            <img src="<?php echo wp_get_attachment_image_url( $hero_section_background_image, 'large' ); ?>"
                class="w-100 h-100 object-cover" alt="">
            <div class="layer position-absolute top-0 start-0 bg-black opacity29 h-100 w-100"></div>
        <div class="position-absolute top-center start-0 w-100 text-center hero-content">
            <div class="container w-100">
                <div class="col-lg-8 col-12 mx-auto">
                    <?php if(!empty($hero_section_prefix)): ?>
                    <div class="mont-semibold font11 leading20 space1_65 text-uppercase text-white dmb-30 tmb-15"><?php echo $hero_section_prefix;?></div>
                    <?php endif; ?>
                    <?php if(!empty($hero_section_heading)): ?>
                    <div class="bodoni font75 res-font55 leading90 res-leading60 text-white dmb-35 tmb-15"><?php echo $hero_section_heading; ?></div>
                    <?php endif; ?>
                    <?php if(!empty($hero_section_sub_content)): ?>
                    <div class="mont-medium font14 res-font13 leading20 text-white dmb-25"><?php echo $hero_section_sub_content; ?></div>
                    <?php endif; ?>
                    <?php if(!empty($hero_section_button['url'])): 
                     $target_1 = ($hero_section_button['target'] == '_blank') ? "_blank" : "";
                    ?>
                    <a href="<?php echo $hero_section_button['url']; ?>" target="<?php echo $target_1; ?>"
                        class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 d-inline-flex align-items-center justify-content-center transition">
                        <?php echo $hero_section_button['title']; ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php elseif (get_row_layout() == 'spacing'):
                $desktop = get_sub_field('desktop');
                $tablet = get_sub_field('tablet');
                $mobile = get_sub_field('mobile');

                $desktop_mb = $desktop['margin_bottom'];
                $desktop_mb_main = (!empty($desktop['margin_bottom'])) ? " dpb-" : "";
                $tablet_mb = $tablet['margin_bottom'];
                $tablet_mb_main = (!empty($tablet['margin_bottom'])) ? " tpb-" : "";
                $mobile_mb = $mobile['margin_bottom'];
                $mobile_mb_main = (!empty($mobile['margin_bottom'])) ? " mpb-" : "";
                ?>
                <div class="spacing <?php echo $desktop_mb_main;
                echo $desktop_mb;
                echo $tablet_mb_main;
                echo $tablet_mb;
                echo $mobile_mb_main;
                echo $mobile_mb; ?>"></div>
    <?php elseif (get_row_layout() == 'middle_content'): 
    $middle_content_prefix = get_sub_field('prefix');    
    $middle_content_heading = get_sub_field('heading');    
    $middle_content_content = get_sub_field('content');
    $middle_content_button = get_sub_field('button');
    $middle_content_background_color = get_sub_field('background_color');
    if($middle_content_background_color == 'white'): 
        $color_b = 'ffffff';
    else: 
        $color_b = '292929';
    endif; 
    ?>
     <!-- center-content-section -->
     <section class="center-content-section content-color-<?php echo $color_b; ?>">
        <div class="container">
            <div class="col-12 col-md-8 col-lg-7 px-lg-4 px-xl-5 mx-auto text-center">
            <?php if(!empty($middle_content_prefix)): ?>
            <div class="content-prefix bodoni font11 leading16 space0_28 dmb-25"><?php echo $middle_content_prefix; ?></div>
            <?php endif; ?>
            <?php if(!empty($middle_content_heading)): ?>
                <div class="content-title bodoni font40 leading48 res-font30 res-leading35 tmb-15 dmb-25"><?php echo  $middle_content_heading; ?></div>
            <?php endif; ?>
            <?php if(!empty($middle_content_content)): ?>
                <div class="content-desc mont-normal font13 leading24"><?php echo  $middle_content_content; ?></div>
            <?php endif; ?>
            <?php if(!empty($middle_content_button['url'])): 
                $target_10 = ($middle_content_button['target'] == '_blank') ? "_blank" : "";
            ?>
            <div class="dmb-40"></div>
            <a href="<?php echo $middle_content_button['url']; ?>" target="<?php echo $target_10; ?>" class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
            <?php echo $middle_content_button['title']; ?></a>
            <?php endif; ?>
            </div>
        </div>
    </section>
    <?php elseif (get_row_layout() == 'category'): 
    $category_item = get_sub_field('items');    
    if(!empty($category_item)):
    ?>
    <!-- three-card-section -->
    <section class="three-card-section">
        <div class="container">
            <div class="row row10">
                <?php foreach($category_item as $category_item_custom): 
                 $thumbnail_id = get_woocommerce_term_meta($category_item_custom, 'thumbnail_id', true);
                 $image = wp_get_attachment_url($thumbnail_id, 'large');    
                ?>
                <div class="col-lg-4 col-12 cards-col dmt-20">
                    <a href="<?php echo get_term_link($category_item_custom); ?>"
                        class="the-ultimate-card d-inline-block text-decoration-none card-hover radius10 overflow-hidden position-relative w-100">
                        <img src="<?php echo $image; ?>"
                            class="w-100 h-100 object-cover img" alt="">
                        <div class="layer position-absolute top-0 start-0 h-100 w-100 opacity23 bg-black"></div>
                        <div class="position-absolute top-center text-center w-100 px-5">
                            <div class="bodoni font35 res-font28 leading35 res-leading30 text-capitalize text-white dmb-30 tmb-10"><?php echo get_term($category_item_custom)->name ?></div>
                            <button
                                class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 d-inline-flex align-items-center justify-content-center transition">
                                SHOP NOW
                            </button>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php elseif (get_row_layout() == 'product_section'): 
        $product_section_heading = get_sub_field('heading');
        $product_section_items = get_sub_field('items');
        if(!empty($product_section_items)):
    ?>

    <!-- product-section -->
    <section class="product-section overflow-hidden">
        <div class="container">
            <div class="row align-items-center dmb-60 tmb-45">
                <div class="col-lg-3"></div>
                <?php if(!empty($product_section_heading)): ?>
                <div class="col-lg-6 col-9">
                    <div class="bodoni font40 res-font30 leading48 res-leading35 text-black text-center"><?php echo $product_section_heading; ?></div>
                </div>
                <?php endif; ?>
                <div class="col-3 d-inline-flex align-items-center justify-content-end">
                    <div class="slick-arrows d-flex">
                        <button class="prev-arrow ms-1 bg-transparent z-3 transition rounded-pill"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/left-slide-arrow.svg"
                                class="h-100" alt=""></button>
                        <button class="next-arrow ms-1 bg-transparent z-3 transition rounded-pill"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/right-slide-arrow.svg"
                                class="h-100" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="product-slider col-9 col-lg-12">
                <?php 
                foreach($product_section_items as $product_list_product_custom): 
                $id = $product_list_product_custom->ID;
                $title = $product_list_product_custom->post_title;
                $content = $product_list_product_custom->post_excerpt;
                $product = wc_get_product($id);
                $date = $product_list_product_custom->post_date;
                $date_m = date_create($date);
                $date_value = date_format($date_m, "d.m.Y");
                $newDate = date("d.m.Y", strtotime($date_value . "+7 day"));
                $date_today = date("d.m.Y");
                if ($product) { // Ensure the product object is valid
                    $attachment_ids = $product->get_gallery_image_ids();
                    $price = $product->get_price();
                    $price_html = $product->get_price_html();
                    $type = $product->get_type();
                    $min_price = get_minimum_variation_price( $id );
                } else {
                    // Handle the case where the product is not found or is invalid
                    $price_html = 'N/A';
                    $type = '';
                }

                ?>
                <div class="product-cards d-inline-block text-decoration-none">
                    <div class="product-img position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-20">
                    <a href="<?php echo get_permalink($pro_id); ?>" class="text-decoration-none"><img src="<?php echo get_the_post_thumbnail_url($id); ?>"
                            class="w-100 h-100 object-cover img" alt=""></a>
                        <?php if ($newDate >= $date_today) : ?>
                        <div
                            class="mont-medium font13 res-font11 leading20 res-leading16 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 mt-3 ms-4">
                           New In</div>
                        <?php endif; ?>
                        <?php if (is_user_logged_in()) : ?>
                        <div class="like-img position-absolute bottom-0 end-0 me-3 mb-3 z-3">
                        <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="product-content">
                    <a href="<?php echo get_permalink($pro_id); ?>" class="text-decoration-none">
                    <div class="mont-medium font16 res-font14 leading20 text-black dpb-10"><?= $product->get_name(); ?></div></a>
                        <?php if($type == 'simple'): ?>
                        <div class="mont-medium font13 res-font11 leading20 text-7D7D7D"><?php echo $price_html; ?></div>
                        <?php else: ?>
                        <div class="mont-medium font13 res-font11 leading20 text-7D7D7D">From <?php echo get_woocommerce_currency_symbol(); echo $min_price; ?></div>
                        <?php endif; ?>
                    </div>
                    
                    </div>
                
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php elseif (get_row_layout() == 'with_background_category_section'): 
     $with_background_category_section_heading = get_sub_field('heading');    
     $with_background_category_section_item = get_sub_field('items');   
     if(!empty($with_background_category_section_item)):    
    ?>
    <!-- room-card-section -->
    <section class="room-card-section bg-292929 dpt-80 tpt-50 dpb-70 tpb-60 overflow-hidden">
        <div class="container">
            <div class="row align-items-center dmb-60 tmb-35">
                <div class="col-lg-3"></div>
                <?php if(!empty($with_background_category_section_heading)): ?>
                <div class="col-lg-6 col-9">
                    <div class="bodoni font45 res-font32 leading55 res-leading45 text-capitalize text-white text-center"><?php echo $with_background_category_section_heading; ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-3 d-inline-flex align-items-center justify-content-end">
                    <div class="slick-arrows d-flex">
                        <button class="prev-arrow ms-1 bg-transparent z-3 transition rounded-pill"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/left-slide-arrow.svg"
                                class="h-100" alt=""></button>
                        <button class="next-arrow ms-1 bg-transparent z-3 transition rounded-pill"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/right-slide-arrow.svg"
                                class="h-100" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="room-card-slider col-10 col-lg-12">
                <?php foreach($with_background_category_section_item as $category_item_custom): 
                 $thumbnail_id = get_woocommerce_term_meta($category_item_custom, 'thumbnail_id', true);
                 $image = wp_get_attachment_url($thumbnail_id, 'large');    
                ?>
                <a href="<?php echo get_term_link($category_item_custom); ?>"
                    class="room-cards d-inline-block text-decoration-none card-hover overflow-hidden radius10 res-radius5 position-relative">
                    <img src="<?php echo $image; ?>"
                        class="h-100 w-100 object-cover img" alt="">
                    <div class="position-absolute top-0 start-0 h-100 w-100 bg-black opacity23"></div>
                    <div class="position-absolute w-100 bottom-0 px-lg-5 px-4">
                        <div class="bodoni font40 res-font30 leading48 res-leading35 text-white dpb-20 tpb-10"><?php echo get_term($category_item_custom)->name ?></div>
                        <div
                            class="mont-medium font13 res-font11 leading20 text-white text-capitalize text-decoration-underline dpb-55 tpb-40">
                            Shop Collection</div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php elseif (get_row_layout() == 'banner_section'): 
    $banner_section_heading = get_sub_field('heading');
    $banner_section_sub_content = get_sub_field('sub_content');
    $banner_section_button = get_sub_field('button');
    $banner_section_background_image = get_sub_field('background_image'); ?>

    <!-- banner-section -->
    <section class="banner-section position-relative">
        <img src="<?php echo wp_get_attachment_image_url( $banner_section_background_image, 'large' ); ?>" alt=""
            class="h-100 w-100 object-cover">
        <div class="bg-gradient-layer position-absolute w-100 h-100 top-0 opacity29"></div>
        <div class="position-absolute top-center start-0 w-100">
            <div class="container w-100">
                <div class="col-lg-8 col-12 ms-lg-5 ps-lg-5">
                    <?php if(!empty($banner_section_heading)): ?>
                    <div class="bodoni font60 res-font40 leading70 res-leading48 text-capitalize text-white dmb-10"><?php echo $banner_section_heading; ?></div>
                    <?php endif; ?>
                    <?php if(!empty($banner_section_sub_content)): ?>
                    <div class="mont-medium font14 leading20 text-white dmb-35 tmb-20"><?php echo $banner_section_sub_content; ?></div>
                    <?php endif; ?>
                    <?php if(!empty($banner_section_button['url'])): 
                        $target_2 = ($banner_section_button['target'] == '_blank') ? "_blank" : "";
                    ?>
                    <a href="<?php echo $banner_section_button['url']; ?>" target="<?php echo $target_2; ?>"
                        class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 d-inline-flex align-items-center justify-content-center transition">
                        <?php echo $banner_section_button['title']; ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php elseif (get_row_layout() == 'left_&_right_image_with_background_color_section'): 
    $left_right_prefix = get_sub_field('prefix');   
    $left_right_heading = get_sub_field('heading');   
    $left_right_content = get_sub_field('content');   
    $left_right_button = get_sub_field('button');   
    $left_right_background_color = get_sub_field('background_color');   
    $left_right_image = get_sub_field('image');   
    $left_right_left_right_image = get_sub_field('left_right_image');   

    if($left_right_background_color == 'white'): 
        $color_b = 'ffffff';
    elseif($left_right_background_color == 'black'): 
        $color_b = '292929';
    elseif($left_right_background_color == 'grey'):
        $color_b = 'EBEBEB';
    endif; 
    if($left_right_left_right_image == 'left'): ?>
    <section class="right-img-section left-right-<?php echo $color_b; ?>">
        <div class="container px-p-0">
            <div class="row align-items-center">
            <?php if(!empty($left_right_image)): ?>
                <div class="col-lg-6 ps-lg-3 tmt-45">
                    <div class="left-right-img radius10 overflow-hidden card-hover res-radius-0">
                        <img src="<?php echo wp_get_attachment_image_url( $left_right_image, 'large' ); ?>" alt=""
                            class="w-100 h-100 object-cover img">
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-lg-6 px-p-p">
                    <div class="col-lg-9 col-12 px-lg-4 mx-auto">
                        <?php if(!empty($left_right_prefix)): ?>
                        <div class="left-right-prefix mont-normal font11 leading20 space1_65 text-uppercase dmb-35 tmb-15">
                            <?php echo $left_right_prefix; ?>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($left_right_heading)): ?>
                        <div class="left-right-title bodoni font55 res-font40 leading65 res-leading45 dmb-35 tmb-20">
                            <?php echo $left_right_heading; ?>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($left_right_content)): ?>
                        <div class="dmb-40">
                            <div class="left-right-desc mont-normal font13 leading24 dmb-20">
                                <?php echo $left_right_content; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($left_right_button['url'])): 
                        $target_3 = ($left_right_button['target'] == '_blank') ? "_blank" : "";    
                        ?>
                        <a href="<?php echo $left_right_button['url']; ?>" target="<?php echo $target_3; ?>"
                            class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                            <?php echo $left_right_button['title']; ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <?php 
    else:
    ?>

    <!-- right-img-section -->
    <section class="right-img-section left-right-<?php echo $color_b; ?>">
        <div class="container px-p-0">
            <div class="row align-items-center">
                <div class="col-lg-6 px-p-p">
                    <div class="col-lg-9 col-12 px-lg-4 mx-auto">
                        <?php if(!empty($left_right_prefix)): ?>
                        <div class="left-right-prefix mont-normal font11 leading20 space1_65 text-uppercase dmb-35 tmb-15">
                            <?php echo $left_right_prefix; ?>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($left_right_heading)): ?>
                        <div class="left-right-title bodoni font55 res-font40 leading65 res-leading45 dmb-35 tmb-20">
                            <?php echo $left_right_heading; ?>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($left_right_content)): ?>
                        <div class="dmb-40">
                            <div class="left-right-desc mont-normal font13 leading24 dmb-20">
                                <?php echo $left_right_content; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($left_right_button['url'])): 
                        $target_3 = ($left_right_button['target'] == '_blank') ? "_blank" : "";    
                        ?>
                        <a href="<?php echo $left_right_button['url']; ?>" target="<?php echo $target_3; ?>"
                            class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                            <?php echo $left_right_button['title']; ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if(!empty($left_right_image)): ?>
                <div class="col-lg-6 ps-lg-3 tmt-45">
                    <div class="left-right-img radius10 overflow-hidden card-hover res-radius-0">
                        <img src="<?php echo wp_get_attachment_image_url( $left_right_image, 'large' ); ?>" alt=""
                            class="w-100 h-100 object-cover img">
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php elseif (get_row_layout() == 'our_projects_section'): 
    $our_projects_section_heading = get_sub_field('heading');   
    $our_projects_section_items = get_sub_field('items');   
    $our_projects_section_button_1 = get_sub_field('button_1');   
    $our_projects_section_button_2 = get_sub_field('button_2');  
    if(!empty($our_projects_section_items)): 
    ?>
    <!-- project-card-section -->
    <section class="project-card-section">
        <div class="container px-p-0">
            <div class="row dmb-55 tmb-40 px-p-p">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-12 text-center">
                    <?php if(!empty($our_projects_section_heading)): ?>
                    <div class="bodoni font50 res-font40 leading55 res-leading48 text-black text-capitalize dmb-10"><?php echo $our_projects_section_heading; ?></div>
                    <?php endif; ?>
                    <?php if(!empty($our_projects_section_button_1['url'])): 
                        $target_4 = ($our_projects_section_button_1['target'] == '_blank') ? "_blank" : "";        
                    ?>
                    <a href="<?php echo $our_projects_section_button_1['url']; ?>" target="<?php echo $target_4; ?>" class="montserrat-medium font13 leading20 text-black"><?php echo $our_projects_section_button_1['title']; ?></a>
                    <?php endif; ?>
                </div>
                <?php  if(!empty($our_projects_section_button_2['url'])): 
                    $target_5 = ($our_projects_section_button_2['target'] == '_blank') ? "_blank" : "";   ?>     
                <div class="col-lg-3">
                    <div class="d-lg-flex d-none justify-content-end align-items-center h-100">
                        <a href="<?php echo $our_projects_section_button_2['url']; ?>" target="<?php echo $target_5; ?>"
                            class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                            <?php echo $our_projects_section_button_2['title']; ?>
                        </a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="row row10 mx-m-0">
                <?php foreach($our_projects_section_items as $our_projects_section_items_custom): ?>
                <div class="col-lg-4 col-12 cards-col dmt-50 px-p-0">
                    <a href="<?php echo get_permalink($our_projects_section_items_custom->ID); ?>"
                        class="project-cards text-decoration-none d-inline-block position-relative card-hover radius10 res-radius-0 overflow-hidden w-100">
                        <img src="<?php echo get_the_post_thumbnail_url($our_projects_section_items_custom->ID, 'large'); ?>"
                            class="w-100 h-100 object-cover img" alt="">
                        <div class="position-absolute bottom-0 text-center w-100 px-lg-5 px-2">
                            <div class="bodoni font40 res-font30 leading48 res-leading35 space1_65 text-white dpb-20"><?php echo $our_projects_section_items_custom->post_title; ?></div>
                            <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50"><?php echo get_field('prefix',$our_projects_section_items_custom->ID); ?></div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <?php  if(!empty($our_projects_section_button_2['url'])): 
                    $target_6 = ($our_projects_section_button_2['target'] == '_blank') ? "_blank" : "";   ?>     
            <div class="d-flex justify-content-center align-items-center h-100 d-lg-none tmt-45">
                        <a href="<?php echo $our_projects_section_button_2['url']; ?>" target="<?php echo $target_6; ?>"
                            class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                            <?php echo $our_projects_section_button_2['title']; ?>
                        </a>
                    </div>
                    <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>
    <?php elseif (get_row_layout() == 'latest_news_section'): 
    $latest_news_section_heading = get_sub_field('heading');   
    $latest_news_section_items = get_sub_field('items');   
    $latest_news_section_button = get_sub_field('button');   
    if(!empty($latest_news_section_items)):     
    ?>
    <!-- blog-card-section -->
    <section class="blog-card-section overflow-hidden">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center dmb-25 tmb-30">
                <?php if(!empty($latest_news_section_heading)): ?>
                <div class="bodoni font40 res-font30 leading48 res-leading35 text-black text-capitalize"><?php echo $latest_news_section_heading; ?></div>
                <?php endif; ?>
                <?php if(!empty($latest_news_section_button['url'])): 
                 $target_7 = ($latest_news_section_button['target'] == '_blank') ? "_blank" : "";   
                ?>
                <a href="<?php echo $latest_news_section_button['url']; ?>" target="<?php echo $target_7; ?>"
                    class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-lg-inline-flex align-items-center justify-content-center d-none">
                    <?php echo $latest_news_section_button['title']; ?>
                </a> 
                <?php endif; ?>
                <div class="slick-arrows d-flex d-lg-none">
                        <button class="prev-arrow ms-1 bg-transparent z-3 transition rounded-pill"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/left-slide-arrow.svg"
                                class="h-100" alt=""></button>
                        <button class="next-arrow ms-1 bg-transparent z-3 transition rounded-pill"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/right-slide-arrow.svg"
                                class="h-100" alt=""></button>
                    </div>
            </div>
            <div class="blog-card-slider col-10 col-lg-12">
                <?php foreach($latest_news_section_items as $latest_news_section_items_custom): ?>
                <div>
                    <a href="<?php echo get_permalink($latest_news_section_items_custom->ID); ?>" class="blog-cards w-100 d-inline-block text-decoration-none">
                        <div class="blog-card-img w-100 position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-15">
                            <img src="<?php echo get_the_post_thumbnail_url($latest_news_section_items_custom->ID, 'large'); ?>"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="bodoni font24 res-font18 leading30 res-leading20 text-black dmb-30 tmb-10"><?php echo $latest_news_section_items_custom->post_title; ?></div>
                            <div class="mont-normal font13 leading20 text-black dmb-20 tmb-10 pe-4"><?php echo $latest_news_section_items_custom->post_excerpt; ?></div>
                            <div class="mont-medium font13 leading20 text-black">Read more</div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <?php if(!empty($latest_news_section_button['url'])): 
                 $target_7 = ($latest_news_section_button['target'] == '_blank') ? "_blank" : "";   
                ?>
           <div class="d-flex justify-content-center tmt-60">
           <a href="<?php echo $latest_news_section_button['url']; ?>" target="<?php echo $target_7; ?>"
                    class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center d-lg-none">
                    <?php echo $latest_news_section_button['title']; ?>
            </a> 
           </div>
           <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php elseif (get_row_layout() == 'full_background_image_section'): 
    $full_background_image_section_background_image = get_sub_field('background_image');    
    $full_background_image_section_heading = get_sub_field('heading');    
    $full_background_image_section_sub_content = get_sub_field('sub_content');    
    $full_background_image_section_button = get_sub_field('button');    
    ?>
        <!-- main-hero-section -->
    <section class="main-hero-section position-relative overflow-hidden">
        <?php if(!empty($full_background_image_section_background_image)): ?>
        <img src="<?php echo wp_get_attachment_image_url( $full_background_image_section_background_image, 'large' ); ?>" alt=""
            class="w-100 h-100 object-cover">
        <?php endif; ?>
        <div class="bg-gradient-layer position-absolute w-100 h-100 top-0 opacity-50"></div>
        <div class="position-absolute top-0 w-100 h-100 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-6 ms-lg-5 ps-lg-5">
                        <?php if(!empty($full_background_image_section_heading)): ?>
                        <div class="bodoni font103 leading123 res-font55 res-leading60 text-white tmb-20">
                            <?php echo $full_background_image_section_heading; ?>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($full_background_image_section_sub_content)): ?>
                        <div class="mont-medium font14 leading24 res-font13 text-white dmb-30">
                            <?php echo $full_background_image_section_sub_content; ?>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($full_background_image_section_button['url'])): 
                        $target_8 = ($full_background_image_section_button['target'] == '_blank') ? "_blank" : "";   
                        ?>
                        <div class="d-inline-block">
                            <a href="<?php echo $full_background_image_section_button['url']; ?>" target="<?php echo $target_8; ?>"
                                class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                                <?php echo $full_background_image_section_button['title']; ?>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php elseif (get_row_layout() == 'full_small_height_background_image_section'): 

    $full_small_height_background_image_section_background_image = get_sub_field('background_image');
    $full_small_height_background_image_section_prefix = get_sub_field('prefix');
    $full_small_height_background_image_section_heading = get_sub_field('heading');
    $full_small_height_background_image_section_sub_content = get_sub_field('sub_content');
    $full_small_height_background_image_section_button = get_sub_field('button'); ?>

    <!-- joinus-banner-section -->
    <section class="joinus-banner-section position-relative">
    <?php if(!empty($full_small_height_background_image_section_background_image)): ?>
        <img src="<?php echo wp_get_attachment_image_url( $full_small_height_background_image_section_background_image, 'large' ); ?>" alt=""
            class="w-100 h-100 object-cover">
    <?php endif; ?>
        <div class="bg-gradient-layer position-absolute w-100 h-100 top-0 opacity62"></div>
        <div class="position-absolute w-100 h-100 top-0 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 pe-4">
                    <?php if(!empty($full_small_height_background_image_section_prefix)): ?>
                    <div class="mont-semibold font11 leading20 space1_65 text-white text-uppercase tmb-15 dmb-45">
                    <?php echo $full_small_height_background_image_section_prefix; ?></div>
                    <?php endif; ?>
                    <?php if(!empty($full_small_height_background_image_section_heading)): ?>
                        <div class="bodoni font48 leading55 res-font40 res-leading45 res-space0 space1_2 text-white tmb-10 dmb-5">
                            <?php echo $full_small_height_background_image_section_heading; ?>
                        </div>
                    <?php endif; ?>
                    <?php if(!empty($full_small_height_background_image_section_sub_content)): ?>
                        <div class="mont-medium font14 leading24 text-white dmb-30">
                            <?php echo $full_small_height_background_image_section_sub_content; ?>
                        </div>
                        <?php endif; ?>
                    <?php if(!empty($full_small_height_background_image_section_button['url'])): 
                 $target_9 = ($full_small_height_background_image_section_button['target'] == '_blank') ? "_blank" : "";    ?>
                        <div class="d-inline-block">
                            <a href="<?php echo $full_small_height_background_image_section_button['url']; ?>" target="<?php echo $target_9; ?>"
                                class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                                <?php echo $full_small_height_background_image_section_button['title']; ?>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php elseif (get_row_layout() == 'testimonial_slider_section'): 
    $testimonial_slider_section_prefix = get_sub_field('prefix');    
    $testimonial_slider_section_items = get_sub_field('items');    
    if(!empty($testimonial_slider_section_items)):
    ?>
    <section class="testimonial-slider-section bg-292929 tpt-80 tpb-60 dpt-145 dpb-145">
    <div class="container h-100">
        <div class="position-relative">
            <div class="slick-arrows d-flex position-absolute top-50 z-3 w-100 align-items-end justify-content-center justify-content-lg-between">
                <button class="prev-arrow ms-1 bg-transparent z-3 transition rounded-pill"><img
                        src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/left-slide-arrow.svg"
                        class="h-100" alt=""></button>
                <button class="next-arrow ms-1 bg-transparent z-3 transition rounded-pill"><img
                        src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/right-slide-arrow.svg"
                        class="h-100" alt=""></button>
            </div>
            <div class="mont-normal font11 leading20 space1_65 text-white text-center tmb-35 dmb-60"><?php echo $testimonial_slider_section_prefix; ?></div>
            <div class="col-12 col-lg-10 mx-auto tpb-40">
                <div class="testimonial-slider">
                    <?php foreach($testimonial_slider_section_items as $testimonial_slider_section_items_custom): ?>
                    <div>
                        <div class="bodoni font45 leading55 res-font32 res-leading35 text-white text-center tmb-30 dmb-50">
                        “<?php echo $testimonial_slider_section_items_custom->post_title; ?>”
                        </div>
                        <div class="col-12 col-lg-10 mx-auto px-2 px-lg-4">
                            <div class="mont-normal font13 leading24 text-center text-white tmb-40 dmb-35">
                            <?php echo $testimonial_slider_section_items_custom->post_content; ?>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mont-medium font13 leading24 text-center text-white"><?php echo $testimonial_slider_section_items_custom->post_excerpt; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php elseif (get_row_layout() == 'step_section'): 
    $step_section_items = get_sub_field('items');    
    if(!empty($step_section_items)):
?>
<!-- step-card-section -->
<section class="step-card-section">
    <div class="container">
        <div class="row row20">
            <?php foreach($step_section_items as $step_section_items_custom): 
            $image = $step_section_items_custom['image'];   
            ?>
            <div class="col-12 col-md-6 col-lg-4 step-card tmb-50 dmb-25">
                <div class="step-img radius10 position-relative overflow-hidden card-hover dmb-20">
                    <img src="<?php echo wp_get_attachment_image_url($image, 'large' ); ?>" alt=""
                        class="w-100 h-100 object-cover img">
                </div>
                <div class="px-2 px-lg-3">
                    <div class="mont-medium font11 leading20 text-center text-918E8E dmb-15">
                        <?php echo $step_section_items_custom['prefix']; ?>
                    </div>
                    <div class="bodoni font30 leading35 text-center text-black dmb-10">
                        <?php echo $step_section_items_custom['heading']; ?>
                    </div>
                    <div class="mont-normal font13 leading24 text-center text-black px-1 px-lg-0">
                    <?php echo $step_section_items_custom['content']; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php elseif (get_row_layout() == 'project_form'): 
$project_form_heading = get_sub_field('heading');    
?>
 <!-- contact-form-section -->
 <section class="contact-form-section bg-292929 tpt-85 tpb-75 dpt-125 dpb-85">
        <div class="container">
            <div class="col-12 col-lg-9 col-xl-7 px-xl-4 mx-auto">
                <?php if(!empty($project_form_heading)): ?>
                <div class="bodoni font60 leading70 res-font40 res-leading45 text-white text-center tmb-35 dmb-30">
                    <?php echo $project_form_heading; ?>
                </div>
                <?php endif; ?>
                <?php echo do_shortcode('[contact-form-7 id="2b13929" title="Project Form"]'); ?>
            </div>
        </div>
    </section>
    <?php elseif (get_row_layout() == 'faq_section'): 
        $faq_section_heading = get_sub_field('heading');    
        $faq_section_content = get_sub_field('content');    
        $faq_section_button = get_sub_field('button');    
        $faq_section_items = get_sub_field('items');    
        if(!empty($faq_section_items)): 
    ?>

     <!-- faq-accordion -->
     <section class="faq-accordion">
        <div class="container">
            <div class="col-11 col-lg-5 px-lg-3 mx-auto tmb-60 dmb-70">
                <?php if(!empty($faq_section_heading)): ?>
                <div class="bodoni font40 leading48 res-font30 res-leading35 text-center tmb-20 dmb-30">
                    <?php echo $faq_section_heading; ?>
                </div>
                <?php endif; ?>
                <?php if(!empty($faq_section_content)): ?>
                <div class="mont-medium font13 leading24 text-center">
                    <?php echo $faq_section_content; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 px-lg-1 mx-auto">
                    <div class="closet-accordion">
                        <?php foreach($faq_section_items as $faq_section_items_custom): ?>
                        <div class="closet-cards cursor-pointer border-bottom border-EBEBEB">
                            <div class="closet-title d-flex align-items-center justify-content-between active">
                                <div class="bodoni font25 leading30 res-font22 text-black">
                                    <?php echo $faq_section_items_custom->post_title; ?>
                                </div>
                                <div class="closet-closebtn d-flex-align-items-center">
                                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/close-icon.svg"
                                        alt="" class="w-100">
                                </div>
                            </div>
                            <div class="closet-content dmt-20 dmb-10 pe-lg-3">
                                <div class="col-11 pe-lg-4 mont-normal font13 leading24 text-black">
                                <?php echo $faq_section_items_custom->post_content; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php if(!empty($faq_section_button['url'])): 
                 $target_11 = ($faq_section_button['target'] == '_blank') ? "_blank" : "";    ?>
                    <div class="d-flex align-items-center justify-content-center tmt-40 dmt-30">
                        <a href="<?php echo $faq_section_button['url']; ?>"
                            class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 d-flex align-items-center justify-content-center transition">
                            <?php echo $faq_section_button['title']; ?>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php elseif (get_row_layout() == 'contact_form'): 
    $contact_form_heading = get_sub_field('heading');    
    $contact_form_content = get_sub_field('content');    
    ?>
    <!-- contact-section -->
<section class="contact-section">
    <div class="container">
        <div class="col-lg-6 col-12 px-lg-2 mx-auto">
            <div class="text-center dmb-50 tmb-40">
                <?php if(!empty($contact_form_heading)): ?>
                <div class="bodoni font35 res-font24 leading45 res-leading30 text-black dmb-15">
                    <?php echo $contact_form_heading; ?>
                </div>
                <?php endif; ?>
                <?php if(!empty($contact_form_heading)): ?>
                <div class="content-desc mont-medium font13 leading24 text-191919">
                    <?php echo $contact_form_content; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="c2f86fd" title="Contact Us"]'); ?>
        </div>
    </div>
</section>

<?php elseif (get_row_layout() == 'two_block_section'): 
    $two_block_section_items = get_sub_field('items');   
    if(!empty($two_block_section_items)): 
?>
<!-- location-card-section -->
<section class="location-card-section">
    <div class="container px-p-0">
        <div class="row row15 mx-m-0">
            <?php foreach($two_block_section_items as $two_block_section_items_custom):
            $image = $two_block_section_items_custom['images'];       
            ?>
            <div class="col-lg-6 col-12 px-p-0 tpt-45">
                <div class="location-card">
                    <div class="location-img radius10 res-radius-0 overflow-hidden dmb-50 tmb-45">
                        <img src="<?php echo wp_get_attachment_image_url($image, 'large' ); ?>" alt=""
                            class="h-100 w-100 object-cover">
                    </div>
                    <div class="location-content text-center px-lg-5 px-p-p">
                        <div class="bodoni font30 res-font24 leading35 res-leading30 text-black dmb-30 tmb-25"><?php echo $two_block_section_items_custom['heading']; ?></div>
                        <?php echo $two_block_section_items_custom['content']; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php elseif (get_row_layout() == 'map'): 
$map_iframe = get_sub_field('iframe');    
$map_heading = get_sub_field('heading');    
$map_link = get_sub_field('link');    
?>
<!-- map-section -->
<section class="map-section position-relative">
    <?php 
    if(!empty($map_iframe)):
    echo $map_iframe; 
    endif;
    ?>
    <div class="position-absolute top-center start-0 w-100">
        <div class="container">
            <div class="map-content bg-292929 dpt-55 tpt-30 dpb-55 tpb-30 d-inline-flex flex-column flex-lg-row align-content-center radius5">
                <?php if(!empty($map_heading)): ?>
                <div class="bodoni font30 leading35 text-white tmb-15"><?php echo $map_heading; ?></div>
                <?php endif; ?>
                <?php if(!empty($map_link['url'])): 
                     $target_12 = ($map_link['target'] == '_blank') ? "_blank" : "";
                ?>
                <a href="<?php echo $map_link['url']; ?>" target="<?php echo $target_12; ?>"
                    class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 d-inline-flex align-items-center justify-content-center transition">
                    <?php echo $map_link['title']; ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php elseif (get_row_layout() == 'sell_to_us'): 
$sell_to_us_heading = get_sub_field('heading');     
?>

<!-- contact-section -->
<section class="contact-sell-section bg-F5F5F5 tpt-75 tpb-110 dpt-105 dpb-195">
        <div class="container">
            <div class="col-12 col-lg-7 px-xl-4 mx-auto">
                <?php if(!empty($sell_to_us_heading)): ?>
                <div class="text-center dmb-50">
                    <div class="bodoni font35 leading45 res-font30 res-leading35 text-black dmb-15">
                        <?php echo $sell_to_us_heading; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php echo do_shortcode('[contact-form-7 id="1c41a20" title="Sell To us"]'); ?>
            </div>
        </div>
    </section>
    <?php elseif (get_row_layout() == 'vacancy'): 
    $vacancy_bottom_content = get_sub_field('bottom_content');
    $vacancy_button = get_sub_field('button');
    ?>
    <!-- vacancy-card-section -->
    <section class="vacancy-card-section">
        <div class="container">
            <div class="row">
                <div class="vacancies-menu col-lg-10 col-12 mx-auto dmb-70 tmb-40">
                    <div class="col-6 pe-5 d-flex align-items-center ">
                        <input type="text" placeholder="Search Roles…"
                            class="input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-4 me-2">
                        <button type="submit"
                            class="footer-btn text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 d-flex align-items-center justify-content-center transition">
                            Search
                        </button>
                    </div>
                </div>
                <div class="col-lg-10 col-12 mx-auto">
                    <div class="col-12 vacancy-cards d-flex flex-column flex-lg-row dpt-70 tpt-40 dpb-70 tpb-45 transition border-bottom border-EBEBEB">
                        <div class="col-lg-3 col-12">
                            <div class="mont-medium font13 leading20 text-918E8E dmb-15 tmb-10">Full-time</div>
                            <div class="bodoni font30 res-font24 leading35 res-leading30 text-black dmb-20 tmb-10">Sales Manager</div>
                            <div class="mont-medium font13 res-font11 leading20 text-918E8E dmb-40 tmb-20">£25,000/yr</div>
                            <a href="#enquiryModalToggle" data-bs-toggle="modal"
                                class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                                ENQUIRE
                            </a>
                        </div>
                        <div class="col-lg-9 col-12 ps-lg-5 pe-lg-3 card-right-content tmt-30">
                            <div class="mont-medium font16 leading24 text-black dmb-20">Description</div>
                            <div class="vacancies-content mont-normal font13 leading23 text-black dmb-20">
                                <div class="dmb-20">We are based in Burntwood, Staffordshire (around a 40 minute drive
                                    from Birmingham), and if you fancy a browse our showroom is open to the public
                                    Monday to Saturday. If you can’t make it into store, don’t worry, you can place your
                                    order online or over the phone and we ship all over the world.</div>
                                <div class="dmb-20">
                                    Over 20 years in the business has given us great insight into what our customers
                                    want and need. With customer satisfaction as our top priority, we source furniture,
                                    cutting out the middle man and therefore reducing the price for our clients. We are
                                    based in Burntwood, Staffordshire (around a 40 minute drive from Birmingham), and if
                                    you fancy a browse our showroom is open to the public Monday to Saturday.
                                </div>
                                <div class="dmb-20">We are based in Burntwood, Staffordshire (around a 40 minute drive
                                    from Birmingham), and if you fancy a browse our showroom is open to the public
                                    Monday to Saturday. If you can’t make it into store, don’t worry, you can place your
                                    order online or over the phone and we ship all over the world.</div>
                                <div class="">
                                    Over 20 years in the business has given us great insight into what our customers
                                    want and need. With customer satisfaction as our top priority, we source furniture,
                                    cutting out the middle man and therefore reducing the price for our clients. We are
                                    based in Burntwood, Staffordshire (around a 40 minute drive from Birmingham), and if
                                    you fancy a browse our showroom is open to the public Monday to Saturday.
                                </div>
                            </div>
                            <div
                                class="vacancies-btn cursor-pointer mont-medium font13 leading20 text-black text-decoration-underline">
                                <span class="label-up">Read More</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 vacancy-cards d-flex flex-column flex-lg-row dpt-70 tpt-40 dpb-70 tpb-45 transition border-bottom border-EBEBEB">
                        <div class="col-lg-3 col-12">
                            <div class="mont-medium font13 leading20 text-918E8E dmb-15 tmb-10">Full-time</div>
                            <div class="bodoni font30 res-font24 leading35 res-leading30 text-black dmb-20 tmb-10">Marketing Admin</div>
                            <div class="mont-medium font13 res-font11 leading20 text-918E8E dmb-40 tmb-20">£25,000/yr</div>
                            <a href="#enquiryModalToggle" data-bs-toggle="modal"
                                class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                                ENQUIRE
                            </a>
                        </div>
                        <div class="col-lg-9 col-12 ps-lg-5 pe-lg-3 card-right-content tmt-30">
                            <div class="mont-medium font16 leading24 text-black dmb-20">Description</div>
                            <div class="vacancies-content mont-normal font13 leading23 text-black dmb-20">
                                <div class="dmb-20 ">
                                    Peppermill Interiors is a leading stockist of quality domestic, bar and restaurant
                                    furniture. As a family business, we understand the importance of service and our
                                    dedicated team will help to advise you so that you can buy the best furniture for
                                    your needs. </div>
                                <div class="dmb-20">
                                    We stock a wide range of products suitable for your home, as well as restaurants,
                                    bars, bistros and cafes, keeping large quantities of our reproduction items in stock
                                    for quick and efficient dispatch. As well as our vast collection of new furniture,
                                    we also stock a wide range of vintage, industrial and bespoke items.
                                </div>
                                <div class="dmb-20 ">
                                    We are based in Burntwood, Staffordshire (around a 40 minute drive from Birmingham),
                                    and if you fancy a browse our showroom is open to the public Monday to Saturday. If
                                    you can’t make it into store, don’t worry, you can place your order online or over
                                    the phone and we ship all over the world.
                                </div>
                                <div class="dmb-20 ">
                                    Over 20 years in the business has given us great insight into what our customers
                                    want and need. With customer satisfaction as our top priority, we source furniture,
                                    cutting out the middle man and therefore reducing the price for our clients.
                                </div>
                                <div class="">
                                    We are always looking for the latest pieces and newest trends to add to our
                                    extensive range of new, vintage and industrial furniture. Please browse the site,
                                    have a look at what we offer, and give us a call on 01543 375872 or use our contact
                                    form to discuss your requirements. Our friendly staff are always happy to help, you
                                    can meet them here!
                                </div>
                            </div>
                            <div
                                class="vacancies-btn cursor-pointer mont-medium font13 leading20 text-black text-decoration-underline">
                                <span class="label-up">Read More</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 vacancy-cards d-flex flex-column flex-lg-row dpt-70 tpt-40 dpb-70 tpb-45 transition border-bottom border-EBEBEB">
                        <div class="col-lg-3 col-12">
                            <div class="mont-medium font13 leading20 text-918E8E dmb-15 tmb-10">Full-time</div>
                            <div class="bodoni font30 res-font24 leading35 res-leading30 text-black dmb-20 tmb-10">E-Commerce Executive</div>
                            <div class="mont-medium font13 res-font11 leading20 text-918E8E dmb-40 tmb-20">£25,000/yr</div>
                            <a href="#enquiryModalToggle" data-bs-toggle="modal"
                                class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                                ENQUIRE
                            </a>
                        </div>
                        <div class="col-lg-9 col-12 ps-lg-5 pe-lg-3 card-right-content tmt-30">
                            <div class="mont-medium font16 leading24 text-black dmb-20">Description</div>
                            <div class="vacancies-content mont-normal font13 leading23 text-black dmb-20">
                                <div class="dmb-20">We are based in Burntwood, Staffordshire (around a 40 minute drive
                                    from Birmingham), and if you fancy a browse our showroom is open to the public
                                    Monday to Saturday. If you can’t make it into store, don’t worry, you can place your
                                    order online or over the phone and we ship all over the world.</div>
                                <div class="dmb-20">
                                    Over 20 years in the business has given us great insight into what our customers
                                    want and need. With customer satisfaction as our top priority, we source furniture,
                                    cutting out the middle man and therefore reducing the price for our clients. We are
                                    based in Burntwood, Staffordshire (around a 40 minute drive from Birmingham), and if
                                    you fancy a browse our showroom is open to the public Monday to Saturday.
                                </div>
                                <div class="dmb-20">We are based in Burntwood, Staffordshire (around a 40 minute drive
                                    from Birmingham), and if you fancy a browse our showroom is open to the public
                                    Monday to Saturday. If you can’t make it into store, don’t worry, you can place your
                                    order online or over the phone and we ship all over the world.</div>
                                <div class="">
                                    Over 20 years in the business has given us great insight into what our customers
                                    want and need. With customer satisfaction as our top priority, we source furniture,
                                    cutting out the middle man and therefore reducing the price for our clients. We are
                                    based in Burntwood, Staffordshire (around a 40 minute drive from Birmingham), and if
                                    you fancy a browse our showroom is open to the public Monday to Saturday.
                                </div>
                            </div>
                            <div
                                class="vacancies-btn cursor-pointer mont-medium font13 leading20 text-black text-decoration-underline">
                                <span class="label-up">Read More</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="spacing dmb-115 tmb-90"></div>

    <!-- vacancy-content -->
    <section class="vacancy-content">
        <div class="container">
            <div class="col-lg-10 col-12 mx-auto">
                <div class="col-lg-4 col-12 pe-lg-5">
                    <div class="mont-medium font16 leading26 dmb-30 text-black "><?php echo $vacancy_bottom_content; ?></div>
                    <?php if(!empty($vacancy_button['url'])): 
                 $target_13 = ($vacancy_button['target'] == '_blank') ? "_blank" : "";    ?>
                    <a href="<?php echo $vacancy_button['url']; ?>" target="<?php echo $target_13; ?>"
                        class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                        <?php echo $vacancy_button['title']; ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <div class="spacing dmb-165 tmb-70"></div>

    <?php elseif (get_row_layout() == 'blog'): ?>

        <?php $args = array('taxonomy' => 'category', 'orderby' => 'name', 'order' => 'ASC', 'hide_empty' => 1);
            $cats = get_categories($args); ?>

        <!-- blog-filter -->
  <section class="blog-filter">
    <div class="container pe-p-0">
      <div class="row">
        <div class="activity-category d-flex">
          <div data-filter="all"
            class="mx-2 activity-button border border-707070 rounded-pill mont-medium font13 leading20 text-black text-nowrap active d-flex align-items-center justify-content-center">
            View All</div>
            <?php foreach ($cats as $cat) : ?>
                <div data-filter="<?php echo $cat->slug; ?>"
                class="mx-2 activity-button border border-707070 rounded-pill mont-medium font13 leading20 text-black text-nowrap d-flex align-items-center justify-content-center">
                <?php echo $cat->name; ?></div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <div class="spacing tmt-65 dmt-60"></div>

  <!-- blog-card-section -->
   <section class="blog-card-section">
    <div class="container">
      <div class="row row15 post-full-load_1">

      
        
      </div>
    </div>
  </section> 
  <section class="pagination-section">
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
    
      </ul>
    </nav>
  </section>

  <div class="spacing tmt-50 dmt-35"></div>
<div id="ajaxLoader"></div>
<script id="post-template" type="text/x-handlebars-template">
<div class="col-4 cards-col dmb-115 filter-activity all filter-1">
    <a href="{{ link }}" class="blog-cards w-100 d-inline-block text-decoration-none">
    <div class="blog-card-img w-100 position-relative radius10 overflow-hidden card-hover dmb-25">
        <img src="{{image}}"
        class="w-100 h-100 object-cover img" alt="">
    </div>
    <div class="blog-content">
        <div class="bodoni font24 leading30 text-black dmb-30">{{decodeHtml title}}</div>
        <div class="mont-normal font13 leading20 text-black dmb-20 pe-4">{{decodeHtml content}}</div>
        <div class="mont-medium font13 leading20 text-black">Read more</div>
    </div>
    </a>
</div>
</script>
<?php wp_reset_postdata(); ?>
<?php elseif (get_row_layout() == 'middle_page_heading'): 
$middle_page_heading = get_sub_field('heading');    
$middle_page_content = get_sub_field('content');    
?>
 <!-- center-title-section -->
 <section class="center-title-section">
        <div class="container">
            <div class="col-12 col-md-9 col-xl-7 px-lg-5 mx-auto text-center">
                <?php if(!empty($middle_page_heading)): ?>
                <div class="content-title bodoni font60 leading70 res-font35 res-leading45 dmb-25"><?php echo $middle_page_heading; ?></div>
                <?php endif; ?>
                <?php if(!empty($middle_page_content)): ?>
                <div class="content-desc mont-normal font13 leading24">
                    <?php echo $middle_page_content; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php elseif (get_row_layout() == 'main_testimonials'): ?>
    <!-- testimonial-section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="col-12 col-lg-10 col-xl-8 px-xl-1 mx-auto">
                <div class="testimonial-card border-bottom border-EBEBEB tpt-45 tpb-45 dpt-60 dpb-50">
                    <div class="review-stars d-flex align-items-center dmb-35">
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                    </div>
                    <div class="bodoni font30 leading35 res-font24 res-leading30 text-black tmb-20 dmb-25">
                        “Five star - superb customer service”
                    </div>
                    <div class="mont-normal font13 leading24 text-black tmb-20 dmb-30 pe-4 pe-lg-0">
                        Five star - superb customer service, superb vintage long desk and chair, superb delivery drivers
                        - nothing was a problem. Thank you
                    </div>
                    <div class="mont-medium font13 leading20 text-black">
                        OL, Northamptonshire
                    </div>
                </div>
                <div class="testimonial-card border-bottom border-EBEBEB tpt-45 tpb-45 dpt-60 dpb-50">
                    <div class="review-stars d-flex align-items-center dmb-35">
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                    </div>
                    <div class="bodoni font30 leading35 res-font24 res-leading30 text-black tmb-20 dmb-25">
                        “Overwhelmed by the exemplary care of your business.”
                    </div>
                    <div class="mont-normal font13 leading24 text-black tmb-20 dmb-30 pe-4 pe-lg-0">
                        I contacted Kayleigh in your Customer Services Department several weeks ago about a chair that I
                        bought from your company. The frame had bent but it initially looked like the chair had been
                        discontinued and a replacement wasn’t going to be possible. Over the course of several weeks
                        Kayleigh kept me informed at every stage. She looked at having a new frame made but in the end
                        managed to locate a replacement which arrived a couple of weeks ago.
                    </div>
                    <div class="mont-normal font13 leading24 text-black tmb-20 dmb-30 pe-4 pe-lg-0">
                        I am delighted with what Kayleigh has done and so thrilled that there are still companies like
                        yours that place such an emphasis on customer care. I may not be a local customer but I have
                        made a point of championing your business on several occasions recently and wish you every
                        blessing and success in building your business and employing more excellent staff like Kayleigh.
                    </div>
                    <div class="mont-medium font13 leading20 text-black">
                        OL, Northamptonshire
                    </div>
                </div>
                <div class="testimonial-card border-bottom border-EBEBEB tpt-45 tpb-45 dpt-60 dpb-50 pe-4 pe-lg-0">
                    <div class="review-stars d-flex align-items-center dmb-35">
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                    </div>
                    <div class="bodoni font30 leading35 res-font24 res-leading30 text-black tmb-20 dmb-25">
                        “Sssshhhhh! This place needs to remain a secret.”
                    </div>
                    <div class="mont-normal font13 leading24 text-black tmb-20 dmb-30 pe-4 pe-lg-0">
                        ‘Sssshhhhh! This place needs to remain a secret, I don’t want everyone knowing my secret place
                        to shop. New showroom is amazing, staff friendly & happy to help. They will even lend a tape
                        measure to make sure the furniture will fit. I’ve had a few pieces & can’t wait for my house
                        renovation to be over so I can take another trip & indulge in my guilty pleasure again.’
                    </div>
                    <div class="mont-medium font13 leading20 text-black">
                        OL, Northamptonshire
                    </div>
                </div>
                <div class="testimonial-card border-bottom border-EBEBEB tpt-45 tpb-45 dpt-60 dpb-50 pe-4 pe-lg-0">
                    <div class="review-stars d-flex align-items-center dmb-35">
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                        <div class="review-star me-2"><img
                                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                                class="w-100"></div>
                    </div>
                    <div class="bodoni font30 leading35 res-font24 res-leading30 text-black tmb-20 dmb-25">
                        “Many, many thanks for going the extra mile to help us.”
                    </div>
                    <div class="mont-normal font13 leading24 text-black tmb-20 dmb-30 pe-4 pe-lg-0">
                        Many, many thanks for going the extra mile to help us.
                    </div>
                    <div class="mont-normal font13 leading24 text-black tmb-20 dmb-30 pe-4 pe-lg-0">
                        You have a lovely showroom full of beautiful things and we are so happy with our new table and
                        chairs.
                    </div>
                    <div class="mont-medium font13 leading20 text-black">
                        OL, Northamptonshire
                    </div>
                </div>
            </div>
        </div>
    </section>

<div id="ajaxLoader"></div>
<script id="testimonials-template" type="text/x-handlebars-template">
<div class="col-4 cards-col dmb-115 filter-activity all filter-1">
    <a href="{{ link }}" class="blog-cards w-100 d-inline-block text-decoration-none">
    <div class="blog-card-img w-100 position-relative radius10 overflow-hidden card-hover dmb-25">
        <img src="{{image}}"
        class="w-100 h-100 object-cover img" alt="">
    </div>
    <div class="blog-content">
        <div class="bodoni font24 leading30 text-black dmb-30">{{decodeHtml title}}</div>
        <div class="mont-normal font13 leading20 text-black dmb-20 pe-4">{{decodeHtml content}}</div>
        <div class="mont-medium font13 leading20 text-black">Read more</div>
    </div>
    </a>
</div>

<div class="testimonial-card border-bottom border-EBEBEB tpt-45 tpb-45 dpt-60 dpb-50">
    <div class="review-stars d-flex align-items-center dmb-35">
        <div class="review-star me-2"><img
                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                class="w-100"></div>
        <div class="review-star me-2"><img
                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                class="w-100"></div>
        <div class="review-star me-2"><img
                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                class="w-100"></div>
        <div class="review-star me-2"><img
                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                class="w-100"></div>
        <div class="review-star me-2"><img
                src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/star.svg" alt=""
                class="w-100"></div>
    </div>
    <div class="bodoni font30 leading35 res-font24 res-leading30 text-black tmb-20 dmb-25">
        “{{decodeHtml title}}”
    </div>
    <div class="mont-normal font13 leading24 text-black tmb-20 dmb-30 pe-4 pe-lg-0">
    {{decodeHtml maincontent}}
    </div>
    <div class="mont-medium font13 leading20 text-black">
    {{decodeHtml content}}
    </div>
</div>
</script>
<?php elseif (get_row_layout() == '2_side_2_collection'):
$collection_heading = get_sub_field('heading');       
$collection = get_sub_field('collection');       
$collection_description = get_sub_field('description');       
if(!empty($collection)): 
?>
<!-- collection-card-section -->
<section class="collection-card-section">
    <div class="container">
        <div class="col-12 col-lg-7 px-2 px-md-0 mx-auto tmb-35 dmb-50">
            <?php if(!empty($collection_heading)): ?>
            <div class="bodoni font40 leading45 res-font30 res-leading35 text-center text-black dmb-25">
                <?php echo $collection_heading; ?>
            </div>
            <?php endif; ?>
            <?php if(!empty($collection_description)): ?>
            <div class="mont-medium font13 leading24 text-center text-7D7D7D">
                <?php echo $collection_description; ?>
            </div>
            <?php endif; ?>
        </div>
        <div class="row row10">
            <?php foreach($collection as $collection_custom):
            $thumbnail_id = get_woocommerce_term_meta($collection_custom, 'thumbnail_id', true);
            $image = wp_get_attachment_url($thumbnail_id, 'large');       
            ?>
            <div class="col-12 col-lg-6 dmb-20 cards-col">
                <a href="<?php echo get_term_link($collection_custom); ?>" class="w-100 text-decoration-none">
                    <div class="collection-cards w-100 radius10 position-relative overflow-hidden  card-hover">
                        <img src="<?php echo $image; ?>" alt=""
                            class="w-100 h-100 object-cover img">
                        <div class="position-absolute w-100 h-100 top-0 bg-black opacity-25"></div>
                        <div
                            class="position-absolute w-100 h-100 top-0 d-flex flex-column justify-content-end ps-3 pe-5 px-md-5 mpb-20 dpb-60">
                            <div class="bodoni font40 leading45 res-font28 res-leading35 text-white dmb-10">
                            <?php echo get_term($collection_custom)->name ?>
                            </div>
                            <div
                                class="mont-medium font14 leading24 res-font11 res-leading16 text-white tmb-10 dmb-15 me-5 me-lg-0">
                                <?php echo get_term($collection_custom)->description ?>
                            </div>
                            <div class="d-inline-flex">
                                <div
                                    class="mont-medium font13 leading24 res-font11 res-leading16 text-white text-capitalize border-bottom">
                                    Shop
                                    Collection</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php elseif (get_row_layout() == 'center_hero_section'): 
    $center_hero_section_background_image = get_sub_field('background_image');
    $center_hero_section_heading = get_sub_field('heading');
    $center_hero_section_prefix = get_sub_field('prefix');
?>
<!-- project-open-hero -->
<section class="project-open-hero position-relative">
        <img src="<?php echo wp_get_attachment_image_url( $center_hero_section_background_image, 'large' ); ?>" alt=""
            class="w-100 h-100 object-cover">
        <div class="position-absolute w-100 h-100 top-0 bg-black opacity38"></div>
        <div class="tpt-150 dpt-165 position-absolute w-100 top-0 z-3">
            <div class="container">
                <a href="<?php echo get_home_url(); ?>/projects" class="mont-semibold font11 leading20 space0_28 text-white text-uppercase cursor-pointer">BACK TO
                    ALL</a>
            </div>
        </div>
        <div class="position-absolute top-0 w-100 h-100 z-2">
            <div class="container h-100">
                <div class="row h-100 d-flex align-items-center">
                    <div class="col-8 mx-auto">
                        <?php if(!empty($center_hero_section_heading)): ?>
                        <div class="bodoni font70 leading85 res-font55 res-leading65 text-white text-center tmb-15 dmb-10">
                            <?php echo $center_hero_section_heading; ?>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($center_hero_section_prefix)): ?>
                        <div class="mont-medium font16 leading20 text-white text-center">
                            <?php echo $center_hero_section_prefix; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php elseif (get_row_layout() == 'project_content'): 
    $project_content_heading = get_sub_field('heading');
    $project_content_left_side = get_sub_field('left_side');
    $project_content_right_side = get_sub_field('right_side');
?>
 <!-- project-open-content -->
 <section class="project-open-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 pe-lg-5 tmb-60 dmb-115">
                    <?php if(!empty($project_content_heading)): ?>
                    <div class="bodoni font34 leading45 res-font27 res-leading35 text-black">
                        <?php echo $project_content_heading; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-lg-6 tmb-50">
                <?php if(!empty($project_content_left_side['project_name'])): ?>
                    <div class="tmb-20 dmb-30">
                        <div class="mont-medium font13 leading20 text-918E8E dmb-10">Project Name</div>
                        <a class="mont-medium font14 leading20 text-black"><?php echo $project_content_left_side['project_name'];?></a>
                    </div>
                <?php endif; ?>
                <?php if(!empty($project_content_left_side['completion_date'])): ?>
                    <div class="tmb-20 dmb-30">
                        <div class="mont-medium font13 leading20 text-918E8E dmb-10">Completion Date</div>
                        <a class="mont-medium font14 leading20 text-black"><?php echo $project_content_left_side['completion_date'];?></a>
                    </div>
                <?php endif; ?>
                <?php if(!empty($project_content_left_side['duration'])): ?>
                    <div class="tmb-20 dmb-30">
                        <div class="mont-medium font13 leading20 text-918E8E dmb-10">Duration</div>
                        <a class="mont-medium font14 leading20 text-black"><?php echo $project_content_left_side['duration'];?></a>
                    </div>
                <?php endif; ?>
                </div>
                <?php if(!empty($project_content_right_side)): ?>
                <div class="col-12 col-lg-6 pe-4 ps-lg-3">
                    <?php foreach($project_content_right_side as $project_content_right_side_custom):?>
                    <div class="tmb-40 dmb-70">
                        <div class="bodoni font22 leading30 space0_45 res-space0_55 text-black dmb-30">
                            <?php echo $project_content_right_side_custom['heading']; ?>
                        </div>
                        <div class="mont-normal font13 leading24 text-black dmb-25">
                        <?php echo $project_content_right_side_custom['content']; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php elseif (get_row_layout() == 'main_project'): 
        $main_project_heading = get_sub_field('heading');
        $main_project_content = get_sub_field('content');
    ?>
        <!-- center-title-section -->
    <section class="center-title-section">
        <div class="container">
            <div class="col-12 col-md-9 col-xl-7 px-lg-5 mx-auto text-center">
                <?php if(!empty($main_project_heading)): ?>
                <div class="content-title bodoni font60 leading70 res-font35 res-leading45 dmb-25"><?php echo $main_project_heading; ?></div>
                <?php endif; ?>
                <?php if(!empty($main_project_content)): ?>
                <div class="content-desc mont-normal font13 leading24">
                    <?php echo $main_project_content; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <div class="spacing tmt-45 dmt-55"></div>
<?php        
    endif;
endwhile;
endif;
?>