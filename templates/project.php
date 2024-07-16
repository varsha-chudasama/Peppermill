<?php
/*
 * Template Name: project
 */
?>

<main>

    <div class="spacing dmt-200"></div>

    <!-- center-content-section -->
    <section class="center-content-section">
        <div class="container">
            <div class="col-7 px-5 mx-auto text-center">
                <div class="content-title bodoni font40 leading48 dmb-25">Projects</div>
                <div class="content-desc mont-normal font13 leading24">
                    Peppermill Interiors has extensive
                    experience in supplying restaurant furniture, bar furniture and pub furniture to leading shops and
                    eateries all over the world.
                </div>
            </div>
        </div>
    </section>

    <div class="spacing dmt-55"></div>

    <!-- product-filter -->
    <section class="product-filter">
        <div class="container">
            <div class="row">
                <div class="project-dropdown position-relative">
                    <div class="project-toggle mont-medium font13 leading24 border border-707070 d-inline-flex align-items-center rounded-pill dmb-10"
                        type="button" id="projectMenuButton" data-toggle="project" aria-haspopup="true"
                        aria-expanded="false">
                        Filters
                    </div>
                    <div class="project-menu position-absolute radius10 flex-column z-3 p-3"
                        aria-labelledby="projectMenuButton">
                        <a class="project-item text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10 active"
                            data-filter="all">View All</a>
                        <a class="project-item text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
                            data-filter="kent">Kent
                            action</a>
                        <a class="project-item text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
                            data-filter="las-vegas">Las Vegas</a>
                        <a class="project-item text-decoration-none mont-medium font13 leading24 text-white position-relative dmb-10"
                            data-filter="spa">Leamington spa</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="spacing dmt-55"></div>

    <!-- project-card-section -->
    <section class="project-card-section">
        <div class="container">
            <div class="row row10">
                <div class="col-4 project-col dmb-50 filter-activity all kent">
                    <a href="" class="text-decoration-none d-inline-block position-relative card-hover">
                        <div class="project-card-img radius10 overflow-hidden">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/our-img.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="position-absolute bottom-0 text-center w-100">
                            <div class="col-10 mx-auto">
                                <div class="bodoni font40 leading48 space1_65 text-white dpb-20">Whitemills Kitchen &
                                    Bar</div>
                                <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">KENT</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 project-col dmb-50 filter-activity all las-vegas">
                    <a href="" class="text-decoration-none d-inline-block position-relative card-hover">
                        <div class="project-card-img radius10 overflow-hidden">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/our-img.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="position-absolute bottom-0 text-center w-100">
                            <div class="col-10 mx-auto">
                                <div class="bodoni font40 leading48 space1_65 text-white dpb-20">BrewDog</div>
                                <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">LAS VEGAS
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 project-col dmb-50 filter-activity all spa">
                    <a href="" class="text-decoration-none d-inline-block position-relative card-hover">
                        <div class="project-card-img radius10 overflow-hidden">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/our-img.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="position-absolute bottom-0 text-center w-100">
                            <div class="col-10 mx-auto">
                                <div class="bodoni font40 leading48 space1_65 text-white dpb-20">Libertine Burger</div>
                                <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">LEAMINGTON
                                    SPA</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 project-col dmb-50 filter-activity all kent">
                    <a href="" class="text-decoration-none d-inline-block position-relative card-hover">
                        <div class="project-card-img radius10 overflow-hidden">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/our-img.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="position-absolute bottom-0 text-center w-100">
                            <div class="col-10 mx-auto">
                                <div class="bodoni font40 leading48 space1_65 text-white dpb-20">Adlington Golf Club
                                </div>
                                <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">KENT</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 project-col dmb-50 filter-activity all las-vegas">
                    <a href="" class="text-decoration-none d-inline-block position-relative card-hover">
                        <div class="project-card-img radius10 overflow-hidden">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/our-img.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="position-absolute bottom-0 text-center w-100">
                            <div class="col-10 mx-auto">
                                <div class="bodoni font40 leading48 space1_65 text-white dpb-20">Lola’s Bar</div>
                                <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">LAS VEGAS
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 project-col dmb-50 filter-activity all spa">
                    <a href="" class="text-decoration-none d-inline-block position-relative card-hover">
                        <div class="project-card-img radius10 overflow-hidden">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/our-img.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="position-absolute bottom-0 text-center w-100">
                            <div class="col-10 mx-auto">
                                <div class="bodoni font40 leading48 space1_65 text-white dpb-20">Libertine Burger</div>
                                <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">LEAMINGTON
                                    SPA</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 project-col dmb-50 filter-activity all kent">
                    <a href="" class="text-decoration-none d-inline-block position-relative card-hover">
                        <div class="project-card-img radius10 overflow-hidden">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/our-img.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="position-absolute bottom-0 text-center w-100">
                            <div class="col-10 mx-auto">
                                <div class="bodoni font40 leading48 space1_65 text-white dpb-20">Whitemills Kitchen &
                                    Bar</div>
                                <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">KENT</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 project-col dmb-50 filter-activity all las-vegas">
                    <a href="" class="text-decoration-none d-inline-block position-relative card-hover">
                        <div class="project-card-img radius10 overflow-hidden">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/our-img.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="position-absolute bottom-0 text-center w-100">
                            <div class="col-10 mx-auto">
                                <div class="bodoni font40 leading48 space1_65 text-white dpb-20">BrewDog</div>
                                <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">LAS VEGAS
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 project-col dmb-50 filter-activity all spa">
                    <a href="" class="text-decoration-none d-inline-block position-relative card-hover">
                        <div class="project-card-img radius10 overflow-hidden">
                            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/07/our-img.png"
                                class="w-100 h-100 object-cover img" alt="">
                        </div>
                        <div class="position-absolute bottom-0 text-center w-100">
                            <div class="col-10 mx-auto">
                                <div class="bodoni font40 leading48 space1_65 text-white dpb-20">Libertine Burger</div>
                                <div class="mont-medium font11 leading16 text-white text-uppercase dpb-50">LEAMINGTON
                                    SPA</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="spacing dmb-130"></div>

    <!-- pagination-section -->
    <section class="pagination-section">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link mont-medium font13 leading24" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link mont-medium font13 leading24" href="#">1</a></li>
                <li class="page-item"><a class="page-link mont-medium font13 leading24" href="#">2</a></li>
                <li class="page-item"><a class="page-link mont-medium font13 leading24" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link mont-medium font13 leading24" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </section>

    <div class="spacing dmt-115"></div>
</main>