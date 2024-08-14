<?php 
$top_line = get_field('top_line','option');
$phone_number = get_field('phone_number','option');
$logo = get_field('logo','option');
$menu = get_field('menu','option');
?>
<header class="header position-fixed top-0 w-100 transition">
    <div class="header-section position-relative">
        <div class="bg-292929 dpt-10 dpb-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <?php if(!empty($top_line)): ?>
                    <div class="col-lg-6 col-12 mont-medium font9 leading11 space1_25 text-white text-center res-space1_35 res-leading16">
                        <?php echo $top_line; ?>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($phone_number)): ?>
                    <a href="tel:<?php echo $phone_number; ?>" class="col-lg-3 mont-medium font9 leading11 space1_25 text-white text-end d-none d-lg-block text-decoration-none">
                        CALL US: <?php echo $phone_number; ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="bg-white nav-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-3 d-xl-none d-flex">
                        <div class="menu-toggle">
                            <svg class="burgar-menu">
                                <line x1="0" y1="50%" x2="100%" y2="50%" class="top" shape-rendering="crispEdges" />
                                <line x1="0" y1="50%" x2="100%" y2="50%" class="middle" shape-rendering="crispEdges" />
                                <line x1="0" y1="50%" x2="100%" y2="50%" class="bottom" shape-rendering="crispEdges" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-xl-2 col-6 d-flex justify-content-xl-start justify-content-center align-items-center">
                        <a href="<?php echo get_home_url(); ?>" class="header-logo d-inline-block text-decoration-none">
                            <img src="<?php echo $logo['url']; ?>" class="w-100" alt="">
                        </a>
                    </div>
                    <?php if(!empty($menu)): ?>
                    <div class="col-xl-8 col-12 order-xl-0 order-3 navigation-menu transition top-100 start-0">
                        <nav class="nav d-flex align-items-center justify-content-xl-center h-100 transition">
                            <ul class="navigation d-flex flex-xl-row flex-column align-items-xl-center justify-content-xl-center mb-0 px-0 list-none w-100">
                                <?php foreach($menu as $menu_custom): 
                                if(!empty($menu_custom['sub_menu']['single_line'])): ?>    
                                <li class="menu-item d-flex flex-wrap align-items-center me-xxl-4 me-xl-3 transition">
                                    <?php
                                        if(!empty($menu_custom['link']['url'])): 
                                        $target = ($menu_custom['link']['target'] == '_blank') ? "_blank" : "";
                                    ?>
                                        <div class="dmt-30 dpb-30 d-flex flex-wrap align-items-center w-100">
                                        <a class="text-decoration-none position-relative mont-medium font13 leading16 text-191919" target="<?php echo $target; ?>" href="<?php echo $menu_custom['link']['url']; ?>"><?php echo $menu_custom['link']['title']; ?></a>
                                            <div class="menu-arrow d-xl-none ms-1"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/down-arrow.svg" alt=""></div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="mega-menu position-absolute top-100 start-0 w-100 bg-white dpt-35 dpb-45 transition col-12">
                                        <div class="container">
                                            <div class="row">
                                                <?php foreach($menu_custom['sub_menu']['single_line'] as $single_line): ?>
                                                <div class="col-xl-2 col-6">
                                                    <?php if(!empty($single_line['heading'])): ?>
                                                    <div class="dmb-15 tmb-20 text-decoration-none d-inline-block mont-medium font11 leading20 text-7D7D7D res-leading11">
                                                        <?php echo $single_line['heading']; ?>
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php if(!empty($single_line['sub_link'])): ?>
                                                    <ul class="list-none text-decoration-none header-menu mb-0 px-0">
                                                        <?php foreach($single_line['sub_link'] as $single_line_custom): 
                                                        if(!empty($single_line_custom['links']['url'])):
                                                            $target_1 = ($single_line_custom['links']['target'] == '_blank') ? "_blank" : "";
                                                        ?>    
                                                        <li class="dmb-15 tmb-20 d-flex"><a href="<?php echo $single_line_custom['links']['url']; ?>" target="<?php echo $target_1; ?>" class="text-decoration-none d-inline-block mont-medium font13 leading20 text-black res-font11 res-leading11"><?php echo $single_line_custom['links']['title']; ?></a></li>
                                                        <?php endif; 
                                                            endforeach;
                                                        ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                </div>
                                                <?php endforeach; ?>
                                                <?php if(!empty($menu_custom['sub_menu']['right_image'])): ?>
                                                <div class="col-7 d-xl-block d-none">
                                                    <div class="row row10">
                                                        <?php foreach($menu_custom['sub_menu']['right_image'] as $right_image): ?>
                                                        <div class="col-4 dmt-20 header-card-col">
                                                            <a href="<?php echo $right_image['link']['url']; ?>" class="header-cards d-inline-block text-decoration-none card-hover radius10 overflow-hidden w-100 position-relative">
                                                                <img src="<?php echo wp_get_attachment_image_url($right_image['image'], 'small'); ?>" class="w-100 h-100 object-cover img" alt="">
                                                                <div class="card-layer position-absolute top-0 start-0 h-100 w-100 bg-black opacity23">
                                                                </div>
                                                                <?php
                                                                    $target_2 = ($right_image['link']['target'] == '_blank') ? "_blank" : "";
                                                                    ?>
                                                                <div class="position-absolute top-center text-center w-100">
                                                                    <div class="col-8 mx-auto">
                                                                        <div class="bodoni font30 leading30 text-capitalize text-white dpb-15">
                                                                        <?php echo $right_image['link']['title']; ?></div>
                                                                        <div target="<?php echo $target_2; ?>" class="mont-medium font13 leading20 text-decoration-underline text-white">
                                                                            Shop Now</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php else: 
                                    if(!empty($menu_custom['link']['url'])): 
                                    $target = ($menu_custom['link']['target'] == '_blank') ? "_blank" : "";
                                ?>
                                <li class="menu-item d-flex flex-wrap align-items-center me-xxl-4 me-xl-3 transition">
                                    <div class="dmt-30 dpb-30 d-flex flex-wrap align-items-center w-100">
                                        <a class="text-decoration-none position-relative mont-medium font13 leading16 text-191919" target="<?php echo $target; ?>" href="<?php echo $menu_custom['link']['url']; ?>"><?php echo $menu_custom['link']['title']; ?></a>
                                    </div>
                                </li>
                                <?php 
                                endif; 
                                endif;
                                endforeach; ?>
                            </ul>
                            <div class="res-logo-nav2 list-none  d-inline-flex d-lg-none w-100 align-items-center dmt-30 dmb-40"></div>
                        </nav>
                    </div>
                    <?php endif; ?>
                    <div class="col-xl-2 col-3 d-flex justify-content-end align-items-center">
                        <ul class="d-xl-flex d-none align-items-center justify-content-center h-100 list-none logo-navigation mb-0 px-0">
                            <li class="me-2 head-search">
                                <div href="" class="text-decoration-none d-inline-block head-search-img">
                                    <div class="bg-292929 icon-bg d-flex align-items-center justify-content-center position-relative rounded-pill cursor-pointer">
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/search-icon.svg" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="seach-menu-slide position-absolute start-0 top-100 w-100 bg-white transition">
                                    <div class="container h-100 dpt-50 tpt-20">
                                        <div class="bodoni font60 leading70 text-black text-center dmb-30">
                                            Search
                                        </div>
                                        <div class="col-lg-5 col-12 px-lg-5 mx-auto">
                                            <div class="search-menu w-100 position-relative radius5 mx-auto">
                                                <input type="text" placeholder="Search here..." class="input-field w-100 mont-medium font12 leading16 text-918E8E radius5 px-5" id="search-input" onkeyup="myFunction()">
                                                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/search-black-icon-1.svg" alt="" class="search-img position-absolute top-center start-0 ms-3">
                                                <div class="cursor-pointer position-absolute top-center end-0 me-3 p-1 bg-292929 rounded-pill d-inline-flex">
                                                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/close-white-icon.svg" alt="" class="search-close">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="head-search-content d-flex align-items-center justify-content-center dmt-40">
                                            <div class="seach-logo-img dpb-200 tpb-150">
                                                <img src="assets/images/logo/green-border-logo.svg" alt="">
                                            </div>
                                            <div id="search-suggestions" class="search-suggestions h-100 w-100 d-none overflow-y-auto">
                                                <div class="row row10">
                                                    <div class="col-lg-3 col-6 dmb-115 tmb-35 search-suggestion-item">
                                                        <a href="" class="product-cards d-inline-block text-decoration-none">
                                                            <div class="product-img position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-20">
                                                                <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-1.png" class="w-100 h-100 object-cover img" alt="">
                                                                <div class="mont-medium font13 res-font11 leading20 res-leading16 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 dmt-10 ms-2">
                                                                    New in</div>
                                                                <div class="like-img position-absolute bottom-0 end-0 me-4 mb-3 z-3">
                                                                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/black-like-icon.svg" class="w-100" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="search-suggestion-title mont-medium font16 res-font14 leading20 text-black dpb-10">Gardena Sheepskin Armchair</div>
                                                                <div class="mont-medium font13 res-font11 leading20 text-7D7D7D">£995.00</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-3 col-6 dmb-115 tmb-35 search-suggestion-item">
                                                        <a href="" class="product-cards d-inline-block text-decoration-none">
                                                            <div class="product-img position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-20">
                                                                <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-1.png" class="w-100 h-100 object-cover img" alt="">
                                                                <div class="mont-medium font13 res-font11 leading20 res-leading16 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 dmt-10 ms-2">
                                                                    New in</div>
                                                                <div class="like-img position-absolute bottom-0 end-0 me-4 mb-3 z-3">
                                                                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/black-like-icon.svg" class="w-100" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="search-suggestion-title mont-medium font16 res-font14 leading20 text-black dpb-10">Medway Side Table</div>
                                                                <div class="mont-medium font13 res-font11 leading20 text-7D7D7D">£995.00</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-3 col-6 dmb-115 tmb-35 search-suggestion-item">
                                                        <a href="" class="product-cards d-inline-block text-decoration-none">
                                                            <div class="product-img position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-20">
                                                                <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-1.png" class="w-100 h-100 object-cover img" alt="">
                                                                <div class="mont-medium font13 res-font11 leading20 res-leading16 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 dmt-10 ms-2">
                                                                    New in</div>
                                                                <div class="like-img position-absolute bottom-0 end-0 me-4 mb-3 z-3">
                                                                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/black-like-icon.svg" class="w-100" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="search-suggestion-title mont-medium font16 res-font14 leading20 text-black dpb-10">Denver Velvet Sofa</div>
                                                                <div class="mont-medium font13 res-font11 leading20 text-7D7D7D">£995.00</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-3 col-6 dmb-115 tmb-35 search-suggestion-item">
                                                        <a href="" class="product-cards d-inline-block text-decoration-none">
                                                            <div class="product-img position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-20">
                                                                <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-1.png" class="w-100 h-100 object-cover img" alt="">
                                                                <div class="mont-medium font13 res-font11 leading20 res-leading16 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 dmt-10 ms-2">
                                                                    New in</div>
                                                                <div class="like-img position-absolute bottom-0 end-0 me-4 mb-3 z-3">
                                                                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/black-like-icon.svg" class="w-100" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="search-suggestion-title mont-medium font16 res-font14 leading20 text-black dpb-10">Monaco Cocktail Bar</div>
                                                                <div class="mont-medium font13 res-font11 leading20 text-7D7D7D">£995.00</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-3 col-6 dmb-115 tmb-35 search-suggestion-item">
                                                        <a href="" class="product-cards d-inline-block text-decoration-none">
                                                            <div class="product-img position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-20">
                                                                <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-1.png" class="w-100 h-100 object-cover img" alt="">
                                                                <div class="mont-medium font13 res-font11 leading20 res-leading16 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 dmt-10 ms-2">
                                                                    New in</div>
                                                                <div class="like-img position-absolute bottom-0 end-0 me-4 mb-3 z-3">
                                                                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/black-like-icon.svg" class="w-100" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="search-suggestion-title mont-medium font16 res-font14 leading20 text-black dpb-10">Gardena Sheepskin Armchair</div>
                                                                <div class="mont-medium font13 res-font11 leading20 text-7D7D7D">£995.00</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="me-2 head-icon">
                                <a href="" class="text-decoration-none d-inline-block">
                                    <div class="bg-292929 icon-bg d-flex align-items-center justify-content-center position-relative rounded-pill">
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/location-icon.svg" class="w-100" alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="me-2 head-icon">
                                <a href="" class="text-decoration-none d-inline-block">
                                    <div class="bg-292929 icon-bg d-flex align-items-center justify-content-center position-relative rounded-pill">
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/user-icon.svg" class="w-100" alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="me-2 head-icon">
                                <a href="" class="text-decoration-none d-inline-block">
                                    <div class="bg-292929 icon-bg d-flex align-items-center justify-content-center position-relative rounded-pill">
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/like-icon.svg" class="w-100" alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="me-2 head-cart">
                                <a href="" class="text-decoration-none d-inline-block">
                                    <div class="bg-292929 icon-bg d-flex align-items-center justify-content-center position-relative rounded-pill">
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/cart-icon.svg" class="w-100" alt="">
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <ul class="res-logo-nav mb-0 ps-0 list-none d-inline-flex align-items-center"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>