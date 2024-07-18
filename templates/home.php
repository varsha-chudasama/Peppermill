<?php
/*
 * Template Name: Home
 */
?>


<main>
    <!-- hero-section -->
    <section class="hero-section position-relative w-100">
        <div class="home-hero-img h-100 position-relative">
            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/home-hero.png"
                class="w-100 h-100 object-cover" alt="">
            <div class="layer position-absolute top-0 start-0 bg-black opacity29 h-100 w-100"></div>
        </div>
        <div class="position-absolute top-center start-0 w-100 text-center hero-content">
            <div class="container w-100">
                <div class="col-8 mx-auto">
                    <div class="mont-semibold font11 leading20 space1_65 text-uppercase text-white dmb-30">WELCOME TO
                        PEPPERMILL</div>
                    <div class="bodoni font75 leading90 text-white dmb-35">Spice up the ordinary.</div>
                    <div class="mont-medium font14 leading20 text-white dmb-25">The UK’s finest selection of domestic,
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
            <div class="col-7 px-5 mx-auto text-center">
                <div class="content-title bodoni font40 leading48 dmb-25">The ultimate homemaker.</div>
                <div class="content-desc mont-normal font13 leading24">Over 20 years
                    in the
                    business has given us great insight into what our customers want and need. With customer
                    satisfaction as our top priority, we source furniture, cutting out the middle man and therefore
                    reducing the price for our clients.</div>
            </div>
        </div>
    </section>

    <div class="spacing dmb-60"></div>

    <!-- three-card-section -->
    <section class="three-card-section">
        <div class="container">
            <div class="row row10">
                <div class="col-4 cards-col dmt-20">
                    <a href=""
                        class="the-ultimate-card d-inline-block text-decoration-none card-hover radius10 overflow-hidden position-relative w-100">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-1.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div class="layer position-absolute top-0 start-0 h-100 w-100 opacity23 bg-black"></div>
                        <div class="position-absolute top-center text-center w-100 px-5">
                            <div class="bodoni font35 leading35 text-capitalize text-white dmb-30">New In</div>
                            <button
                                class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 d-inline-flex align-items-center justify-content-center transition">
                                SHOP NOW
                            </button>
                        </div>
                    </a>
                </div>
                <div class="col-4 cards-col dmt-20">
                    <a href=""
                        class="the-ultimate-card d-inline-block text-decoration-none card-hover radius10 overflow-hidden position-relative w-100">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-2.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div class="layer position-absolute top-0 start-0 h-100 w-100 opacity23 bg-black"></div>
                        <div class="position-absolute top-center text-center w-100 px-5">
                            <div class="bodoni font35 leading35 text-capitalize text-white dmb-30">New In</div>
                            <button
                                class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 d-inline-flex align-items-center justify-content-center transition">
                                SHOP NOW
                            </button>
                        </div>
                    </a>
                </div>
                <div class="col-4 cards-col dmt-20">
                    <a href=""
                        class="the-ultimate-card d-inline-block text-decoration-none card-hover radius10 overflow-hidden position-relative w-100">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-3.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div class="layer position-absolute top-0 start-0 h-100 w-100 opacity23 bg-black"></div>
                        <div class="position-absolute top-center text-center w-100 px-5">
                            <div class="bodoni font35 leading35 text-capitalize text-white dmb-30">New In</div>
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

    <div class="spacing dmb-95"></div>

    <!-- product-section -->
    <section class="product-section">
        <div class="container">
            <div class="row align-items-center dmb-60">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="bodoni font40 leading48 text-black text-center">Trending products</div>
                </div>
                <div class="col-3 d-inline-flex align-items-center justify-content-end">
                    <div class="slick-arrows d-flex">
                        <div
                            class="prev-arrow ms-2 d-flex align-items-center justify-content-center bg-transparent rounded-pill transition">
                            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/prev-arrow-2.svg"
                                class="room-prev-arrow" alt="">
                        </div>
                        <div
                            class="next-arrow ms-2 d-flex align-items-center justify-content-center bg-transparent rounded-pill transition">
                            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/next-arrow-2.svg"
                                class="room-next-arrow" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-slider">
                <a href="" class="product-cards d-inline-block text-decoration-none">
                    <div class="product-img position-relative radius10 overflow-hidden card-hover dmb-25">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-1.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div
                            class="mont-medium font13 leading20 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 mt-3 ms-4">
                            New in</div>
                        <div class="like-img position-absolute bottom-0 end-0 me-3 mb-2 z-3">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/like.svg" class="w-100"
                                alt="">
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="mont-medium font16 leading20 text-black dpb-10">Gardena Sheepskin Armchair</div>
                        <div class="mont-medium font13 leading20 text-7D7D7D">£995.00</div>
                    </div>
                </a>
                <a href="" class="product-cards d-inline-block text-decoration-none">
                    <div class="product-img position-relative radius10 overflow-hidden card-hover dmb-25">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-2.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div
                            class="mont-medium font13 leading20 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 mt-3 ms-4">
                            New in</div>
                        <div class="like-img position-absolute bottom-0 end-0 me-3 mb-2 z-3">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/like.svg" class="w-100"
                                alt="">
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="mont-medium font16 leading20 text-black dpb-10">Gardena Sheepskin Armchair</div>
                        <div class="mont-medium font13 leading20 text-7D7D7D">£995.00</div>
                    </div>
                </a>
                <a href="" class="product-cards d-inline-block text-decoration-none">
                    <div class="product-img position-relative radius10 overflow-hidden card-hover dmb-25">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-3.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div
                            class="mont-medium font13 leading20 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 mt-3 ms-4">
                            New in</div>
                        <div class="like-img position-absolute bottom-0 end-0 me-3 mb-2 z-3">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/like.svg" class="w-100"
                                alt="">
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="mont-medium font16 leading20 text-black dpb-10">Gardena Sheepskin Armchair</div>
                        <div class="mont-medium font13 leading20 text-7D7D7D">£995.00</div>
                    </div>
                </a>
                <a href="" class="product-cards d-inline-block text-decoration-none">
                    <div class="product-img position-relative radius10 overflow-hidden card-hover dmb-25">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-4.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div
                            class="mont-medium font13 leading20 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 mt-3 ms-4">
                            New in</div>
                        <div class="like-img position-absolute bottom-0 end-0 me-3 mb-2 z-3">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/like.svg" class="w-100"
                                alt="">
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="mont-medium font16 leading20 text-black dpb-10">Gardena Sheepskin Armchair</div>
                        <div class="mont-medium font13 leading20 text-7D7D7D">£995.00</div>
                    </div>
                </a>
                <a href="" class="product-cards d-inline-block text-decoration-none">
                    <div class="product-img position-relative radius10 overflow-hidden card-hover dmb-25">
                        <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/product-5.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div
                            class="mont-medium font13 leading20 text-292929 bg-white radius5 position-absolute top-0 start-0 py-1 px-2 mt-3 ms-4">
                            New in</div>
                        <div class="like-img position-absolute bottom-0 end-0 me-3 mb-2 z-3">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/like.svg" class="w-100"
                                alt="">
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="mont-medium font16 leading20 text-black dpb-10">Gardena Sheepskin Armchair</div>
                        <div class="mont-medium font13 leading20 text-7D7D7D">£995.00</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <div class="spacing dmb-80"></div>

    <!-- room-card-section -->
    <section class="room-card-section bg-292929 dpt-80 dpb-70">
        <div class="container">
            <div class="bodoni font45 leading55 text-capitalize text-white text-center dpb-50">Shop By Room</div>
            <div class="room-card-slider">
                <a href=""
                    class="room-cards d-inline-block text-decoration-none card-hover overflow-hidden radius10 position-relative">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-3.png"
                        class="h-100 w-100 object-cover img" alt="">
                    <div class="position-absolute top-0 start-0 h-100 w-100 bg-black opacity23"></div>
                    <div class="position-absolute w-100 bottom-0 px-5">
                        <div class="bodoni font40 leading48 text-white dpb-20">Bedroom</div>
                        <div
                            class="mont-medium font13 leading20 text-white text-capitalize text-decoration-underline dpb-55">
                            Shop Collection</div>
                    </div>
                </a>
                <a href=""
                    class="room-cards d-inline-block text-decoration-none card-hover overflow-hidden radius10 position-relative">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-1.png"
                        class="h-100 w-100 object-cover img" alt="">
                    <div class="position-absolute top-0 start-0 h-100 w-100 bg-black opacity23"></div>
                    <div class="position-absolute w-100 bottom-0 px-5">
                        <div class="bodoni font40 leading48 text-white dpb-20">Bedroom</div>
                        <div
                            class="mont-medium font13 leading20 text-white text-capitalize text-decoration-underline dpb-55">
                            Shop Collection</div>
                    </div>
                </a>
                <a href=""
                    class="room-cards d-inline-block text-decoration-none card-hover overflow-hidden radius10 position-relative">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-2.png"
                        class="h-100 w-100 object-cover img" alt="">
                    <div class="position-absolute top-0 start-0 h-100 w-100 bg-black opacity23"></div>
                    <div class="position-absolute w-100 bottom-0 px-5">
                        <div class="bodoni font40 leading48 text-white dpb-20">Bedroom</div>
                        <div
                            class="mont-medium font13 leading20 text-white text-capitalize text-decoration-underline dpb-55">
                            Shop Collection</div>
                    </div>
                </a>
                <a href=""
                    class="room-cards d-inline-block text-decoration-none card-hover overflow-hidden radius10 position-relative">
                    <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/three-card-1.png"
                        class="h-100 w-100 object-cover img" alt="">
                    <div class="position-absolute top-0 start-0 h-100 w-100 bg-black opacity23"></div>
                    <div class="position-absolute w-100 bottom-0 px-5">
                        <div class="bodoni font40 leading48 text-white dpb-20">Bedroom</div>
                        <div
                            class="mont-medium font13 leading20 text-white text-capitalize text-decoration-underline dpb-55">
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
                <div class="col-8">
                    <div class="bodoni font60 leading70 text-capitalize text-white dmb-10">Our Showroom</div>
                    <div class="mont-medium font14 leading20 text-white dmb-35">The UK’s finest selection of domestic,
                        bar and restaurant furniture</div>
                    <a href=""
                        class="text-decoration-none btnA white-border-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 d-inline-flex align-items-center justify-content-center transition">
                        LEARN MORE
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="dmb-95 "></div>

    <!-- project-card-section -->
    <section class="project-card-section">
        <div class="container">
            <div class="row dmb-55">
                <div class="col-3"></div>
                <div class="col-6 text-center">
                    <div class="bodoni font50 leading55 text-black text-capitalize">Our Projects</div>
                    <a href="" class="montserrat-medium font13 leading20 text-black dmt-10">Get in touch</a>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-end align-items-center h-100">
                        <a href="#enquiryModalToggle" data-bs-toggle="modal"
                            class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                            VIEW ALL
                        </a>
                    </div>
                </div>
            </div>
            <div class="row row10">
                <div class="col-4 cards-col dmt-50">
                    <a href=""
                        class="project-cards text-decoration-none d-inline-block position-relative card-hover radius10 overflow-hidden w-100">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/project-1.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div class="position-absolute bottom-0 text-center w-100 px-5">
                            <div class="bodoni font40 leading48 space1_65 text-white dpb-20">Whitemills Kitchen &
                                Bar</div>
                            <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">KENT</div>
                        </div>
                    </a>
                </div>
                <div class="col-4 cards-col dmt-50">
                    <a href=""
                        class="project-cards text-decoration-none d-inline-block position-relative card-hover radius10 overflow-hidden">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/project-2.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div class="position-absolute bottom-0 text-center w-100 px-5">
                            <div class="bodoni font40 leading48 space1_65 text-white dpb-20">BrewDog</div>
                            <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">LAS VEGAS
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 cards-col dmt-50">
                    <a href=""
                        class="project-cards text-decoration-none d-inline-block position-relative card-hover radius10 overflow-hidden">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/project-3.png"
                            class="w-100 h-100 object-cover img" alt="">
                        <div class="position-absolute bottom-0 text-center w-100 px-5">
                            <div class="bodoni font40 leading48 space1_65 text-white dpb-20">Libertine Burger</div>
                            <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">LEAMINGTON
                                SPA</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="modal enquiry-modal fade" data-bs-backdrop="static" id="enquiryModalToggle" aria-hidden="true"
            aria-labelledby="enquiryModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content position-relative border-0 radius5">
                    <div class="close-div position-absolute top-0 end-0">
                        <button type="button" class="btn-close p-0 close-round" data-bs-dismiss="modal"
                            aria-label="Close">
                            <img src="" alt="">
                        </button>
                    </div>
                    <div class="col-12 text-center">
                        <div class="mont-medium font11 leading20 text-918E8E dmb-15">Enquire for</div>
                        <div class="bodoni font40 leading48 text-black dmb-30 text-capitalize">Sales Manager</div>
                        <form class="enquiry-form">
                            <div class="dmb-20">
                                <input type="text" class="w-100 bg-white enquiry-modal-input px-3 py-2 radius5 "
                                    placeholder="Name…">
                                <input type="email" class="w-100 bg-white enquiry-modal-input px-3 py-2 radius5 "
                                    placeholder="Email…">
                                <input type="number" class="w-100 bg-white enquiry-modal-input px-3 py-2 radius5 "
                                    placeholder="Number…">
                            </div>
                            <div class="upload-cv bg-white text-center dmb-20 tmb-45 radius5">
                                <label for="uploadFile"
                                    class="w-100 d-flex align-items-center justify-content-center h-100 mont-medium font11 leading20 text-918E8E">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" width="18"
                                        height="18" class="me-2">
                                        <title>New Project</title>
                                        <defs>
                                            <image width="36" height="36" id="img1"
                                                href="data:image/
                                             png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAMAAADW3miqAAAAAXNSR0IB2cksfwAAALRQTFRFAAAAd3d3LCwsDAwMCAgIKCgoa
                                             Ghoz8/
                                             PfHx8BAQEAAAAZGRkVFRUPDw8Z2dnJCQks7Ozw8PDMzMz09PTc3Nzt7e3KysrGBgYGxsba2tro6OjNzc3i4uLg4ODy8vLXFxcEBAQk5OTdHR0b29v
                                             FBQULy8vOzs7v7+/q6urf39/e3t7ICAgx8fHj4+PY2Nju7u7W1tbSEhIv7+/QEBAT09Pkr/0V1dXaZbLx8fHJycnra2t////9iiFigAAADx0Uk5TAP///////
                                             wr//////////89A/wL/pP//////////F///////////Xf////8o//99//8X//8A/wAC/
                                             wAATNPgPQAAAR9JREFUeJyN1HlXgzAMAPA4WrX1mBs68BzI5hyweeK17/+9TB7oGuxh/iEpv0dDyQPAFTuDSMjdPed9jH2l2zhwm0P9G0f/
                                             MFofe8zwBGA0xkTFTiPbnNRpwMAZ5pOAAcAiCRlCad+cp9xcYHlp6Sm+MooE0bUFmSHRRHzpZprREefM6JyZ258zlqYpmDG+xcxv0rmgy53HyAV
                                             mBfY68pg2LwLmXiz9PZNRWpVYLyrPXkNKokGiff3U0fYY3D3XVUfUkpmSz8aKZnG27o2s4rNhjaJnctvYTxA9bEs6n+rPAOGi4Kb3Xh3KQgZopuOAgU
                                             dcfwoYeKY7LzV+t8RpAF7Nn4PDAMz9pmkaurx1RKxsz3hvEXysP0U2Lu0bfW0236i5Gyu4EJH/AAAAAElFTkSuQmCC" />
                                        </defs>
                                        <style>
                                        </style>
                                        <use id="Layer 1" href="#img1" x="0" y="0" />
                                    </svg>
                                    Click to upload or drag CV & Cover letter here
                                </label>
                            </div>
                            <button type="submit"
                                class="text-decoration-none d-inline-flex submit-btn border-0 radius5 bg-292929 text-white text-uppercase tracking-wide mont-semibold font11 leading20 space0_28 align-items-center">
                                SUBMIT ENQUIRY
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="dmb-165"></div>

    <!-- blog-card-section -->
    <section class="blog-card-section">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center dmb-25">
                <div class="bodoni font40 leading48 text-black text-capitalize">Latest News</div>
                <a href=""
                    class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                    VIEW ALL
                </a>
            </div>
            <div class="row row15">
                <div class="col-4 cards-col dmt-30">
                    <a href="" class="blog-cards w-100 d-inline-block text-decoration-none">
                        <div class="blog-card-img w-100 position-relative radius10 overflow-hidden card-hover dmb-25">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/blog-1.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="bodoni font24 leading30 text-black dmb-30">Advantages of bespoke furniture</div>
                            <div class="mont-normal font13 leading20 text-black dmb-20 pe-4">Far more cost-effective
                                than you think, bespoke furniture has lots of unique advantages. Tailored to your space
                                and style preferences, it does more than simply add a personal touch to your design
                                scheme.</div>
                            <a href="" class="mont-medium font13 leading20 text-black">Read more</a>
                        </div>
                    </a>
                </div>
                <div class="col-4 cards-col dmt-30">
                    <a href="" class="blog-cards w-100 d-inline-block text-decoration-none">
                        <div class="blog-card-img w-100 position-relative radius10 overflow-hidden card-hover dmb-25">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/blog-2.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="bodoni font24 leading30 text-black dmb-30">Advantages of bespoke furniture</div>
                            <div class="mont-normal font13 leading20 text-black dmb-20 pe-4">Far more cost-effective
                                than you think, bespoke furniture has lots of unique advantages. Tailored to your space
                                and style preferences, it does more than simply add a personal touch to your design
                                scheme.</div>
                            <a href="" class="mont-medium font13 leading20 text-black">Read more</a>
                        </div>
                    </a>
                </div>
                <div class="col-4 cards-col dmt-30">
                    <a href="" class="blog-cards w-100 d-inline-block text-decoration-none">
                        <div class="blog-card-img w-100 position-relative radius10 overflow-hidden card-hover dmb-25">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/blog-3.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="bodoni font24 leading30 text-black dmb-30">Advantages of bespoke furniture</div>
                            <div class="mont-normal font13 leading20 text-black dmb-20 pe-4">Far more cost-effective
                                than you think, bespoke furniture has lots of unique advantages. Tailored to your space
                                and style preferences, it does more than simply add a personal touch to your design
                                scheme.</div>
                            <a href="" class="mont-medium font13 leading20 text-black">Read more</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="dmb-100"></div>
</main>