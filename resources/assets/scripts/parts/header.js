export class Header {
    init() {
        this.OnClickHeader();
        this.SearchMenu();
    }

    OnClickHeader() {
        $(document).ready(function () {
            $('.menu-item').each(function () {
                if ($(this).children(".mega-menu").length === 0) {
                    return;
                } else {
                    $(this).on('click', function (event) {
                        event.preventDefault();
                        event.stopPropagation();
                        $('.head-seach').removeClass('search-open')
                        $('html').removeClass('overflow-y-hidden')
                        $('.header').removeClass('header-hover');
                        $('.menu-item').removeClass('menu-active');
                        $(this).toggleClass('menu-active');
                        if ($(this).hasClass('menu-active')) {
                            $('.header').addClass('header-hover');
                        }
                    });
                }
            });
            $(document).on('click', function () {
                $('.header').removeClass('header-hover');
                $('.menu-item').removeClass('menu-active');
            });
            $('.mega-menu').on('click', function (event) {
                event.stopPropagation();
            });
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

}