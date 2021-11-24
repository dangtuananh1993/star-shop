<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starshop
 */

get_header();
?>

	<main id="primary" class="site-main">
        <!-- Main Content -->
        <?php
        if( have_rows('page_builder') ):

        // Loop through rows.
        while ( have_rows('page_builder') ) : the_row();

            // Case: Slider Category Module.
            if( get_row_layout() == 'slider_category_module' ):
                $text = get_sub_field('slider_category_module_slider');
                get_template_part('template-parts/flexible-content/home/slider-category-module');

            // Case: Banner
            elseif( get_row_layout() == 'banner_module' ): 
                $file1 = get_sub_field('banner_module');
                get_template_part('template-parts/flexible-content/home/banner-module');
            
            // Case: Outstanding Product
            elseif( get_row_layout() == 'oustanding_product_module' ): 
                // $file2 = get_sub_field('oustanding_product_module');
                get_template_part('template-parts/flexible-content/home/outstanding-product-module');

            //Case Category 
            elseif( get_row_layout() == 'category_module' ): 
                // echo "123";
                // echo "<pre>";
                // print_r($file3 = get_sub_field('category_module_1'));
                // print_r($file3_2 = get_sub_field('category_module_2'));
                // print_r($file3_3 = get_sub_field('category_module_3'));
                // $file3_4 = get_sub_field('category_module_4');
                // $file3_5 = get_sub_field('category_module_5');
                // echo "</pre>";
                get_template_part('template-parts/flexible-content/home/category-module');

            //Case About Us
            elseif( get_row_layout() == 'about_us_home_module' ): 
                $file4 = get_sub_field('about_us_home_module');
                // Do something...
                get_template_part('template-parts/flexible-content/home/about-module');
            endif;

        // End loop.
        endwhile;

        // No value.
        else :
        // Do something...
        endif;
        ?>
	</main><!-- #main -->

<?php
get_footer();
