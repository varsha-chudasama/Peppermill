
export class Filter {
    init() {
        this.FilterData();
    }

    FilterData() {
        $(document).ready(function () {
            $(".project-item").click(function () {
                var value = $(this).attr('data-filter');
                if (value == "all") {
                    $('.filter-activity').filter('.' + value).show('1000');
                    $(".filter-activity").not('.' + value).hide('1000');
                } else {
                    $(".filter-activity").not('.' + value).hide('1000');
                    $('.filter-activity').filter('.' + value).show('1000');
                }
                $('.project-menu').removeClass('d-flex');
            });
            $(".project-item").click(function () {
                $(this).toggleClass("active").siblings().removeClass("active");
            });
        })
    }
}