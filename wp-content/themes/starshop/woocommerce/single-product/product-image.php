

<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images">
	<div class="flex-viewport slider-product-top">
		<?php
			global $product;

			$attachment_idd = $product->get_gallery_image_ids();
			$image = wp_get_attachment_image_src($product->get_image_id(), 'single-post-thumbnail');
		?>

			<div class="image-1"><img src="<?php print_r($image[0]);?>" alt=""></div>

		<?php
		$attachment_ids = $product->get_gallery_image_ids(); //get id of gallery ids
		
		foreach( $attachment_ids as $attachment_id ) {
			//echo $image_link = wp_get_attachment_url( $attachment_id );?>
			<div class="image-1"><img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id );?>" alt=""></div>
			<?php
		}
		?>
		<!-- //////////////////////////// -->
		<?php
		global $product;
		$product1 = new WC_Product_Variable( $product->get_id() );
		$variations = $product1->get_available_variations();
		
		foreach ( $variations as $variation ) {
			$attrs = $variation['attributes'];
			if($variation['image']['thumb_src']) {
		?>
			<div class="image-1" data-attr="<?php foreach($attrs as $attr) {echo $attr . " ";}?>">
				<img src="<?php echo $variation['image']['thumb_src'];?>" alt="">
			</div>
		

		<?php
			}	
		}
		?>
		<!--  -->

	</div>
	<div class="flex-viewport slider-product-bot">
		<?php
			global $product;

			$attachment_idd = $product->get_gallery_image_ids();
			$image = wp_get_attachment_image_src($product->get_image_id(), 'single-post-thumbnail');
		?>

		<div class="image-2"><img src="<?php print_r($image[0]);?>" alt=""></div>

		<?php
		$attachment_ids = $product->get_gallery_image_ids(); //get id of gallery ids
		
		foreach( $attachment_ids as $attachment_id ) {
			//echo $image_link = wp_get_attachment_url( $attachment_id );?>
			<div class="image-2"><img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id );?>" alt=""></div>
			<?php
		}
		?>
		<!-- //////////////////// -->
		<?php
		global $product;
		$product1 = new WC_Product_Variable( $product->get_id() );
		$variations = $product1->get_available_variations();
		
		foreach ( $variations as $variation ) {
			$attrs = $variation['attributes'];
		if($variation['image']['thumb_src'] != '') {
		?>
		<div class="image-2" data-attr="<?php foreach($attrs as $attr) {echo $attr . " ";}?>">
			<img src="<?php echo $variation['image']['thumb_src'];?>" alt="">
		</div>
		

		<?php
			}	
		}
		?>

	</div>
	</div>
	<div class="12345">
	<?php
	// global $product;
	// $product1 = new WC_Product_Variable( $product->get_id() );
	// $variations = $product1->get_available_variations();
	
	// foreach ( $variations as $variation ) {
	// 	$attrs = $variation['attributes'];
	
	// ?>
	<!-- // <div class="hello" data-attr="<?php //foreach($attrs as $attr) {echo $attr . " ";}?>">
	// 	<img src="<?php // echo $variation['image']['thumb_src'];?>" alt="">
	// </div> -->
	

	// <?php	
	// //   echo "<img  src=" . $variation['image']['thumb_src'] .">";
	//   echo "<pre>";
	//   print_r($variation['image']['thumb_src']);
	//   if($variation['image']['thumb_src'] == ''){
	// 	  echo "hello123";
	//   }
	//   echo "<br>";
	
	// //   print_r($attrs);
	//   echo "</pre>";
	// }
	?>
	</div>
	



