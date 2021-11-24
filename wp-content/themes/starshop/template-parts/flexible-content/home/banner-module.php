<?php
$banner_module_image_id = get_sub_field('banner_module_image');//print_r($banner_module_image_id);die();
?>
<!-- get img url by id -->
<?php $banner_module_image_url = wp_get_attachment_url( $banner_module_image_id, 'thumbnail' );//print_r($banner_module_image_url);die(); ?>
<!-- Banner -->
<div class="banner">
    <div class="container">
        <img src="<?php echo $banner_module_image_url;?>" alt="">
    </div>
</div>
<!-- End Banner -->