export class Slick {
    init() {
        this.ProductSlider();
        this.RoomCardSlider();
        this.FooterSlider();
        this.BannerSlider();
        this.TestimonialSlider();
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
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
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
            prevArrow: '<button class="room-arrow-prev-border d-flex align-items-center justify-content-center bg-transparent z-3 ms-3 position-absolute rounded-pill transition"><img src="http://peppermill.local/wp-content/uploads/2024/07/room-prev-arrow.svg" class="room-prev-arrow" alt=""></button>',
            nextArrow: '<button class="room-arrow-next-border d-flex align-items-center justify-content-center bg-transparent z-3 ms-3 position-absolute end-0 rounded-pill transition"><img src="http://peppermill.local/wp-content/uploads/2024/07/room-next-arrow-1.svg" class="room-next-arrow" alt=""></button>',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
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
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
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
            prevArrow: '.testimonial-slider-section .room-arrow-prev-border',
            nextArrow: '.testimonial-slider-section .room-arrow-next-border',
        })
    }
}  