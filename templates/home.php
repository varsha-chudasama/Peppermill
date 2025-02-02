<?php
/*
 * Template Name: Home
 */
?>


<main>
    <!-- hero-section -->
    <section class="hero-section position-relative w-100">
            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/home-hero.png"
                class="w-100 h-100 object-cover" alt="">
            <div class="layer position-absolute top-0 start-0 bg-black opacity29 h-100 w-100"></div>
        <div class="position-absolute top-center start-0 w-100 text-center hero-content">
            <div class="container w-100">
                <div class="col-lg-8 col-12 mx-auto">
                    <div class="mont-semibold font11 leading20 space1_65 text-uppercase text-white dmb-30 tmb-15">WELCOME TO
                        PEPPERMILL</div>
                    <div class="bodoni font75 res-font55 leading90 res-leading60 text-white dmb-35 tmb-15">Spice up the ordinary.</div>
                    <div class="mont-medium font14 res-font13 leading20 text-white dmb-25">The UK’s finest selection of domestic,
                        bar and restaurant furniture</div>
                    <a href=""
                        class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 d-inline-flex align-items-center justify-content-center transition">
                        SHOP NOW
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="spacing dmb-60"></div>

    <!-- center-content-section -->
    <section class="center-content-section">
        <div class="container">
            <div class="col-12 col-md-8 col-lg-7 px-lg-4 px-xl-5 mx-auto text-center">
                <div class="content-title bodoni font40 leading48 res-font30 res-leading35 tmb-15 dmb-25">The ultimate homemaker.</div>
                <div class="content-desc mont-normal font13 leading24">Over 20 years
                    in the
                    business has given us great insight into what our customers want and need. With customer
                    satisfaction as our top priority, we source furniture, cutting out the middle man and therefore
                    reducing the price for our clients.</div>
            </div>
        </div>
    </section>

    <div class="spacing tmb-35 dmb-60"></div>

    <!-- three-card-section -->
    <section class="three-card-section">
        <div class="container">
            <div class="row row10">
                <div class="col-lg-4 col-12 cards-col dmt-20">
                    <a href=""
                        class="the-ultimate-card d-inline-block text-decoration-none card-hover radius10 overflow-hidden position-relative w-100">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-1.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div class="layer position-absolute top-0 start-0 h-100 w-100 opacity23 bg-black"></div>
                        <div class="position-absolute top-center text-center w-100 px-5">
                            <div class="bodoni font35 res-font28 leading35 res-leading30 text-capitalize text-white dmb-30 tmb-10">New In</div>
                            <button
                                class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 d-inline-flex align-items-center justify-content-center transition">
                                SHOP NOW
                            </button>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-12 cards-col dmt-20">
                    <a href=""
                        class="the-ultimate-card d-inline-block text-decoration-none card-hover radius10 overflow-hidden position-relative w-100">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-2.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div class="layer position-absolute top-0 start-0 h-100 w-100 opacity23 bg-black"></div>
                        <div class="position-absolute top-center text-center w-100 px-5">
                            <div class="bodoni font35 res-font28 leading35 res-leading30 text-capitalize text-white dmb-30 tmb-10">New In</div>
                            <button
                                class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 d-inline-flex align-items-center justify-content-center transition">
                                SHOP NOW
                            </button>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-12 cards-col dmt-20">
                    <a href=""
                        class="the-ultimate-card d-inline-block text-decoration-none card-hover radius10 overflow-hidden position-relative w-100">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-3.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div class="layer position-absolute top-0 start-0 h-100 w-100 opacity23 bg-black"></div>
                        <div class="position-absolute top-center text-center w-100 px-5">
                            <div class="bodoni font35 res-font28 leading35 res-leading30 text-capitalize text-white dmb-30 tmb-10">New In</div>
                            <button
                                class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 d-inline-flex align-items-center justify-content-center transition">
                                SHOP NOW
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="spacing dmb-95 tmb-60"></div>

    <!-- product-section -->
    <section class="product-section overflow-hidden">
        <div class="container">
            <div class="row align-items-center dmb-60 tmb-45">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-9">
                    <div class="bodoni font40 res-font30 leading48 res-leading35 text-black text-center">Trending products</div>
                </div>
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
                <a href="" class="product-cards d-inline-block text-decoration-none">
                    <div class="product-img position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-20">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-1.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div
                            class="mont-medium font13 res-font11 leading20 res-leading16 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 mt-3 ms-4">
                            New in</div>
                        <div class="like-img position-absolute bottom-0 end-0 me-4 mb-3 z-3">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/black-like-icon.svg"
                                class="w-100" alt="">
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="mont-medium font16 res-font14 leading20 text-black dpb-10">Gardena Sheepskin Armchair</div>
                        <div class="mont-medium font13 res-font11 leading20 text-7D7D7D">£995.00</div>
                    </div>
                </a>
                <a href="" class="product-cards d-inline-block text-decoration-none">
                    <div class="product-img position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-20">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-2.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div
                            class="mont-medium font13 res-font11 leading20 res-leading16 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 mt-3 ms-4">
                            New in</div>
                        <div class="like-img position-absolute bottom-0 end-0 me-4 mb-3 z-3">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/black-like-icon.svg"
                                class="w-100" alt="">
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="mont-medium font16 res-font14 leading20 text-black dpb-10">Gardena Sheepskin Armchair</div>
                        <div class="mont-medium font13 res-font11 leading20 text-7D7D7D">£995.00</div>
                    </div>
                </a>
                <a href="" class="product-cards d-inline-block text-decoration-none">
                    <div class="product-img position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-20">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-3.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div
                            class="mont-medium font13 res-font11 leading20 res-leading16 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 mt-3 ms-4">
                            New in</div>
                        <div class="like-img position-absolute bottom-0 end-0 me-4 mb-3 z-3">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/black-like-icon.svg"
                                class="w-100" alt="">
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="mont-medium font16 res-font14 leading20 text-black dpb-10">Gardena Sheepskin Armchair</div>
                        <div class="mont-medium font13 res-font11 leading20 text-7D7D7D">£995.00</div>
                    </div>
                </a>
                <a href="" class="product-cards d-inline-block text-decoration-none">
                    <div class="product-img position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-20">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-4.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div
                            class="mont-medium font13 res-font11 leading20 res-leading16 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 mt-3 ms-4">
                            New in</div>
                        <div class="like-img position-absolute bottom-0 end-0 me-4 mb-3 z-3">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/black-like-icon.svg"
                                class="w-100" alt="">
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="mont-medium font16 res-font14 leading20 text-black dpb-10">Gardena Sheepskin Armchair</div>
                        <div class="mont-medium font13 res-font11 leading20 text-7D7D7D">£995.00</div>
                    </div>
                </a>
                <a href="" class="product-cards d-inline-block text-decoration-none">
                    <div class="product-img position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-20">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-5.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div
                            class="mont-medium font13 res-font11 leading20 res-leading16 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 mt-3 ms-4">
                            New in</div>
                        <div class="like-img position-absolute bottom-0 end-0 me-4 mb-3 z-3">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/black-like-icon.svg"
                                class="w-100" alt="">
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="mont-medium font16 res-font14 leading20 text-black dpb-10">Gardena Sheepskin Armchair</div>
                        <div class="mont-medium font13 res-font11 leading20 text-7D7D7D">£995.00</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <div class="spacing dmb-80 tmb-60"></div>

    <!-- room-card-section -->
    <section class="room-card-section bg-292929 dpt-80 tpt-50 dpb-70 tpb-60 overflow-hidden">
        <div class="container">
            <div class="row align-items-center dmb-60 tmb-35">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-9">
                    <div class="bodoni font45 res-font32 leading55 res-leading45 text-capitalize text-white text-center">Shop By Room
                    </div>
                </div>
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
                <a href=""
                    class="room-cards d-inline-block text-decoration-none card-hover overflow-hidden radius10 res-radius5 position-relative">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-3.png"
                        class="h-100 w-100 object-cover img" alt="">
                    <div class="position-absolute top-0 start-0 h-100 w-100 bg-black opacity23"></div>
                    <div class="position-absolute w-100 bottom-0 px-lg-5 px-4">
                        <div class="bodoni font40 res-font30 leading48 res-leading35 text-white dpb-20 tpb-10">Bedroom</div>
                        <div
                            class="mont-medium font13 res-font11 leading20 text-white text-capitalize text-decoration-underline dpb-55 tpb-40">
                            Shop Collection</div>
                    </div>
                </a>
                <a href=""
                    class="room-cards d-inline-block text-decoration-none card-hover overflow-hidden radius10 res-radius5 position-relative">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-1.png"
                        class="h-100 w-100 object-cover img" alt="">
                    <div class="position-absolute top-0 start-0 h-100 w-100 bg-black opacity23"></div>
                    <div class="position-absolute w-100 bottom-0 px-lg-5 px-4">
                        <div class="bodoni font40 res-font30 leading48 res-leading35 text-white dpb-20 tpb-10">Bedroom</div>
                        <div
                            class="mont-medium font13 res-font11 leading20 text-white text-capitalize text-decoration-underline dpb-55 tpb-40">
                            Shop Collection</div>
                    </div>
                </a>
                <a href=""
                    class="room-cards d-inline-block text-decoration-none card-hover overflow-hidden radius10 res-radius5 position-relative">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-2.png"
                        class="h-100 w-100 object-cover img" alt="">
                    <div class="position-absolute top-0 start-0 h-100 w-100 bg-black opacity23"></div>
                    <div class="position-absolute w-100 bottom-0 px-lg-5 px-4">
                        <div class="bodoni font40 res-font30 leading48 res-leading35 text-white dpb-20 tpb-10">Bedroom</div>
                        <div
                            class="mont-medium font13 res-font11 leading20 text-white text-capitalize text-decoration-underline dpb-55 tpb-40">
                            Shop Collection</div>
                    </div>
                </a>
                <a href=""
                    class="room-cards d-inline-block text-decoration-none card-hover overflow-hidden radius10 res-radius5 position-relative">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-1.png"
                        class="h-100 w-100 object-cover img" alt="">
                    <div class="position-absolute top-0 start-0 h-100 w-100 bg-black opacity23"></div>
                    <div class="position-absolute w-100 bottom-0 px-lg-5 px-4">
                        <div class="bodoni font40 res-font30 leading48 res-leading35 text-white dpb-20 tpb-10">Bedroom</div>
                        <div
                            class="mont-medium font13 res-font11 leading20 text-white text-capitalize text-decoration-underline dpb-55 tpb-40">
                            Shop Collection</div>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <!-- banner-section -->
    <section class="banner-section position-relative">
        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/home-hero.png" alt=""
            class="h-100 w-100 object-cover">
        <div class="bg-gradient-layer position-absolute w-100 h-100 top-0 opacity29"></div>
        <div class="position-absolute top-center start-0 w-100">
            <div class="container w-100">
                <div class="col-lg-8 col-12 ms-lg-5 ps-lg-5">
                    <div class="bodoni font60 res-font40 leading70 res-leading48 text-capitalize text-white dmb-10">Our Showroom</div>
                    <div class="mont-medium font14 leading20 text-white dmb-35 tmb-20">The UK’s finest selection of domestic,
                        bar and restaurant furniture</div>
                    <a href=""
                        class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 d-inline-flex align-items-center justify-content-center transition">
                        LEARN MORE
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- right-img-section -->
    <section class="right-img-section left-right-292929">
        <div class="container px-p-0">
            <div class="row align-items-center">
                <div class="col-lg-6 px-p-p">
                    <div class="col-lg-9 col-12 px-lg-4 mx-auto">
                        <div class="left-right-prefix mont-normal font11 leading20 space1_65 text-uppercase dmb-35 tmb-15">
                            OUR HISTORY
                        </div>
                        <div class="left-right-title bodoni font55 res-font40 leading65 res-leading45 dmb-35 tmb-20">
                            Over 20 years in the business.
                        </div>
                        <div class="dmb-40">
                            <div class="left-right-desc mont-normal font13 leading24 dmb-20">
                                We are based in Burntwood, Staffordshire (around a 40 minute drive from Birmingham), and
                                if
                                you fancy a browse our showroom is open to the public Monday to Saturday. If you can’t
                                make
                                it into store, don’t worry, you can place your order online or over the phone and we
                                ship
                                all over the world.
                            </div>
                            <div class="left-right-desc mont-normal font13 leading24 dmb-20">
                                Over 20 years in the business has given us great insight into what our
                                customers want and need. With customer satisfaction as our top priority, we source
                                furniture, cutting out the middle man and therefore reducing the price for our clients.
                            </div>
                        </div>
                        <a href=""
                            class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                            SHOP NOW
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-3 tmt-45">
                    <div class="left-right-img radius10 overflow-hidden card-hover res-radius-0">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/left-right-1.png" alt=""
                            class="w-100 h-100 object-cover img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="spacing dmb-95 tmb-70"></div>


    <!-- project-card-section -->
    <section class="project-card-section">
        <div class="container px-p-0">
            <div class="row dmb-55 tmb-40 px-p-p">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-12 text-center">
                    <div class="bodoni font50 res-font40 leading55 res-leading48 text-black text-capitalize dmb-10">Our Projects</div>
                    <a href="" class="montserrat-medium font13 leading20 text-black">Get in touch</a>
                </div>
                <div class="col-lg-3">
                    <div class="d-lg-flex d-none justify-content-end align-items-center h-100">
                        <a href=""
                            class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                            VIEW ALL
                        </a>
                    </div>
                </div>
            </div>
            <div class="row row10 mx-m-0">
                <div class="col-lg-4 col-12 cards-col dmt-50 px-p-0">
                    <a href=""
                        class="project-cards text-decoration-none d-inline-block position-relative card-hover radius10 res-radius-0 overflow-hidden w-100">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/project-1.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div class="position-absolute bottom-0 text-center w-100 px-lg-5 px-2">
                            <div class="bodoni font40 res-font30 leading48 res-leading35 space1_65 text-white dpb-20">Whitemills Kitchen &
                                Bar</div>
                            <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">KENT</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-12 cards-col dmt-50 px-p-0">
                    <a href=""
                        class="project-cards text-decoration-none d-inline-block position-relative card-hover radius10 res-radius-0 overflow-hidden w-100">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/project-2.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div class="position-absolute bottom-0 text-center w-100 px-lg-5 px-2">
                            <div class="bodoni font40 res-font30 leading48 res-leading35 space1_65 text-white dpb-20">BrewDog</div>
                            <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">LAS VEGAS
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-12 cards-col dmt-50 px-p-0">
                    <a href=""
                        class="project-cards text-decoration-none d-inline-block position-relative card-hover radius10 res-radius-0 overflow-hidden w-100">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/project-3.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div class="position-absolute bottom-0 text-center w-100 px-lg-5 px-2">
                            <div class="bodoni font40 res-font30 leading48 res-leading35 space1_65 text-white dpb-20">Libertine Burger</div>
                            <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">LEAMINGTON
                                SPA</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center h-100 d-lg-none tmt-45">
                        <a href=""
                            class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                            VIEW ALL
                        </a>
                    </div>
        </div>
    </section>

    <div class="dmb-165 tmb-75"></div>

    <!-- blog-card-section -->
    <section class="blog-card-section overflow-hidden">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center dmb-25 tmb-30">
                <div class="bodoni font40 res-font30 leading48 res-leading35 text-black text-capitalize">Latest News</div>
                <a href=""
                    class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-lg-inline-flex align-items-center justify-content-center d-none">
                    VIEW ALL
                </a> 
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
                <div>
                    <a href="" class="blog-cards w-100 d-inline-block text-decoration-none">
                        <div class="blog-card-img w-100 position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-15">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/blog-1.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="bodoni font24 res-font18 leading30 res-leading20 text-black dmb-30 tmb-10">Advantages of bespoke furniture</div>
                            <div class="mont-normal font13 leading20 text-black dmb-20 tmb-10 pe-4">Far more cost-effective
                                than you think, bespoke furniture has lots of unique advantages. Tailored to your space
                                and style preferences, it does more than simply add a personal touch to your design
                                scheme.</div>
                            <a href="" class="mont-medium font13 leading20 text-black">Read more</a>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="" class="blog-cards w-100 d-inline-block text-decoration-none">
                        <div class="blog-card-img w-100 position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-15">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/blog-2.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="bodoni font24 res-font18 leading30 res-leading20 text-black dmb-30 tmb-10">Advantages of bespoke furniture</div>
                            <div class="mont-normal font13 leading20 text-black dmb-20 tmb-10 pe-4">Far more cost-effective
                                than you think, bespoke furniture has lots of unique advantages. Tailored to your space
                                and style preferences, it does more than simply add a personal touch to your design
                                scheme.</div>
                            <a href="" class="mont-medium font13 leading20 text-black">Read more</a>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="" class="blog-cards w-100 d-inline-block text-decoration-none">
                        <div class="blog-card-img w-100 position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-15">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/blog-3.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="bodoni font24 res-font18 leading30 res-leading20 text-black dmb-30 tmb-10">Advantages of bespoke furniture</div>
                            <div class="mont-normal font13 leading20 text-black dmb-20 tmb-10 pe-4">Far more cost-effective
                                than you think, bespoke furniture has lots of unique advantages. Tailored to your space
                                and style preferences, it does more than simply add a personal touch to your design
                                scheme.</div>
                            <a href="" class="mont-medium font13 leading20 text-black">Read more</a>
                        </div>
                    </a>
                </div>   
                <div>
                    <a href="" class="blog-cards w-100 d-inline-block text-decoration-none">
                        <div class="blog-card-img w-100 position-relative radius10 res-radius5 overflow-hidden card-hover dmb-25 tmb-15">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/blog-3.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="bodoni font24 res-font18 leading30 res-leading20 text-black dmb-30 tmb-10">Advantages of bespoke furniture</div>
                            <div class="mont-normal font13 leading20 text-black dmb-20 tmb-10 pe-4">Far more cost-effective
                                than you think, bespoke furniture has lots of unique advantages. Tailored to your space
                                and style preferences, it does more than simply add a personal touch to your design
                                scheme.</div>
                            <a href="" class="mont-medium font13 leading20 text-black">Read more</a>
                        </div>
                    </a>
                </div>   
            </div>
           <div class="d-flex justify-content-center tmt-60">
           <a href=""
                    class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center d-lg-none">
                    VIEW ALL
            </a> 
           </div>
        </div>
    </section>

    <div class="dmb-100 tmb-60"></div>
</main>