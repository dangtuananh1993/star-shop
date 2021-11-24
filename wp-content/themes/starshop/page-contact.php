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
		<div class="container">
			<div class="contac-us">
				<div class="row">
					<div class="contac-us-left">
						<div class="title">Contact US</div>
						<div class="description">We are waiting for your contact</div>
						<div class="form-control">
						<?php echo do_shortcode( '[contact-form-7 id="189" title="Contact Us"]' ); ?>

						</div>
					</div>
					<div class="contact-us-right">
						<div class="contact-us-right-inner">
							<img src="<?php echo get_template_directory_uri().'/img/Header and slider/contact-us.jpg';?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();