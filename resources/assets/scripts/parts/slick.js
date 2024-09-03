export class Slick {
    init() {
        this.ProductSlider();
        this.RoomCardSlider();
        this.FooterSlider();
        this.BannerSlider();
        this.TestimonialSlider();
        this.BlogCardSlider();
        this.ProductSlider2();
        this.RangeSlider();
    }

    ProductSlider() {
        $('.product-slider').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '.product-section .prev-arrow',
            nextArrow: '.product-section .next-arrow',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    }

    RoomCardSlider() {
        $('.room-card-slider').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '.room-card-section .prev-arrow',
            nextArrow: '.room-card-section .next-arrow',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    }

    BlogCardSlider() {
        $('.blog-card-slider').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '.blog-card-section .prev-arrow',
            nextArrow: '.blog-card-section .next-arrow',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    }

    FooterSlider() {
        $('.footer-slider').slick({
            dots: false,
            infinite: false,
            arrows: false,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                    }
                }
            ]
        });
    }

    BannerSlider() {
        $('.slider-banner').slick({
            dots: false,
            infinite: false,
            fade: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '.slider-banner-section .prev-arrow',
            nextArrow: '.slider-banner-section .next-arrow',
        })

        var $slider = $('.slider-banner');

        if ($slider.length) {
            var currentSlide;
            var slidesCount;
            var $sliderCounter = $('.slider__counter');

            var updateSliderCounter = function (slick, currentIndex) {
                currentSlide = (currentIndex || 0) + 1;
                slidesCount = slick.slideCount;
                $sliderCounter.text(currentSlide + '/' + slidesCount);
            };

            $slider.on('init', function (event, slick) {
                updateSliderCounter(slick);
            });

            $slider.on('afterChange', function (event, slick, currentSlide) {
                updateSliderCounter(slick, currentSlide);
            });

            $slider.slick({
                prevArrow: $('.slick-prev'),
                nextArrow: $('.slick-next')
            });
        }
    }

    TestimonialSlider() {
        $('.testimonial-slider').slick({
            dots: false,
            infinite: false,
            fade: true,
            arrows: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '.testimonial-slider-section .prev-arrow',
            nextArrow: '.testimonial-slider-section .next-arrow',
        })
    }

    ProductSlider2() {
        $('.product-center-image').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.product-image-group'
        });
        $('.product-image-group').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            speed: 300,
            asNavFor: '.product-center-image',
            dots: false,
            vertical: true,
            arrows: false,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        arrows: true,
                        prevArrow: '<button class="product-prev-arrow ms-1 position-absolute top-center border-0 bg-transparent z-3 transition rounded-pill"><img src="/wp-content/uploads/2024/07/left-slide-arrow.svg" class="h-100" alt=""></button>',
                        nextArrow: ' <button class="product-next-arrow ms-1 position-absolute top-center border-0 bg-transparent z-3 transition rounded-pill"><img src="/wp-content/uploads/2024/07/right-slide-arrow.svg" class="h-100" alt=""></button>',
                        vertical: false,
                    }
                }
            ]
        });
    }

    RangeSlider() {
        $('.range-slider').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            prevArrow: '.product-section .prev-arrow',
            nextArrow: '.product-section .next-arrow',
            arrows: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    }
}  