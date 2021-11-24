<!-- Outstanding Product -->
<div class="outstanding-product">
    <div class="container">
        <div class="outstanding-product-title">
            <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-red-circle.png" alt="">
            <div class="outstanding-product-title-text">outstanding product</div>
        </div>
        <div class="outstanding-product-items">
            <div class="outstanding-product-items-slider">
                
                <?php
                $args = array(
                    'post_type' => 'product',
                    'meta_key' => 'total_sales',
                    'orderby' => 'meta_value_num',
                    'posts_per_page' => 8,
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); 
                global $product; ?>
                
                

                <?php //if (has_post_thumbnail( $loop->post->ID )) 
                        //echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); 
                        //else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="product placeholder Image" width="65px" height="115px" />'; ?>

                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>

                <div class="outstanding-product-items-slider-col">
                    <div class="outstanding-product-items-slider-inner">
                    <a href="<?php the_permalink(); ?>" id="id-<?php the_id(); ?>" title="<?php the_title(); ?>">
                        <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" alt="">
                        <div class="content">
                            <div class="code"><?php echo $product->get_sku(); ?></div>
                            <div class="product-name"><?php echo the_title();?></div>
                            <div class="price-more">
                                <div class="price"><?php echo $product->get_price_html(); ?></div>
                                <div class="yellow-price"> <?php echo "STOCK: " . $product->get_stock_quantity()?></div>
                            </div>
                            <!-- <div class="div-test-star">
                                <div class="div-test-star-default">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <?php //global $woocommerce, $product;$average = $product->get_average_rating(); ?>
                                <div class="div-test-star-rated" style="width:<?php //echo floor($average)*18 + ($average-floor($average))*17 . "px!important" ?>">
                                    <div class="div-tsr-123"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>
                                <div class="siv"><?php //echo $average;?></div>
                            </div>   -->
                        </div>
                        </a>  
                    </div>
                </div>


                
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            
                
            
                
                
                
            </div>
        </div>
    </div>
</div>
<!-- End Outstanding Product -->