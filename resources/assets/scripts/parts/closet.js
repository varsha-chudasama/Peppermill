export class Closet {
    init() {
        this.ClosetSlideDown();
    }

    ClosetSlideDown() {
        $(document).ready(function () {
            $('.closet-title').first().addClass('active').next('.closet-content').slideDown();
            $('.closet-title').click(function () {
                $(this).toggleClass('active').next('.closet-content').slideToggle();
                $('.closet-title').not(this).removeClass('active').next('.closet-content').slideUp();
            });
        });
    }
}