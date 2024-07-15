export class Slick {
    init() {
        this.ProductSlider();
        this.RoomCardSlider();
        this.BannerSlider();
    }

    ProductSlider() {
        $('.product-slider').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<button class="prev-arrow border-0 bg-transparent z-3 position-absolute transition"><img src="http://peppermill.local/wp-content/uploads/2024/07/prev-arrow-2.svg" class="h-100" alt=""></button>',
            nextArrow:  '<button class="next-arrow border-0 bg-transparent z-3 position-absolute end-0 transition"><img src="http://peppermill.local/wp-content/uploads/2024/07/next-arrow-2.svg" class="h-100" alt=""></button>',
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

    RoomCardSlider() {
        $('.room-card-slider').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<button class="room-arrow-prev-border d-flex align-items-center justify-content-center bg-transparent z-3 position-absolute rounded-pill transition"><img src="http://peppermill.local/wp-content/uploads/2024/07/room-prev-arrow.svg" class="room-next-arrow" alt=""></button>',
            nextArrow:  '<button class="room-arrow-next-border d-flex align-items-center justify-content-center  bg-transparent z-3 position-absolute end-0 rounded-pill transition"><img src="http://peppermill.local/wp-content/uploads/2024/07/room-next-arrow-1.svg" class="room-prev-arrow" alt=""></button>',
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
    BannerSlider() {
        $('.slider-banner-section').slick({
            dots: true,
            infinite: false,
            fade: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
        })

        var $slider = $('.slider-banner-section');

        if ($slider.length) {
            var currentSlide;
            var slidesCount;
            var sliderCounter = document.createElement('div');
            sliderCounter.classList.add('slider__counter');

            var updateSliderCounter = function (slick, currentIndex) {
                currentSlide = slick.slickCurrentSlide() + 1;
                slidesCount = slick.slideCount;
                $(sliderCounter).text(currentSlide + '/' + slidesCount);
            };

            $slider.on('init', function (event, slick) {
                $slider.append(sliderCounter);
                updateSliderCounter(slick);
            });

            $slider.on('afterChange', function (event, slick, currentSlide) {
                updateSliderCounter(slick, currentSlide);
            });

            $slider.slick({
            });
        }

    }
}