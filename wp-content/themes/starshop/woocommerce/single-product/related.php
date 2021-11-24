<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related-products-single">
	<div class="container">
		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h2><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>


			<?php
			global $product, $woocommerce;
			$id = $product->get_id();
				$tags_array = array(0);
				$cats_array = array(0);
				
				// Get Product tags
				$terms = wp_get_post_terms($id, 'product_tag');
				foreach ( $terms as $term ){
				$tags_array[] = $term->term_id;
				}
				// Get Product categories
				$terms = wp_get_post_terms($id, 'product_cat');
				foreach ( $terms as $term ){
				$cats_array[] = $term->term_id;
				}

				// Meta query
				$meta_query = array();
				$meta_query[] = $woocommerce->query->visibility_meta_query();
				$meta_query[] = $woocommerce->query->stock_status_meta_query();


				// echo "<pre>";
				// print_r($cats_array);
				// print_r($tags_array);
				// echo "</pre>";

				$related_posts = get_posts( apply_filters('woocommerce_product_related_posts', array(
					'orderby' => 'rand',
					'posts_per_page' => 8,
					'post_type' => 'product',
					'fields' => 'ids',
					'meta_query' => $meta_query,
					'tax_query' => array(
							'relation' => 'OR',
							array(
									'taxonomy' => 'product_cat',
									'field' => 'id',
									'terms' => $cats_array
							),
							array(
									'taxonomy' => 'product_tag',
									'field' => 'id',
									'terms' => $tags_array
							)
					)
			) ) );

			// echo "<pre>";
			// print_r($related_posts);
			// echo "</pre>";

			?>

		
		<?php woocommerce_product_loop_start(); ?>
		
		<div class="related-product-single-product-page-slider">
			<?php foreach ( $related_posts as $related_product_id ) : ?>

				<?php
				// Get related Product
				// $post_object = get_post( $related_product->get_id() );
				
				// Get img url
				// $related_product_id = $related_product->get_id();
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $related_product_id ), 'single-post-thumbnail' );
				
				// Get Product SKU
				$related_product_real = wc_get_product($related_product_id);
				$item_sku = $related_product_real->get_sku();
				
				?>

				
					<div class="related-product-single-product-page-slider-col">
						<div class="related-product-single-product-page-slider-inner">
						<a href="<?php the_permalink(); ?>" id="id-<?php the_id(); ?>" title="<?php the_title(); ?>">
							<img src="<?php echo $image[0];  ?>"  alt="">
							<div class="content">
								<div class="code"><?php echo $item_sku ?></div>
								<div class="product-name"><?php echo $related_product_real->get_title();?></div>
								<div class="price-more">
									<div class="price"><?php echo $related_product_real->get_price_html(); ?></div>
									<div class="yellow-price"> <?php  echo "STOCK: " . $related_product_real->get_stock_quantity();?></div>
								</div>
								<!-- <div class="div-test-star">
									<div class="div-test-star-default">
										<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									</div>
									<?php //global $woocommerce, $product;$average = $product->get_average_rating();?>
									<div class="div-test-star-rated" style="width:<?php //echo floor($average)*18 + ($average-floor($average))*17 . "px!important" ?>">
										<div class="div-tsr-123"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
									</div>
									<div class="siv"><?php //echo $average;?></div>
								</div>   -->
							</div>
							</a>  
						</div>
					</div>
				
				

			<?php endforeach; ?>
		</div>
		</div> 
		<?php woocommerce_product_loop_end(); ?>
		
	</section>
	<?php
endif;

wp_reset_postdata();
