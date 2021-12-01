<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>


<div class="category-product-banner">
	<div class="category-product-banner-inner">
		<img src="<?php echo get_template_directory_uri(). '/img/Header and slider/banner-category-page.jpg'?>" alt="">
	</div>
</div>
<div class="container">
<!-- Main content flex -->
<div class="main-content-flex">
	<!-- Category list -->
	<div class="category-name-list">
		<div class="category-name-list-inner">
			<div class="category-name-list-all">All Category</div>
			<?php if(get_field('category_header_menu','options')):?>
			<?php foreach(get_field('category_header_menu','options') as $item):?>
			<a href="<?php echo get_category_link( $item['category_header_menu_link'] ); ?>">
			<div class="category-name-list-items">
				<?php
				$term = get_term( $item['category_header_menu_link'], 'product_cat' );
				?>
				<div class="caegory-name"><?php echo get_the_category_by_ID(  $item['category_header_menu_link'] );?></div>
				<div class="category-quantity">(<?php echo $term->count ?>)</div>
			</div>
			</a>
			<?php endforeach; ?>
			<?php endif; ?>
		</div>
	
	<header class="woocommerce-products-header">
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<!-- <h1 class="woocommerce-products-header__title page-title"><?php //woocommerce_page_title(); ?></h1> -->
		<?php endif; ?>

		<?php
		/**
		 * Hook: woocommerce_archive_description.
		 *
		 * @hooked woocommerce_taxonomy_archive_description - 10
		 * @hooked woocommerce_product_archive_description - 10
		 */
		do_action( 'woocommerce_archive_description' );
		?>
	</header>
	</div>
	<!-- End Category List -->
	<!-- flex Right -->
	<div class="category-flex-right">
		<?php
		if ( woocommerce_product_loop() ) {

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */
			do_action( 'woocommerce_before_shop_loop' );

			$category = get_queried_object();
			// echo $category->term_id . "<br>";

			$args = array(
				'post_type'             => 'product',
				'post_status'           => 'publish',
				'ignore_sticky_posts'   => 1,
				'posts_per_page'        => -1,
				'tax_query'             => array(
					array(
						'taxonomy'      => 'product_cat',
						'field' => 'term_id', //This is optional, as it defaults to 'term_id'
						'terms'         => $category,
						'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
					),
					array(
						'taxonomy'      => 'product_visibility',
						'field'         => 'slug',
						'terms'         => 'exclude-from-catalog', // Possibly 'exclude-from-search' too
						'operator'      => 'NOT IN'
					)
				)
			);
			$products = new WP_Query($args);
			$posts_real = $products->posts;
			// echo "<pre>";
			// print_r($products->posts);
			// echo "</pre>";
			// echo $post_id = $posts_real[0]->ID;

			woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				$i = 0;
				?>
				<!-- Product Row -->
				<div class="row">
				<?php
				while ( have_posts() ) {
					the_post();
					
					/**
					 * Hook: woocommerce_shop_loop.
					 */
					// do_action( 'woocommerce_shop_loop' );

					// wc_get_template_part( 'content', 'product' );
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts_real[$i]->ID ), 'single-post-thumbnail' );
					// echo $image[0];
					$posts_real[$i] = wc_get_product();
					// echo $posts_real[$i]->get_sku();
					global $product;
					echo $product->get_sku();
					?>
					
					
						<div class="category-product-col">
							<div class="category-product-col-inner">
							<a href="<?php  ?>" id="id-<?php echo $posts_real[$i]->ID; ?>" title="<?php echo $posts_real[$i]->get_name() ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
								<img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="<?php  echo $image[0]; ?>" data-id="<?php //echo $loop->post->ID; ?>" alt="">
								<div class="content">
									<div class="code"><?php echo $posts_real[$i]->get_sku(); ?></div>
									<div class="product-name"><?php echo $posts_real[$i]->get_name() ?></div>
									<div class="price-more">
										<div class="price"><?php echo $posts_real[$i]->get_price_html(); ?></div>
										<div class="yellow-price"> <?php echo "STOCK: " . $posts_real[$i]->get_stock_quantity(); ?></div>
									</div>
								</div>
								
								</a>  
							</div>
						</div>
					
					<?php
					echo $post_id = $posts_real[$i]->ID . "<br>";
					$i++;
				}
				?>
				</div>
				<!-- End product row -->
				

				<!--Pagination  -->
				<div class="row">
					<div class="pagination-col">
						
					<?php category_product_pagination()?>
							
					</div>
				</div>
				<!-- End Pagination -->
		</div>			
		<!-- End category flex right -->
	</div>
	<!-- End Main content flex -->

		<?php
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}
?>
</div>

<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
