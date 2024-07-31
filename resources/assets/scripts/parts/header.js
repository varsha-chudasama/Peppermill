export class Header {
    init() {
        this.HeaderHover();
        this.SearchMenu();
        this.HeaderFixed();
        this.ResHeaderMenu();
    }

    HeaderHover() {
        function handleWindowResizeDeskSize() {
            var windowWidth = $(window).width();
            if (windowWidth >= 1200) {
                $('.menu-item').each(function () {
                    if ($(this).children(".mega-menu").length === 0) {
                        return;
                    } else {
                        $(this).hover(function () {
                            $('.header').addClass('header-hover');
                            $(this).addClass('menu-active');
                            $('.head-search').removeClass('search-open')
                            $('html').addClass('overflow-hidden')
                        }, function () {
                            $('.header').removeClass('header-hover');
                            $(this).removeClass('menu-active');
                            $('html').removeClass('overflow-hidden')
                        });
                    }
                });
            }
        }
        handleWindowResizeDeskSize();
        $(window).resize(handleWindowResizeDeskSize);
    }


    SearchMenu() {
        // ===== search js
        $(".head-search-img").click(function (e) {
            $('.head-search').addClass('search-open')
            $('html').addClass('overflow-y-hidden')
            $('.burgar-menu').removeClass('activate')
            $('header').removeClass('header-active')
            $('html').removeClass('res-overflow-y-hidden')
            function handleWindowResizeDeskSize() {
                var windowWidth = $(window).width();
                if (windowWidth >= 1200) {
                    $(".navigation-menu .menu-item >a").addClass('d-inline-flex').removeClass('d-none')
                    $(".res-top-head").removeClass('d-none')
                    $('.sub-menu').css('display', 'none');
                    $('.menu-item').removeClass('active');
                    $('body').removeClass('body-active');
                    $('html').removeClass('overflow-hidden');
                }
            }
            handleWindowResizeDeskSize();
            $(window).resize(handleWindowResizeDeskSize);
        });
        $(".search-close").click(function (e) {
            e.stopPropagation();
            $('.head-search').removeClass('search-open')
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

    ResHeaderMenu() {
        function handleWindowResizeMegaMenu() {
            var windowWidth = $(window).width();
            if (windowWidth >= 0 && windowWidth <= 1199) {
                const $headSearch = $('.head-search');
                const $headCart = $('.head-cart');
                const $resLogoNav = $('.res-logo-nav');
                const $resLogoNav2 = $('.res-logo-nav2');
                const $headIcon = $('.head-icon');

                $resLogoNav.append($headSearch).append($headCart);
                $resLogoNav2.append($headIcon);

                $('.menu-toggle').click(function () {
                    $('.burgar-menu').toggleClass('activate');
                    $('.header').toggleClass('header-active');
                    $('html').toggleClass('overflow-hidden');
                    $('.menu-item').removeClass('res-menu-active');
                    $('.header').removeClass('header-megamenu-active');
                });
                $('.menu-item').each(function () {
                    var $this = $(this);
                    var $megaMenu = $this.children(".mega-menu");

                    if ($megaMenu.length > 0) {
                        $this.on('click', function (event) {
                            event.preventDefault();
                            $('.menu-item').removeClass('res-menu-active'); 
                            $this.addClass('res-menu-active'); 
                            $('.header').addClass('header-megamenu-active');
                        });
                    }
                });
                $(".mega-menu").click(function (e) {
                    e.stopPropagation();
                });
            }
        }
        handleWindowResizeMegaMenu();
        $(window).resize(handleWindowResizeMegaMenu);
    }
}