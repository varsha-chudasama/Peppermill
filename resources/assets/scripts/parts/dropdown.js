
export class Dropdown {
    init() {
        this.Dropdown();
    }

    Dropdown() {
        $(document).ready(function () {
            $('#projectMenuButton').click(function () {
                $('.project-menu').toggleClass('d-flex');
            });
        });
    }
}
