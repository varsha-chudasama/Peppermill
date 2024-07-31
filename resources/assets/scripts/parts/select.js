export class Select {
    init() {
        this.SelectInput();
    }
    SelectInput() {
        $(".js-select2").select2({
            closeOnSelect: true,
            minimumResultsForSearch: Infinity,
            allowClear: false,
            dropdownCssClass: "categories-select2"
        });
    }
}