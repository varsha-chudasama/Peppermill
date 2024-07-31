
export class Dropdown {
    init() {
        this.Dropdown();
    }

    Dropdown() {
        $(document).ready(function () {
            $('.project-toggle').click(function (event) {
                event.stopPropagation();

                $('.project-menu').not($(this).next('.project-menu')).removeClass('d-flex');

                $(this).next('.project-menu').toggleClass('d-flex');
            });

            $(document).click(function () {
                $('.project-menu').removeClass('d-flex');
            });

            $('.project-menu').click(function (event) {
                event.stopPropagation();
            });
        }); 
    }
}
