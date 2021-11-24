<?php $category_module_1 =  get_sub_field('category_module_1');?>
<?php $category_module_2 =  get_sub_field('category_module_2');?>
<?php $category_module_3 =  get_sub_field('category_module_3');?>
<?php $category_module_4 =  get_sub_field('category_module_4');?>
<?php $category_module_5 =  get_sub_field('category_module_5');?>
<!-- get  category id -->
<?php $category_module_1_img_id = $category_module_1['category_module_1_image']; //print_r($slider_category_module_category_1_id);die();?>
<?php $category_module_2_img_id = $category_module_2['category_module_2_image']; //print_r($slider_category_module_category_1_id);die();?>
<?php $category_module_3_img_id = $category_module_3['category_module_3_img']; //print_r($slider_category_module_category_1_id);die();?>
<?php $category_module_4_img_id = $category_module_4['category_module_4_image']; //print_r($category_module_4_img_id);die();?>
<?php $category_module_5_img_id = $category_module_5['category_module_5_image']; //print_r($slider_category_module_category_1_id);die();?>
<!-- get img url -->
<?php $category_module_1_img_url = wp_get_attachment_url( $category_module_1_img_id, 'full' ); //print_r($slider_category_module_category_1_img_url);die(); ?>
<?php $category_module_2_img_url = wp_get_attachment_url( $category_module_2_img_id, 'full' ); //print_r($slider_category_module_category_1_img_url);die(); ?>
<?php $category_module_3_img_url = wp_get_attachment_url( $category_module_3_img_id, 'full' ); //print_r($slider_category_module_category_1_img_url);die(); ?>
<?php $category_module_4_img_url = wp_get_attachment_url( $category_module_4_img_id, 'full' ); //print_r($category_module_4_img_url);die(); ?>
<?php $category_module_5_img_url = wp_get_attachment_url( $category_module_5_img_id, 'full' ); //print_r($slider_category_module_category_1_img_url);die(); ?>

<!-- Category -->
<div class="category">
    <div class="container">
        <div class="row">
            <div class="outstanding-category-col1">
                <div class="outstanding-category-col1-inner">
                    <img src="<?php echo $category_module_1_img_url?>" alt="">
                    <div class="button">
                        <a href="<?php echo get_category_link( $category_module_1['category_module_1_link'] ); ?>"><?php echo get_the_category_by_ID($category_module_1['category_module_1_link']);?></a>
                    </div>
                </div>
            </div>
            <div class="outstanding-category-col2">
                <div class="outstanding-category-col2-inner">
                    <div class="outstanding-category-col2-inner-baby">
                        <img src="<?php echo $category_module_2_img_url?>" alt="">
                        <div class="button">
                        <a href="<?php echo get_category_link( $category_module_2['category_module_2_link'] ); ?>"><?php echo get_the_category_by_ID($category_module_2['category_module_2_link']);?></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="outstanding-category-col2-inner-clean">
                            <img src="<?php echo $category_module_3_img_url?>" alt="">
                            <div class="button">
                            <a href="<?php echo get_category_link( $category_module_3['category_module_link'] ); ?>"><?php echo get_the_category_by_ID($category_module_3['category_module_link']);?></a>
                            </div>
                        </div>
                        <div class="outstanding-category-col2-inner-health">
                            <img src="<?php echo $category_module_4_img_url?>" alt="">
                            <div class="button">
                            <a href="<?php echo get_category_link( $category_module_4['category_module_4_link'] ); ?>"><?php echo get_the_category_by_ID($category_module_4['category_module_4_link']);?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="outstanding-category-col3">
                <div class="outstanding-category-col3-inner">
                    <img src="<?php echo $category_module_5_img_url?>" alt="">
                    <div class="button">
                    <a href="<?php echo get_category_link( $category_module_5['category_module_5_link'] ); ?>"><?php echo get_the_category_by_ID($category_module_5['category_module_5_link']);?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Category -->