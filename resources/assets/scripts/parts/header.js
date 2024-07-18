export class Header {
    init() {
        this.HeaderHover();
        this.SearchMenu();
        this.HeaderFixed();
    }

    HeaderHover() {
        $(document).ready(function () {
            function handleWindowResizeDeskSize() {
                var windowWidth = $(window).width();
                if (windowWidth >= 992) {
                    $('.menu-item').each(function () {
                        if ($(this).children(".mega-menu").length === 0) {
                            return;
                        } else {
                            $(this).hover(function () {
                                $('.header').addClass('header-hover');
                                $(this).addClass('menu-active');
                                $('.head-seach').removeClass('search-open')
                            }, function () {
                                $('.header').removeClass('header-hover');
                                $(this).removeClass('menu-active');
                            });
                        }
                    });
                }
            }
            handleWindowResizeDeskSize();
            $(window).resize(handleWindowResizeDeskSize);
        });
    }


    SearchMenu() {
        // ===== search js
        $(".head-seach-img").click(function (e) {
            $('.head-seach').addClass('search-open')
            $('html').addClass('overflow-y-hidden')
            $('.burgar-menu').removeClass('activate')
            $('header').removeClass('header-active')
            $('html').removeClass('res-overflow-y-hidden')
            if ($(window).width() <= 991) {
                $(".navigation-menu .menu-item >a").addClass('d-inline-flex').removeClass('d-none')
                $(".res-top-head").removeClass('d-none')
                $('.sub-menu').css('display', 'none');
                $('.menu-item').removeClass('active');
                $('body').removeClass('body-active');
                $('html').removeClass('overflow-hidden');
            }
        });
        $(".search-close").click(function (e) {
            e.stopPropagation();
            $('.head-seach').removeClass('search-open')
            $('html').removeClass('overflow-y-hidden')
            $('.seach-logo-img').removeClass('d-none')
            $('.search-suggestions').addClass('d-none')
            const searchInput = document.querySelector('#search-input');
            searchInput.value = '';
        });
        $(".search-menu").click(function (e) {
            $('.seach-logo-img').addClass('d-none')
            $('.search-suggestions').removeClass('d-none')
        })
    }

    HeaderFixed() {
        // header fixed js
        var prevScrollPos = window.pageYOffset || document.documentElement.scrollTop;
        $(window).scroll(function () {
            var sticky = $(".header"),
                scroll = $(window).scrollTop();
            if (scroll >= 50) {
                sticky.addClass("header-fixed");
                sticky.removeClass("header-fixed-os");
            }
            else {
                sticky.removeClass("header-fixed");
                sticky.addClass("header-fixed-os");
            }
            var currentScrollPos = window.pageYOffset || document.documentElement.scrollTop;
            if (prevScrollPos > currentScrollPos || currentScrollPos === 0) {
                $(".header").removeClass("hidden");
            } else {
                $(".header").addClass("hidden");
            }
            prevScrollPos = currentScrollPos;
        });
    }
}