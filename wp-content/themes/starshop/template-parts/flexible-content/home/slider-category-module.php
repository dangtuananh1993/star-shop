<?php 

$text = get_sub_field('slider_category_module_slider');

?>
<!-- Slider & Outstand Category -->
<div class="slider-outstanding-category">
    <div class="container">
        <div class="row">
            <div class="slider-outstanding-category-left">
                <!-- Slider -->
                <div class="slider">
                <?php if(!empty($text)):?>
                <?php foreach($text as $t):?>

                <!-- get img url by id -->

                <?php $url = wp_get_attachment_url( $t['slider_category_module_slider_image'], 'thumbnail' ); ?>
                    <!-- Slider 1 -->
                    <div class="slider-item">
                        <img src="<?php echo $url ?>" alt="">
                        <div class="slider-content">
                            <div class="row">
                                <div class="slider-content-inner">
                                    <div class="title"><?php echo $t['slider_category_module_slider_title'];?></div>
                                    <div class="description"><?php echo $t['slider_category_module_slider_slogan'];?></div>
                                    <div class="button"><a href=""><?php echo $t['slider_category_module_slider_button'];?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End SLider 1 -->
                <?php endforeach; ?>
                <?php endif;?>
                    <!-- Slider 2 -->
                        
                    <!-- End Slider 2 -->
                </div>
                <!-- End Slider -->
            </div>
            <?php $slider_category_module_category_1 =  get_sub_field('slider_category_module_category_1');?>
            <?php $slider_category_module_category_2 =  get_sub_field('slider_category_module_category_2');?>
            
                <?php  //echo "<pre>;"?>
                <?php //print_r($slider_category_module_category_1);?>
                <?php //echo "</pre>;"?>
            <div class="slider-outstanding-category-right">
                <!-- Outstanding Category -->
                    <div class="outstanding-category-col">
                        <!-- Right 1 -->
                        <?php if($slider_category_module_category_1):?>
                        <!-- get  category id -->
                        <?php $slider_category_module_category_1_id = $slider_category_module_category_1['slider_category_module_category_1_link']; //print_r($slider_category_module_category_1_id);die();?>
                        <!-- get img url -->
                        <?php $slider_category_module_category_1_img_url = wp_get_attachment_url( $slider_category_module_category_1['slider_category_module_category_1_image'], 'thumbnail' ); //print_r($slider_category_module_category_1_img_url);die(); ?>
                        <div class="slider-outstanding-category-right-item">
                            <div class="slider-outstanding-category-right-item-inner">
                                <img src="<?php echo $slider_category_module_category_1_img_url?>" alt="">
                                <div class="button"><a href="<?php echo get_category_link( $slider_category_module_category_1_id ); ?>"><?php echo get_the_category_by_ID($slider_category_module_category_1_id);?></a></div>
                            </div>
                        </div>
                        <?php  endif;?>
                        <!-- End Right 1 -->
                        <!-- Begin Right 2 -->
                        <?php if($slider_category_module_category_2):?>
                        <!-- get category id -->
                        <?php $slider_category_module_category_2_id = $slider_category_module_category_2['slider_category_module_category_2_link']; //print_r($slider_category_module_category_1_id);die();?>
                        <!-- get img url -->
                        <?php $slider_category_module_category_2_img_url = wp_get_attachment_url( $slider_category_module_category_2['slider_category_module_category_2_image'], 'full' ); //print_r($slider_category_module_category_1_img_url);die(); ?>
                        <div class="slider-outstanding-category-right-item">
                            <div class="slider-outstanding-category-right-item-inner">
                                <img src="<?php echo $slider_category_module_category_2_img_url?>" alt="">
                                <div class="button"><a href="<?php echo get_category_link( $slider_category_module_category_2_id ); ?>"><?php echo get_the_category_by_ID($slider_category_module_category_2_id);?></a></div>
                            </div>
                        </div>
                        <?php  endif;?>
                        <!-- End Right 2 -->
                    </div>
                <!-- End Outstanding Category -->
            </div>
        </div>
    </div>
</div> 
<!-- Slider & Outstand Category -->