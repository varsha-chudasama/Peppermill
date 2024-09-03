
export class Plugins {

  init() {
    this.ReadMoreAndLess();
    this.SingleProduct();
    this.Quantity();
  }

  ReadMoreAndLess() {
    $(".vacancies-btn").each(function () {
      var $button = $(this);
      var $content = $button.closest(".card-right-content").find(".vacancies-content");
      var textHeight = $content[0].scrollHeight;
      var defaultHeight = $(window).width() <= 393 ? 180 : $(window).width() <= 426 ? 150 : ($(window).width() <= 768 ? 80 : 157);
      $content.css({ "max-height": defaultHeight, "overflow": "hidden" });
      $button.on("click", function () {
        if ($content.hasClass("active")) {
          $content.animate({
            "max-height": defaultHeight
          }, 500, function () {
            $content.removeClass("active");
            $button.find('.label-up').text('Read More'); // Change button text to "Read More"
          });
        } else {
          $content.animate({
            "max-height": textHeight
          }, 500, function () {
            $content.addClass("active");
            $button.find('.label-up').text('Read less'); // Change button text to "Read Less"
          });
        }
      });
    });
    $(window).resize(function () {
      $(".vacancies-btn").each(function () {
        var $button = $(this);
        var $content = $button.closest(".card-right-content").find(".vacancies-content");
        var defaultHeight = $(window).width() <= 393 ? 180 : $(window).width() <= 426 ? 150 : ($(window).width() <= 768 ? 80 : 157);
        $content.css({ "max-height": defaultHeight });
      });
    });
  }

  SingleProduct() {
    $('.woocommerce-product-small_image').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      arrows: false,
      vertical: true,
      verticalSwiping: true,
      fade: true,
      asNavFor: '.woocommerce-product-gallery__wrapper'
    });
    $('.woocommerce-product-gallery__wrapper').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.woocommerce-product-small_image',
      dots: false,
      arrows: false,
      focusOnSelect: true
    });

  }

  Quantity() {
    $('.add').click(function () {
      var input = $(this).prev();
      var value = parseInt(input.val());
      if (value < 10) {
        input.val((value + 1).toString().padStart(2, '0'));
      }
    });
    $('.sub').click(function () {
      var input = $(this).next();
      var value = parseInt(input.val());
      if (value > 1) {
        input.val((value - 1).toString().padStart(2, '0'));
      }
    });
  }

}
