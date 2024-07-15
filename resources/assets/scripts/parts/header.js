export class Header {
    init() {
        this.OnClickHeader();
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

        $(document).ready(function() {
            // Disable click event for all <a> tags within the header menu inside the mega menu
            $('.menu-item a').click(function(event) {
                event.preventDefault();
            });
        });
    }

}