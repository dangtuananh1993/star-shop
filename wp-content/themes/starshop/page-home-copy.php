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
        <div class="main-content">
            <!-- Slider & Outstand Category -->
            <div class="slider-outstanding-category">
                <div class="container">
                    <div class="row">
                        <div class="slider-outstanding-category-left">
                            <!-- Slider -->
                            <div class="slider">
                                <!-- Slider 1 -->
                                <div class="slider-item">
                                    <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/slider-bg.jpg" alt="">
                                    <div class="slider-content">
                                        <div class="row">
                                            <div class="slider-content-inner">
                                                <div class="title">Almost before we knew it.</div>
                                                <div class="description">Almost before we knew it, we had left the ground.</div>
                                                <div class="button"><a href="">Shop it Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End SLider 1 -->
                                <!-- Slider 2 -->
                                    <div class="slider-item">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/slider-bg.jpg" alt="">
                                        <div class="slider-content">
                                            <div class="row">
                                                <div class="slider-content-inner">
                                                    <div class="title">Almost before we knew it.</div>
                                                    <div class="description">Almost before we knew it, we had left the ground.</div>
                                                    <div class="button"><a href="">Shop it Now</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- End Slider 2 -->
                            </div>
                            <!-- End Slider -->
                        </div>
                        <div class="slider-outstanding-category-right">
                            <!-- Outstanding Category -->
                                <div class="outstanding-category-col">
                                    <!-- Right 1 -->
                                    <div class="slider-outstanding-category-right-item">
                                        <div class="slider-outstanding-category-right-item-inner">
                                            <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/banner-category-comestic.jpg" alt="">
                                            <div class="button"><a href="">Buy Now</a></div>
                                        </div>
                                    </div>
                                    <!-- End Right 1 -->
                                    <!-- Begin Right 2 -->
                                    <div class="slider-outstanding-category-right-item">
                                        <div class="slider-outstanding-category-right-item-inner">
                                            <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/banner-category-baby.jpg" alt="">
                                            <div class="button"><a href="">Buy Now</a></div>
                                        </div>
                                    </div>
                                    <!-- End Right 2 -->
                                </div>
                            <!-- End Outstanding Category -->
                        </div>
                    </div>
                </div>
            </div> 
            <!-- Slider & Outstand Category -->
            <!-- Banner -->
                <div class="banner">
                    <div class="container">
                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/banner-how-to-shoping.png" alt="">
                    </div>
                </div>
            <!-- End Banner -->
            <!-- Outstanding Product -->
                <div class="outstanding-product">
                    <div class="container">
                        <div class="outstanding-product-title">
                            <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-red-circle.png" alt="">
                            <div class="outstanding-product-title-text">outstanding product</div>
                        </div>
                        <div class="outstanding-product-items">
                            <div class="outstanding-product-items-slider">
                                <div class="outstanding-product-items-slider-col">
                                    <div class="outstanding-product-items-slider-inner">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/product/product-1.jpg" alt="">
                                        <div class="content">
                                            <div class="code">4971493201198</div>
                                            <div class="product-name">Cosmetic box</div>
                                            <div class="price-more">
                                                <div class="price">$312</div>
                                                <div class="yellow-price">$ 1200</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="outstanding-product-items-slider-col">
                                    <div class="outstanding-product-items-slider-inner">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/product/product-1.jpg" alt="">
                                        <div class="content">
                                            <div class="code">4971493201198</div>
                                            <div class="product-name">Cosmetic box</div>
                                            <div class="price-more">
                                                <div class="price">$312</div>
                                                <div class="yellow-price">$ 1200</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="outstanding-product-items-slider-col">
                                    <div class="outstanding-product-items-slider-inner">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/product/product-1.jpg" alt="">
                                        <div class="content">
                                            <div class="code">4971493201198</div>
                                            <div class="product-name">Cosmetic box</div>
                                            <div class="price-more">
                                                <div class="price">$312</div>
                                                <div class="yellow-price">$ 1200</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="outstanding-product-items-slider-col">
                                    <div class="outstanding-product-items-slider-inner">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/product/product-1.jpg" alt="">
                                        <div class="content">
                                            <div class="code">4971493201198</div>
                                            <div class="product-name">Cosmetic box</div>
                                            <div class="price-more">
                                                <div class="price">$312</div>
                                                <div class="yellow-price">$ 1200</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="outstanding-product-items-slider-col">
                                    <div class="outstanding-product-items-slider-inner">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/product/product-1.jpg" alt="">
                                        <div class="content">
                                            <div class="code">4971493201198</div>
                                            <div class="product-name">Cosmetic box</div>
                                            <div class="price-more">
                                                <div class="price">$312</div>
                                                <div class="yellow-price">$ 1200</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="outstanding-product-items-slider-col">
                                    <div class="outstanding-product-items-slider-inner">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/product/product-1.jpg" alt="">
                                        <div class="content">
                                            <div class="code">4971493201198</div>
                                            <div class="product-name">Cosmetic box</div>
                                            <div class="price-more">
                                                <div class="price">$312</div>
                                                <div class="yellow-price">$ 1200</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="outstanding-product-items-slider-col">
                                    <div class="outstanding-product-items-slider-inner">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/product/product-2.jpg" alt="">
                                        <div class="content">
                                            <div class="code">4971493201198</div>
                                            <div class="product-name">Cosmetic box</div>
                                            <div class="price-more">
                                                <div class="price">$312</div>
                                                <div class="yellow-price">$ 1200</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="outstanding-product-items-slider-col">
                                    <div class="outstanding-product-items-slider-inner">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/product/product-3.jpg" alt="">
                                        <div class="content">
                                            <div class="code">4971493201198</div>
                                            <div class="product-name">Cosmetic box</div>
                                            <div class="price-more">
                                                <div class="price">$312</div>
                                                <div class="yellow-price">$ 1200</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Outstanding Product -->
            <!-- Category -->
                <div class="category">
                    <div class="container">
                        <div class="row">
                            <div class="outstanding-category-col1">
                                <div class="outstanding-category-col1-inner">
                                    <img src="<?php echo get_template_directory_uri() . '/' ?>img/category/category-comestic.jpg" alt="">
                                    <div class="button">
                                        <a href="">Comestic</a>
                                    </div>
                                </div>
                            </div>
                            <div class="outstanding-category-col2">
                                <div class="outstanding-category-col2-inner">
                                    <div class="outstanding-category-col2-inner-baby">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/category/category-baby-product.jpg" alt="">
                                        <div class="button">
                                            <a href="">Baby Product</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="outstanding-category-col2-inner-clean">
                                            <img src="<?php echo get_template_directory_uri() . '/' ?>img/category/category-daily-necessory.jpg" alt="">
                                            <div class="button">
                                                <a href="">Daily Necessory</a>
                                            </div>
                                        </div>
                                        <div class="outstanding-category-col2-inner-health">
                                            <img src="<?php echo get_template_directory_uri() . '/' ?>img/category/category-health-food.jpg" alt="">
                                            <div class="button">
                                                <a href="">Health Food</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="outstanding-category-col3">
                                <div class="outstanding-category-col3-inner">
                                    <img src="<?php echo get_template_directory_uri() . '/' ?>img/category/category-beverage-food.jpg" alt="">
                                    <div class="button">
                                        <a href="">Beverage Food</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <!-- End Category -->
            <!-- About -->
                <div class="about">
                    <div class="container">
                        <div class="about-inner">
                            <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/About-image.jpg" alt="">
                            <div class="content">
                                <div class="title">Lorem Ipsum is simply dummy text </div>
                                <div class="description1">Lorem Ipsum is simply dummy text of the printing and typesetting printing and typesetting</div>
                                <div class="description2">Lorem Ipsum is simply dummy text of the printing and typesetting</div>
                                <div class="description3">Lorem Ipsum is simply dummy text of the printing and typesetting</div>
                                <div class="button">
                                    <a href="">Viste Us Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End About -->
        </div>
        <!-- End Main Content -->
	</main><!-- #main -->

<?php
get_footer();
