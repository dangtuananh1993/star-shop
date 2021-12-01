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

// convert select to radio
//Get Exising Select Options    
// $("#pa_color option").each(function(i, e) {
//   ($("<input type='radio' name='r' />")
//     .attr("value", $(this).val())
//     .attr("checked", i == 0)
//     .click(function() {
//       $("#pa_color").val($(this).val());
//     }).add($("<label>"+ this.textContent +"</label>")))
//     .appendTo("#r");
// });

// $("form.cart select option").unwrap().each(function() {
//   var btn = $('<div class="btn">'+$(this).text()+'</div>');
//   if($(this).is(':checked')) btn.addClass('on');
//   $(this).replaceWith(btn);
// });

// $(document).on('click', '.btn', function() {
//   $('.btn').removeClass('on');
//   $(this).addClass('on');
// });

//Get Exising Select Options    
// $('.product-description').append('<div id="variant-options"></div>');
// $(".select-variant-selector-component option").each(function() {
//   $("<input type='radio' name='r' />").attr("value", $(this).val()).text($(this).val()).appendTo("#variant-options");
//   var currentItem = $("input[value='" + $(this).val() +"']");
//   $("<label>").text($(this).val()).insertAfter(currentItem);
// }
//                                                    );
// $("#variant-options input:first-child").prop("checked", true);
// $(".select-variant-selector-component").css("display","none");
// $(".design-variant-selector").css("display","none");

$(document).on('change', '.variation-radios input', function() {
  $('.variation-radios input:checked').each(function(index, element) {
    var $el = $(element);
    var thisName = $el.attr('name');
    var thisVal  = $el.attr('value');
    $('select[name="'+thisName+'"]').val(thisVal).trigger('change');
  });
});
$(document).on('woocommerce_update_variation_values', function() {
  $('.variation-radios input').each(function(index, element) {
    var $el = $(element);
    var thisName = $el.attr('name');
    var thisVal  = $el.attr('value');
    $el.removeAttr('disabled');
    if($('select[name="'+thisName+'"] option[value="'+thisVal+'"]').is(':disabled')) {
      $el.prop('disabled', true);
    }
  });
});

// Show border when click variation product label
$(document).ready(function () {
  $('.variation-radios label').on('click', function() {
    $(this).siblings().removeClass('active');
    $(this).addClass('active');
    var $attr = $(this).data('attr');
    var $imgAttr = $('.slider-product-bot .image-2').each(function(){
      $(this).data('attr');
      //console.log($(this).data('attr').split(" "));
      if($.inArray($attr, $(this).data('attr').split(" ")) == -1) {
        $('.slider-product-bot .image-2').css('display', 'none')
    });
    console.log($imgAttr.length);
  })
}); 
