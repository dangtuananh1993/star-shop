<?php

function my_edit_wc_attribute_my_field() {
   echo "Helo, I'm color picker";
}

if ( has_action('pa_color_pre_add_form') ) {
   return;
 } else {
   add_action( 'pa_color_pre_add_form', 'my_edit_wc_attribute_my_field', 1000000);
 }