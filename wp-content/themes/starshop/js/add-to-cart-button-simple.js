// Prevent default button 
jQuery( document ).ready(function() {
  jQuery(".btn-l").click(function(event) {
    event.preventDefault();
  });
  jQuery(".btn-r").click(function(event) {
    event.preventDefault();
  });
});

// Prevent default button after update cart ajax
jQuery( document.body ).on( 'updated_cart_totals', function(){
  //re-do your jquery
  jQuery( document ).ready(function() {
    jQuery(".btn-l").click(function(event) {
      event.preventDefault();
    });
  });
  jQuery(".btn-r").click(function(event) {
    event.preventDefault();
  });
});


// jQuery(document).ready(function() {
//   jQuery(".btn-l").each(function () {
//     console.log(jQuery(this).attr('name'));
//     jQuery(this).click(function() {

//     });
//   });

  // jQuery(".btn-l").click(function() {
  //   if(jQuery('.btn-l').attr('name') == jQuery('input.input-text').attr('name')){
  //     console.log('bingo');
  //     let minus = jQuery('input.input-text').val() ;
  //     console.log(minus);
  //   }
  // });

  // console.log(jQuery('.btn-l').attr('name'));
  // console.log(jQuery('input.input-text').attr('name'));

  
// });


function inc(element) {

  let el = document.querySelector(`[name="${element}"]`);
  el.value = parseInt(el.value) + 1;

  let button = document.querySelector('.update-cart');
  button.setAttribute('aria-disabled', false);
  button.removeAttribute('disabled');

}

function dec(element) {
  let el = document.querySelector(`[name="${element}"]`);
	if (parseInt(el.value) > 0) {
	  el.value = parseInt(el.value) - 1;
  }
  let button = document.querySelector('.update-cart');
  button.setAttribute('aria-disabled', false);
  button.removeAttribute('disabled');
}