<?php 
$links = get_field('links','option');
$newsletter_heading = get_field('newsletter_heading','option');
$newsletter_description = get_field('newsletter_description','option');
$cards = get_field('cards','option');
$bottom_links = get_field('bottom_links','option');
$social_media = get_field('social_media','option');
?>

<footer class="footer">
        <div class="top-footer dpt-40 tpt-55">
            <div class="container">
            <div class="text-center dpb-45 tpb-25">
                <div class="bodoni font40 res-font30 leading48 res-leading35 dmb-15 tmb-20 top-footer-text">#peppermillhomes</div>
                <div class="mont-normal font13 leading20 top-footer-text">Share your creation on Instagram using the
                    hashtag
                    #peppermillhomes</div>
            </div>
            <div class="footer-slider dpb-50 tpb-45">
                <div class="footer-img radius10 res-radius5 overflow-hidden position-relative card-hover">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-3.png"
                        class="w-100 h-100 object-cover img" alt="">
                </div>
                <div class="footer-img radius10 res-radius5 overflow-hidden position-relative card-hover">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-4.png"
                        class="w-100 h-100 object-cover img" alt="">
                </div>
                <div class="footer-img radius10 res-radius5 overflow-hidden position-relative card-hover">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-2.png"
                        class="w-100 h-100 object-cover img" alt="">
                </div>
                <div class="footer-img radius10 res-radius5 overflow-hidden position-relative card-hover">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-1.png"
                        class="w-100 h-100 object-cover img" alt="">
                </div>
                <div class="footer-img radius10 res-radius5 overflow-hidden position-relative card-hover">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/footer-1.png"
                        class="w-100 h-100 object-cover img" alt="">
                </div>
                <div class="footer-img radius10 res-radius5 overflow-hidden position-relative card-hover">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-4.png"
                        class="w-100 h-100 object-cover img" alt="">
                </div>
            </div>
        </div>
    <div class="container px-p-0">
        <div class="bottom-footer dpt-80 tpt-0 dpb-45 tpb-0">
            
            <div class="row flex-column flex-lg-row dpb-130 tpb-40">
                <?php if(!empty($links)):
                foreach($links as $links_custom):     
                ?>
                <div class="col-lg-2 col-12 top-border tpt-30 tpb-30">
                    <?php if(!empty($links_custom['heading'])): ?>
                    <div class="dmb-30 tmb-20 font26 res-font22 leading30 text-white px-p-p">
                        <?php echo $links_custom['heading']; ?></div>
                    <?php endif; ?>
                    <?php if(!empty($links_custom['link'])): ?>
                    <ul class="list-none footer-content mb-0 px-0 px-p-p">
                        <?php 
                        foreach($links_custom['link'] as $link): 
                            if(!empty($link['link']['url'])):
                                $target = ($link['link']['target'] == '_blank') ? "_blank" : "";
                        ?>
                        <li class="dmb-5"><a href="<?php echo $link['link']['url']; ?>" target="<?php echo $target; ?>"
                                class="text-decoration-none mont-normal font13 leading20 text-white "><?php echo $link['link']['title']; ?></a></li>
                        <?php 
                        endif;
                        endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <?php 
                endforeach;
                endif; ?>
                
                <div class="col-lg-6 col-12 tpt-40 top-border">
                    <div class="col-lg-8 col-12 ms-lg-auto px-p-p">
                        <?php if(!empty($newsletter_heading)): ?>
                        <div class="bodoni font26 res-font22 leading30 text-white dmb-30 tmb-25"><?php echo $newsletter_heading; ?></div>
                        <?php endif; ?>
                        <?php if(!empty($newsletter_description)): ?>
                        <div class="mont-medium font13 leading20 text-white dmb-20 tmb-35"><?php echo $newsletter_description; ?></div>
                        <?php endif; ?>
                            <?php echo do_shortcode('[contact-form-7 id="b6f617f" title="Newsletter"]'); ?>
                    </div>
                </div>
            </div>
           
            <div class="row flex-column flex-lg-row top-border tpt-40">
                <?php if(!empty($cards)): ?>
                <div class="col-lg-4 col-12 order-3 order-lg-1 tmb-50 px-p-p">
                    <ul class="d-flex list-none footer-ul mb-0 px-0">
                        <?php foreach($cards as $cards_custom): 
                        if(!empty($cards_custom['image'])): 
                        ?>
                        <li class="me-lg-4 me-1"><a href="" class="d-inline-block footer-icon"><img
                                    src="<?php echo $cards_custom['image'] ?>"
                                    class="w-100" alt=""></a></li>
                        <?php 
                        endif;
                        endforeach; ?>
                    </ul>
                </div>
                <?php endif; 
                if(!empty($bottom_links)): 
                ?>
                <div class="col-lg-5 col-12 order-2 tmb-50 px-p-p">
                    <ul class="list-none footer-ul mb-0 px-0 d-flex flex-wrap align-items-center h-100">
                        <?php foreach($bottom_links as $bottom_links_custom): 
                            if(!empty($bottom_links_custom['link']['url'])):
                                $target_1 = ($bottom_links_custom['link']['target'] == '_blank') ? "_blank" : "";
                        ?>
                        <li class="col-6 col-lg-3"><a href="<?php echo $bottom_links_custom['link']['url']; ?>" target="<?php echo $target_1; ?>"
                                class="text-decoration-none mont-semibold font9 leading11 space0_23 text-uppercase text-white"><?php echo $bottom_links_custom['link']['title']; ?></a></li>
                        <?php 
                        endif;
                        endforeach; ?>
                    </ul>
                </div>
                <?php endif; 
                if(!empty($social_media)): 
                ?>
                <div class="col-lg-3 col-12 order-1 order-lg-3 tmb-50 px-p-p">
                    <ul class="d-flex footer-ul list-none mb-0 px-0 justify-content-lg-end">
                    <?php foreach($social_media as $social_media_custom): 
                            if(!empty($social_media_custom['link']['url'])):
                                $target_2 = ($social_media_custom['link']['target'] == '_blank') ? "_blank" : "";
                        ?>
                        <li class="me-3"><a
                                class="footer-icon-bg rounded-pill bg-white d-inline-flex justify-content-center align-items-center"
                                href="<?php echo $social_media_custom['link']['url']; ?>" target="<?php echo $target_2; ?>"><img src="<?php echo $social_media_custom['icon']['url']; ?>"
                                    class="header-icon" alt=""></a></li>
                        <?php 
                        endif;
                        endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<script>
    function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("search-input");
        filter = input.value.toUpperCase();
        ul = document.getElementById("search-suggestions");
        li = ul.getElementsByClassName("search-suggestion-item");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByClassName("search-suggestion-title")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>