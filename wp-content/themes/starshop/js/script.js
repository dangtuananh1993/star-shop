$(document).ready(function () {
    $('.slider').slick({
        //     dots: false,
        //     // fade: true,
        //     responsive: [
        //     {
        //     breakpoint: 768,
        //     settings: {
        //         infinite: true,
        //         arrows: false
        //     }
        //     }
        // ]
        }); 
    // outstanding-product-items-slider
    $('.outstanding-product-items-slider').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        dot: false,
        // centerMode: true,
        // focusOnSelect: true,
      });
          // Related Product in Single product
    $('.related-product-single-product-page-slider').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        dot: false,
        // centerMode: true,
        // focusOnSelect: true,
      });
          
    //Single product slider
    $('.slider-product-top').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      asNavFor: '.slider-product-bot'
    });
    $('.slider-product-bot').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.slider-product-top',
      // dots: true,
      // centerMode: true,
      focusOnSelect: true,
      // infinite: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            // infinite: false,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            // infinite:false
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
});