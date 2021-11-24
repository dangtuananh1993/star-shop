<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package starshop
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'starshop' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		<form action="">
			<div class="search-sl">
				<select name="" id="">
					<option value="1">All Category</option>
					<option value="2">milk very good </option>
					<option value="3">third Category</option>
				</select>
			</div>
			<div class="search-input">
				<input type="text" placeholder="Search Product you need">
			</div>
			<div class="search-button">
				<button type="submit"><img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-search.png" alt=""></button>
			</div>
		</form>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
