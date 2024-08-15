<?php
/*
 * Template Name: Order Complete
 */
?>

<main>

    <section class="order-complete-section">
        <div class="row align-items-center h-100">
            <div class="col-lg-6 col-12 text-center tpt-205 tpb-100 px-p-p">
                <div class="col-lg-8 col-12 mx-auto">
                    <div class="bodoni font40 leading48 text-black dmb-25 res-font30 res-leading35 tmb-20">Thank you for your purchase!</div>
                    <div class="mont-medium font13 leading16 text-918E8E dmb-35 tmb-30">Your order number #1234, you will receive a confirmation email shortly.</div>
                    <div class="d-flex flex-wrap align-items-center justify-content-center btn-group">
                        <a href="#care-packageModalToggle" data-bs-toggle="modal" target="" class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center mx-lg-2 mb-lg-0 mb-3 res-w-100">
                            CONTINUE TO HOMEPAGE
                        </a>
                        <a href="#" target="" class="text-decoration-none btnA border-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center mx-lg-2 mb-lg-0 mb-3 res-w-100">
                            VIEW MY ORDER
                        </a>
                        <a href="#basket1" data-bs-toggle="offcanvas" aria-controls="offcanvasRight"
                        class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center mx-lg-2 mb-lg-0 mb-3 res-w-100">
                            basket1
                        </a>
                        <a href="#basket2" data-bs-toggle="offcanvas" aria-controls="offcanvasRight"
                            class="text-decoration-none btnA border-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center mx-lg-2 mb-lg-0 mb-3 res-w-100">
                            basket2
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 h-100">
                <div class="order-complete h-100 w-100">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/three-card-2.png" alt="" class="h-100 w-100 object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- care-package-modal -->
    <div class="modal care-package-modal fade" data-bs-backdrop="static" id="care-packageModalToggle" aria-hidden="true"
        aria-labelledby="care-packageModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content position-relative border-0 radius5 res-radius-0 text-center">
                <div class="close-div position-absolute top-0 end-0 mt-4 me-4 d-inline-flex">
                    <button type="button" class="bg-transparent d-inline-flex border-0 p-0 close-round w-100"
                        data-bs-dismiss="modal" aria-label="Close">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/close-icon.svg" alt="" class="w-100">
                    </button>
                </div>
                <div class="mont-medium font11 leading20 text-918E8E dmb-20">One last thing…</div>
                <div class="bodoni font35 res-font30 leading45 res-leading35 text-black dmb-15 col-lg-10 col-12 mx-auto">
                    Would like to add a care package to your order?
                </div>
                <div class="mont-normal font13 leading24 text-black dmb-40">
                    This one-of-a-kind luxury statement is crafted with soft long-haired sheepskin with cosy hugging wooden arms that frame the elegant plush seat and backrest.
                </div>
                <div class="care-product-group px-lg-3 mx-lg-1 dmb-35 tmb-25">
                    <div class="care-product d-flex align-items-center dpb-20 tpb-30 tmb-30 dmb-20">
                        <div class="care-product-img radius5 overflow-hidden">
                            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/product-1.png" alt="" class="h-100 w-100 object-cover">
                        </div>
                        <div class="care-product-name text-start col-lg-7 col-5">
                            <div class="mont-medium font14 leading20 text-black dmb-5">Leather Care Kit</div>
                            <div class="mont-medium font13 leading16 text-7D7D7D">£15.00</div>
                        </div>
                        <div class="ms-auto ps-2">
                            <label class="switch switch-large d-flex position-relative align-items-center justify-content-center">
                                <input type="checkbox" class="d-none">           
                                <div class="slider position-relative d-inline-block rounded-pill bg-black cursor-pointer transition mx-3 order-1"></div>
                                <div class="off mont-medium font11 leading16 text-black transition text-decoration-underline order-0">YES</div>
                                <div class="on mont-medium font11 leading16 text-918E8E transition text-decoration-none order-2">NO</div>
                            </label>
                        </div>
                    </div>
                    <div class="care-product d-flex align-items-center dpb-20 tpb-30 tmb-30 dmb-20">
                        <div class="care-product-img radius5 overflow-hidden">
                            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/product-1.png" alt="" class="h-100 w-100 object-cover">
                        </div>
                        <div class="care-product-name text-start col-lg-7 col-5">
                            <div class="mont-medium font14 leading20 text-black dmb-5">Leather Care Kit</div>
                            <div class="mont-medium font13 leading16 text-7D7D7D">£15.00</div>
                        </div>
                        <div class="ms-auto ps-2">
                            <label class="switch switch-large d-flex position-relative align-items-center justify-content-center">
                                <input type="checkbox" class="d-none">           
                                <div class="slider position-relative d-inline-block rounded-pill bg-black cursor-pointer transition mx-3 order-1"></div>
                                <div class="off mont-medium font11 leading16 text-black transition text-decoration-underline order-0">YES</div>
                                <div class="on mont-medium font11 leading16 text-918E8E transition text-decoration-none order-2">NO</div>
                            </label>
                        </div>
                    </div>
                    <div class="care-product d-flex align-items-center dpb-20 tpb-30 tmb-30 dmb-20">
                        <div class="care-product-img radius5 overflow-hidden">
                            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/07/product-1.png" alt="" class="h-100 w-100 object-cover">
                        </div>
                        <div class="care-product-name text-start col-lg-7 col-5">
                            <div class="mont-medium font14 leading20 text-black dmb-5">Leather Care Kit</div>
                            <div class="mont-medium font13 leading16 text-7D7D7D">£15.00</div>
                        </div>
                        <div class="ms-auto ps-2">
                            <label class="switch switch-large d-flex position-relative align-items-center justify-content-center">
                                <input type="checkbox" class="d-none">           
                                <div class="slider position-relative d-inline-block rounded-pill bg-black cursor-pointer transition mx-3 order-1"></div>
                                <div class="off mont-medium font11 leading16 text-black transition text-decoration-underline order-0">YES</div>
                                <div class="on mont-medium font11 leading16 text-918E8E transition text-decoration-none order-2">NO</div>
                            </label>
                        </div>
                    </div>
                </div>
                <a href="" class="d-inline-block mont-normal font13 leading16 text-black dmb-30">Find Out More</a>
                <div class="d-flex flex-wrap align-items-center justify-content-center btn-group">
                    <a href="#care-packageModalToggle" data-bs-toggle="modal" target="" class="text-decoration-none btnA bg-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center mx-lg-2 mb-lg-0 mb-3 res-w-100">
                        YES PLEASE
                    </a>
                    <a href="#" target="" class="text-decoration-none btnA border-292929-btn mont-semibold font11 leading20 space0_28 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center mx-lg-2 mb-lg-0 mb-3 res-w-100">
                        NO THANKS
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- basket-offcanvas -->
    <div class="offcanvas basket-offcanvas offcanvas-end" tabindex="-1" id="basket1" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header dmt-40 dmb-40 tmt-50 tmb-15">
        <button type="button" class="basket-close text-reset basket-offcanvas-btn border-0 bg-transparent p-0" data-bs-dismiss="offcanvas" aria-label="Close">
            <img src="<?php echo get_home_url()?>/wp-content/uploads/2024/07/close-icon.svg" class="h-100" alt="">
        </button>
      </div>
      <div class="offcanvas-body">
        <div class="bodoni font27 res-font35 leading48 res-leading45 space0_68 text-black dmb-40 tmb-25">Also in the range</div>
            <div class="basket-product-group">
                <div class="d-flex col-12 align-items-center flex-column flex-lg-row dpt-25 dpb-25 basket-col">
                    <div class="d-flex w-100 align-items-center">
                    <div class="col-3 col-lg-4 pe-lg-4 pe-2">
                        <div class="basket-image radius5 overflow-hidden"> 
                            <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/07/product-8.png ?>" class="h-100 w-100 object-cover" alt="">
                        </div>
                    </div>
                    <div class="col-9 ps-2 ps-lg-0">
                        <div class="mont-medium font14 leading24 text-black">Medway Side Table</div>
                        <div class="mont-medium font13 leading20 text-7D7D7D">£195.00</div>
                    </div>
                    </div>
                    <div class="col-lg-3 col-12 tmt-20">
                        <a href="" class="text-decoration-none bg-292929 text-white basket-btn mont-semibold font11 leading20 space0_28 res-w-100 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                        ADD TO BASKET</a>
                    </div>
                </div>
                <div class="d-flex col-12 align-items-center flex-column flex-lg-row dpt-25 dpb-25 basket-col">
                    <div class="d-flex w-100 align-items-center">
                        <div class="col-3 col-lg-4 pe-lg-4 pe-2">
                            <div class="basket-image radius5 overflow-hidden"> 
                                <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/07/product-8.png ?>" class="h-100 w-100 object-cover" alt="">
                            </div>
                        </div>
                        <div class="col-9 ps-2 ps-lg-0">
                            <div class="mont-medium font14 leading24 text-black">Medway Side Table</div>
                            <div class="mont-medium font13 leading20 text-7D7D7D">£195.00</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12 tmt-20">
                        <a href="" class="text-decoration-none bg-292929 text-white basket-btn mont-semibold font11 leading20 space0_28 res-w-100 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                        ADD TO BASKET</a>
                    </div>
                </div>
                <div class="d-flex col-12 align-items-center flex-column flex-lg-row dpt-25 dpb-25 basket-col">
                    <div class="d-flex w-100 align-items-center">
                        <div class="col-3 col-lg-4 pe-lg-4 pe-2">
                            <div class="basket-image radius5 overflow-hidden"> 
                                <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/07/product-8.png ?>" class="h-100 w-100 object-cover" alt="">
                            </div>
                        </div>
                        <div class="col-9 ps-2 ps-lg-0">
                            <div class="mont-medium font14 leading24 text-black">Medway Side Table</div>
                            <div class="mont-medium font13 leading20 text-7D7D7D">£195.00</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12 tmt-20">
                        <a href="" class="text-decoration-none bg-292929 text-white basket-btn mont-semibold font11 leading20 space0_28 res-w-100 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center">
                        ADD TO BASKET</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- basket-offcanvas -->
    <div class="offcanvas basket-offcanvas offcanvas-end" tabindex="-1" id="basket2" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header dmt-40 dmb-40 tmt-50 tmb-15">
            <button type="button" class="basket-close text-reset basket-offcanvas-btn border-0 bg-transparent p-0" data-bs-dismiss="offcanvas" aria-label="Close">
                <img src="<?php echo get_home_url()?>/wp-content/uploads/2024/07/close-icon.svg" class="h-100" alt="">
            </button>
        </div>
        <div class="offcanvas-body position-relative">
            <div class="bodoni font27 res-font27 leading48 res-leading45 space0_68 text-black dmb-40 tmb-25">Added Products [2]</div>
                <div class="basket-product-group">
                    <div class="dpt-25 dpb-20 basket-col">
                        <div class="d-flex col-12 ">
                            <div class="col-3 pe-lg-1 pe-2">
                                <div class="basket2-image radius5 overflow-hidden"> 
                                    <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/07/product-8.png ?>" class="h-100 w-100 object-cover" alt="">
                                </div>
                            </div>
                            <div class="col-7 ps-3 pt-lg-3 pt-0">
                                <div class="mont-medium font14 leading24 text-black">Medway Side Table</div>
                                <div class="mont-medium font13 leading20 text-7D7D7D dmb-15">£195.00</div>
                                <div class="mont-medium font9 leading20 text-black">Qty: 01</div>
                            </div>
                            <div class="col-2 d-flex justify-content-end pt-lg-3 pt-0">
                                <div class="basket2-product-close">
                                    <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/08/close-icon-gray.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="mont-medium font9 leading20 text-191919 bg-EFEFEF radius5 text-center dmt-25 tmt-20">Available for Immediate Collection or Delivery</div>
                    </div>
                    <div class="dpt-25 dpb-20 basket-col">
                        <div class="d-flex col-12 ">
                            <div class="col-3 pe-lg-1 pe-2">
                                <div class="basket2-image radius5 overflow-hidden"> 
                                    <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/07/product-8.png ?>" class="h-100 w-100 object-cover" alt="">
                                </div>
                            </div>
                            <div class="col-7 ps-3 pt-lg-3 pt-0">
                                <div class="mont-medium font14 leading24 text-black">Medway Side Table</div>
                                <div class="mont-medium font13 leading20 text-7D7D7D dmb-15">£195.00</div>
                                <div class="mont-medium font9 leading20 text-black">Qty: 01</div>
                            </div>
                            <div class="col-2 d-flex justify-content-end pt-lg-3 pt-0">
                                <div class="basket2-product-close">
                                    <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/08/close-icon-gray.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-sticky sticky-bottom-data bottom-0 bg-white w-100">
                    <div class="dpt-50 basket-total dpb-70">
                        <div class="d-flex justify-content-between dmb-15">
                        <div class="mont-medium font13 leading20 text-918E8E">Subtotal</div>
                        <div class="mont-medium font13 leading20 text-918E8E">£195.00</div>
                        </div>
                        <div class="d-flex justify-content-between">
                        <div class="mont-medium font18 leading20 text-black">Total</div>
                        <div class="mont-medium font18 leading20 text-black">£795.00</div>
                        </div>
                        <a href="" class="text-decoration-none bg-292929 text-white w-100 basket-btn2 mont-semibold font11 leading20 space0_28 res-w-100 text-uppercase radius5 transition d-inline-flex align-items-center justify-content-center dmt-25">
                        CONTINUE TO CHECKOUT</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</main>