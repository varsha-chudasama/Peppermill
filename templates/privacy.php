<?php
/*
 * Template Name: privacy
 */

$items_p = get_field('items');
$button_1 = get_field('button_1');
$button_2 = get_field('button_2');
$button_3 = get_field('button_3');
if(!empty($items_p)):
?>
<div class="spacing tpt-145"></div>
<section class="privacy-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12 pe-4 privacy-left-content res-bg-EBEBEB res-radius5 tpt-35 tpb-45 ps-3">
                <ul class="list-none ps-0 mb-0 privacy-links position-sticky p-initial" id="privacy-links">
                    <?php foreach($items_p as $key => $items_custom): 
                    $class = ($key == '0') ? "active" :"";    
                    ?>
                    <li class="dmb-20 d-flex align-items-center transition opacity-50 <?php echo $class; ?>">
                        <a href="#privacy-<?php echo $key; ?>"
                            class="text-decoration-none d-inline-block mont-medium font13 leading20 text-black text-capitalize transition">
                            <?php echo $items_custom['heading']; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-7 col-12 ps-lg-2 privacy-right-content dpb-160 tpb-75">
            <?php foreach($items_p as $key => $items_custom): 
                    $class = ($key == '0') ? "active" :"";    
                    ?>
                <div class="single-content" id="privacy-<?php echo $key; ?>">
                    <div class="bodoni font30 res-font24 leading35 res-leading30 text-black text-capitalize dmb-30 tmb-25">
                    <?php echo $items_custom['heading']; ?>
                    </div>
                    <div class="mont-normal font13 leading24 text-black">
                    <?php echo $items_custom['content']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="dmt-50 d-flex flex-wrap align-items-center privacy-btn-group">
                    <?php if(!empty($button_1['url'])): 
                    $target_1 = ($button_1['target'] == '_blank') ? "_blank" : "";    
                    ?>
                    <a href="<?php echo $button_1['url']; ?>" target="<?php echo $target_1; ?>"
                        class="text-decoration-none tmb-15 btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center me-4">
                        <?php echo $button_1['title']; ?>
                    </a>
                    <?php 
                    endif;
                    if(!empty($button_2['url'])): 
                    $target_2 = ($button_2['target'] == '_blank') ? "_blank" : "";    
                    ?>
                    <a href="<?php echo $button_2['url']; ?>" target="<?php echo $target_2; ?>"
                        class="text-decoration-none tmb-15 btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center me-4">
                        <?php echo $button_2['title']; ?>
                    </a>
                    <?php 
                    endif;
                    if(!empty($button_3['url'])): 
                    $target_3 = ($button_3['target'] == '_blank') ? "_blank" : "";    
                    ?>
                    <a href="<?php echo $button_3['url']; ?>" target="<?php echo $target_3; ?>"
                        class="text-decoration-none tmb-15 btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center me-4">
                        <?php echo $button_3['title']; ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>