<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starshop
 */

?>

	<footer id="colophon" class="site-footer">
		<!-- Footer-->
		<div class="footer">
                <!-- Footer Top -->
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="footer-top-col">
                                <div class="footer-top-col-inner">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-headphone-white.png" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="title">Contact Us Now</div>
                                        <div class="description">0270 - 61 - 9899</div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-top-col">
                                <div class="footer-top-col-inner">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-calender-white.png" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="title">Working hours</div>
                                        <div class="description">9:00~17:00(24/7)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-top-col">
                                <div class="footer-top-col-inner">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-email-white.png" alt="">
                                    </div>
                                    <div class="content mail-us">
                                        <div class="title">Send Us Mail</div>
                                        <div class="description">
                                            <div class="form-control">
                                                <!-- <form action=""> -->
                                                    <?php echo do_shortcode('[contact-form-7 id="116" title="Footer Contact Form"]'); ?>
                                                    <!-- <input type="text"> -->
                                                    <!-- <button type=submit><img src="<?php //echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-arrow-right-red.png" alt=""></button> -->
                                                    <!-- mat khau 2 lop mail awywpbxnlywdgunk -->
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- End Footer Top -->
                <div class="footer-mid">
                    <div class="container">
                        <div class="row">
                            <div class="footer-mid-col1 footer-mid-col">
                                <div class="title">Lorem Ipsum is simply</div>
                                <ul class="address">
                                    <li>Lorem 123</li>
                                    <li>Lorem Ipsum is simply Lorem Ipsum is simply</li>
                                </ul>
                                <ul class="hello">
                                    <li>Lorem</li>
                                    <li>Lorem Ipsum is simply</li>
                                </ul>
                                <ul class="hi">
                                    <li>Lorem</li>
                                    <li>Lorem Ipsum is simply</li>
                                </ul>
                                <ul class="finish">
                                    <li>Lorem is simply</li>
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="footer-mid-col2 footer-mid-col">
                                <div class="title">
                                    MENU
                                </div>
                                <!-- Call Menu -->
                                <?php 
                                $location = get_nav_menu_locations();
                                $menu_id = $location['main-menu'];
                                $main_menu = wp_get_nav_menu_items($menu_id);
                                 ?>
                                <div class="div">
                                    <ul>
                                        <?php if($main_menu): ?>
                                        <?php foreach($main_menu as $menu_item): ?>
                                            <li><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></li>
                                        <?php endforeach ?>    
                                        <?php endif?>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-mid-col3 footer-mid-col">
                                <div class="title">
                                    all category
                                </div>
                                <div class="row row-margin-right">
                                    <?php if(get_field('category_header_menu','options')):?>
                                    <?php foreach(get_field('category_header_menu','options') as $item):?>
                                    <div class="col3-col1"><a href="<?php echo get_category_link( $item['category_header_menu_link'] ); ?>"><?php echo get_the_category_by_ID(  $item['category_header_menu_link'] );?></a></div>
                                    <?php endforeach;?>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="footer-mid-col3-2">
                                <div class="div-empty"></div>
                            </div>
                            <div class="footer-mid-col4 footer-mid-col">
                                <div class="title">
                                    lorem
                                </div>
                                <ul>
                                    <li>Lorem is simple</li>
                                    <li>Lorem is simple</li>
                                    <li>Lorem is simple</li>
                                    <li>Lorem is simple</li>
                                    <li>Lorem is simple</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End footer mid -->
                <!-- Footer bot -->
                    <div class="footer-bot">
                        <div class="container">
                            <div class="footer-bot-inner">
                                <div class="copyright-line1">群馬県公安委員会 古物商許可証 第421090324400号</div>
                                <div class="copyright-line2">Copyright ©STARSHOP 伊勢崎本店 All Rights Reserved.</div>
                            </div>
                        </div>
                    </div>
                <!-- End Footer Bot -->
            </div>
        <!-- End Footer -->


    </div>
    <!-- End Wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
