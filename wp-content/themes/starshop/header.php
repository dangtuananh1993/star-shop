<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starshop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'starshop' ); ?></a> -->

	<header id="masthead" class="site-header">
		<!-- Wrapper -->
		<div class="wrapper">
		<!-- Header -->
        <div class="header">
            <!-- Header Top -->
                <div class="header-top">
                    <div class="container">
                        <div class="header-top-inner">
                            <div class="header-top-space"><div class="div"></div></div>
                            <div class="header-top-lang-hover">
                                <div class="header-top-lang-cover">
                                    <div class="header-top-lang-cover-inner">
                                        <div class="header-top-lang">
                                            <div class="nation">English</div>
                                            <div class="flag"><img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-japan-flag.png" alt=""></div>
                                        </div>
                                        <div class="header-top-lang">
                                            <div class="nation">English</div>
                                            <div class="flag"><img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-japan-flag.png" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-top-lang">
                                    <div class="nation">English</div>
                                    <div class="flag"><img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-japan-flag.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Header Top -->
            <!-- Header Mid -->
                <div class="header-mid">
                    <div class="container">
                        <div class="header-mid-inner">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/logo-fixed.png" alt="">
                            </div>
                            <div class="form-control">
                                <div class="search">
                                    <!-- Search product form -->
                                    <?php get_product_search_form()?>
                                </div>
                                <div class="webinfo-item phone">
                                    <div class="webinfo-item-img">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-headphone.png" alt="">
                                    </div>
                                    <div class="webinfo-item-content">
                                        <div class="webinfo-item-content-title">
                                            Call Us Now
                                        </div>
                                        <div class="webinfo-item-content-description">
                                            0270-61-9899
                                        </div>
                                    </div>
                                </div>
                                <div class="webinfo-item calender">
                                    <div class="webinfo-item-img">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-calender.png" alt="">
                                    </div>
                                    <div class="webinfo-item-content">
                                        <div class="webinfo-item-content-title">
                                            Working Hours
                                        </div>
                                        <div class="webinfo-item-content-description">
                                            9:00~17:00(kkk)
                                        </div>
                                    </div>
                                </div>
                                <div class="cart">
                                    <a href="http://localhost/starshop/cart/"><div class="cart-img" data="<?php global $woocommerce; echo $woocommerce->cart->cart_contents_count;?>"><img class="img-cart" src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-cart.png" alt=""></div></a>
                                    <div class="cart-total">
                                        <?php global $woocommerce; echo $totalamount = $woocommerce->cart->get_cart_total();?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Header Mid -->
            <!-- Header Bot -->
                <div class="header-bot">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="header-bot-inner">
                                <div class="header-bot-inner-category-hover">
                                    <div class="category-nav">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-category.png" alt="">
                                        <div class="category-text">All Categories</div>
                                    </div>
                                    <div class="category-list-cover">
                                        <ul class="category-list">
                                            <?php if(get_field('category_header_menu','options')):?>
                                            <?php foreach(get_field('category_header_menu','options') as $item):?>
                                            <li class="category-item">
                                                <div class="category-item-bottom-line">
                                                    <a href="<?php echo get_category_link( $item['category_header_menu_link'] ); ?>">
                                                    <ul class="category-item-inner">
                                                        <?php $url = wp_get_attachment_url( $item['category_header_menu_image'], 'thumbnail' ); ?>
                                                        <li class="category-item-inner-img"><img src="<?php echo $url;?>" alt=""></li>
                                                        <li><?php echo get_the_category_by_ID(  $item['category_header_menu_link'] );?></li>
                                                    </ul>
                                                    </a>
                                                </div>
                                            </li>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>    
                                </div>
                                <!-- Call Menu -->
                                <?php 
                                $location = get_nav_menu_locations();
                                $menu_id = $location['main-menu'];
                                $main_menu = wp_get_nav_menu_items($menu_id);
                                 ?>
                                <div class="">
                                    <ul class="nav-bar">
                                        <?php if($main_menu):?>
                                        <?php foreach($main_menu as $menu_item):?>
                                        <li class="nav-item"><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></li>
                                        <?php endforeach ?>
                                        <?php endif ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Header Bot -->
        </div>
        <!-- End Header -->
	</header><!-- #masthead -->
