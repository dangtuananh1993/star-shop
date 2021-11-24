<?php

$about_us_home_module = get_sub_field('about_us_home_module');//echo "<pre>";print_r($about_us_home_module);die();

?>
<!-- get img id -->
<?php $about_us_home_module_image_id = $about_us_home_module['about_us_home_module_image'];?>
<!-- get img url -->
<?php $about_us_home_module_image_url = wp_get_attachment_url( $about_us_home_module_image_id, 'full' ); //print_r($slider_category_module_category_1_img_url);die(); ?>

<!-- About -->
<div class="about">
    <div class="container">
        <div class="about-inner">
            <img src="<?php echo $about_us_home_module_image_url?>" alt="">
            <div class="content">
                <div class="title"><?php echo $about_us_home_module['about_us_home_module_title']?></div>
                <div class="description1"><?php echo $about_us_home_module['about_us_home_module_description_1']?></div>
                <div class="description2"><?php echo $about_us_home_module['about_us_home_module_description_2']?></div>
                <div class="description3"><?php echo $about_us_home_module['about_us_home_module_descriotion_3']?></div>
                <div class="button">
                    <a href="<?php echo $about_us_home_module['about_us_home_module_link']?>"><?php echo $about_us_home_module['about_us_home_module_button']?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->