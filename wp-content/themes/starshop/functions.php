<?php
/**
 * starshop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package starshop
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'starshop_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function starshop_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on starshop, use a find and replace
		 * to change 'starshop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'starshop', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'starshop' ),
				'main-menu' => esc_html__( 'Main Menu', 'starshop' ),

			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'starshop_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'starshop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starshop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starshop_content_width', 640 );
}
add_action( 'after_setup_theme', 'starshop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starshop_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'starshop' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'starshop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'starshop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function starshop_scripts() {
	// wp_enqueue_style( 'starshop-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'starshop-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'starshop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }

	//Add css Star Shop 
	wp_register_style('starshop-css', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('starshop-css');

	wp_register_style('fontawesome', get_template_directory_uri() . '/css/fontawesome.min.css');
	wp_enqueue_style('fontawesome');

	wp_register_style('slick', get_template_directory_uri() . '/css/slick.css');
	wp_enqueue_style('slick');

	wp_register_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
	wp_enqueue_style('slick-theme');
	
	//add js Star shop
	wp_register_script('jquery-1', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), false, true);
	wp_enqueue_script('jquery-1');

	wp_register_script('starshop-js', get_template_directory_uri() . '/js/script.js', ['jquery-1'], false, true);
	wp_enqueue_script('starshop-js');

	wp_register_script('starshop-slick', get_template_directory_uri() . '/js/slick.min.js', ['jquery-1'], false, true);
	wp_enqueue_script('starshop-slick');
}
add_action( 'wp_enqueue_scripts', 'starshop_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Add Advanced Custom Field
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true,
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

// Search product in category
function advanced_search_query($query) {
	if($query->is_search()) {
		if(isset($_GET['s_cat']) && $_GET['s_cat'] != 0) {
			$query->set('tax_query', array(array(
				'taxonomy' => 'product_cat',
				'field' => 'slug',
				'terms' => array($_GET['s_cat'])
				)
			));
			return $query;
		}
	}
}
add_action('pre_get_posts','advanced_search_query',1);

// Ajax add to cart
/**
 * Enable ajax add to cart for WoCommerce products
 * @author DiviKingdom.Com
 * @version 1.0.0
 */

wp_register_script('adtocart-ajax', get_template_directory_uri() . '/js/ajax-add-to-cart.js', array(), false, true);
wp_enqueue_script('adtocart-ajax');

add_action('wp_ajax_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
add_action('wp_ajax_nopriv_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
		
function woocommerce_ajax_add_to_cart() {

			$product_id = apply_filters('woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
			$quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
			$variation_id = absint($_POST['variation_id']);
			$passed_validation = apply_filters('woocommerce_add_to_cart_validation', true, $product_id, $quantity);
			$product_status = get_post_status($product_id);

			if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) {

				do_action('woocommerce_ajax_added_to_cart', $product_id);

				if ('yes' === get_option('woocommerce_cart_redirect_after_add')) {
					wc_add_to_cart_message(array($product_id => $quantity), true);
				}

				WC_AJAX :: get_refreshed_fragments();
			} else {

				$data = array(
					'error' => true,
					'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id));

				echo wp_send_json($data);
			}

			wp_die();
		}

//Up date cart total 
add_filter( 'woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment' );
function header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<div class="cart-total">
		<?php global $woocommerce; echo $totalamount = $woocommerce->cart->get_cart_total();?>
	</div>
	<?php
	$fragments['div.cart-total'] = ob_get_clean();

	ob_start();
	?>
	<div class="cart-img" data="<?php global $woocommerce; echo $woocommerce->cart->cart_contents_count;?>"><img class="img-cart" src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-cart.png" alt=""></div>
	<?php
	$fragments['div.cart-img'] = ob_get_clean();


	return $fragments;
}

add_theme_support( 'woocommerce' );

// add to cart button simple single  product
wp_register_script('add-to-cart-button-simple', get_template_directory_uri() . '/js/add-to-cart-button-simple.js', array(), false, true);
wp_enqueue_script('add-to-cart-button-simple');

/**
 * Change several of the breadcrumb defaults
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' &#47; ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"> <div class="container">',
            'wrap_after'  => '</div></nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}

// Remove rating, price, meta, breadcrumb excerpt star single product
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );


// Add Product SKU
add_action( 'woocommerce_single_product_summary', 'custom_single_product_summary_SKU', 10 );
function custom_single_product_summary_SKU() { 
    global $product; 

    $product_SKU = $product->get_sku(); // The product SKU

    // Displaying your custom field under the title
    echo '<div class="product-SKU"> Product SKU:' . ' ' . $product_SKU . '</div>';
}

// Add Product Price Single Product
add_action( 'woocommerce_single_product_summary', 'custom_single_product_summary_price', 10 );
function custom_single_product_summary_price() { 
    global $product; 

    $product_price = $product->get_price(); // The product html price

    // Displaying your custom field under the title
    echo '<div class="product-price"> Price:' . ' <span>' . $product_price . ' ¥</span></div>';
}

// Add Product Stock Quantity
add_action( 'woocommerce_single_product_summary', 'custom_single_product_summary_stock', 10 );
function custom_single_product_summary_stock() { 
    global $product; 

    $product_stock = $product->get_stock_quantity(); // The product stock

    // Displaying your custom field under the title
    echo '<div class="product-stock"> Stock Quantity:' . ' ' . $product_stock . '</div>';
}

// Adding Single Product Sharing
add_action( 'woocommerce_single_product_summary', 'custom_single_product_summary_sharing', 40 );
function custom_single_product_summary_sharing() { 
    // Displaying your custom field under the title
    echo '<div class="product-sharing"> <div class="content">Follow Us:</div>
	<div class="facebook"><a href=""><i class="fab fa-facebook-f"></i></a></div>
	<div class="twister"><a href=""><i class="fab fa-twitter"></i></a></div> </div>';
}

// Adding Single Product Related
add_action( 'woocommerce_after_main_content1', 'woocommerce_output_related_products', 20 );

// Add action Breadcrumb Single Product
add_action( 'woocommerce_before_main_content1', 'woocommerce_breadcrumb', 20 );

// Remove Components in Category Page
remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
// remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );


/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options –> Reading
  // Return the number of products you wanna show per page.
  $cols = 5;
  return $cols;
}

// Remove pagination
remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );


// Add sale flash
add_filter('woocommerce_sale_flash', 'woocommerce_custom_sale_text', 10, 3);
function woocommerce_custom_sale_text($text, $post, $_product)
{
    return '<span class="onsale">PUT YOUR TEXT</span>';
}

// Pagination category product
if(!function_exists('category_product_pagination')) {
	function category_product_pagination(WP_Query $wp_query = null, $echo = true) {
		if($wp_query === null) {
			global $wp_query; 
		}
		$pages = paginate_links(array(
			'base' => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'total'        => $wp_query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
		));
		if(is_array($pages)) {
			$pagination = '<div class="rt-pagination pt-60 text-center">
								<ul class="clearfix">';
								echo "123";
			foreach($pages as $page) {
				echo $page;
				echo "123";
			}
			// $pagination .= 								
			$pagination .= 		'</ul>
							</div>';
							echo $pagination;
		}
		return null;
	}
}