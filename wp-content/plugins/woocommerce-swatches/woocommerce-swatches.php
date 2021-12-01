<?php
/**
 * Plugin Name: Woocommerce Swatches
 * Plugin URI: http://anhdt.com
 * Description: Simple Woocommerce Swatches
 * Author: AnhDT
 * Version: 1.0.0
 * Author URI: http://anhdt.com
 * Textdomain: starshop
 */

define('WOOCOMMERCE_SWATCHES_PLUGIN_URL', plugin_dir_url(__FILE__));
define('WOOCOMMERCE_SWATCHES_PLUGIN_DIR', plugin_dir_path(__FILE__)); 

require_once(WOOCOMMERCE_SWATCHES_PLUGIN_DIR . 'inc/helpers.php');
require_once(WOOCOMMERCE_SWATCHES_PLUGIN_DIR . 'inc/hooks.php');
require_once(WOOCOMMERCE_SWATCHES_PLUGIN_DIR . 'inc/filters.php');

 /**
 * Register the "book" custom post type
 */
if(!function_exists('ws_setup_post_type')) {
    function ws_setup_post_type() {
        register_post_type( 'book', ['public' => true ] ); 
    } 
    add_action( 'init', 'ws_setup_post_type' );
}

/**
 * Activate the plugin.
 */
function pluginprefix_activate() { 
    // Trigger our function that registers the custom post type plugin.
    ws_setup_post_type(); 
    // Clear the permalinks after the post type has been registered.
    flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'pluginprefix_activate' );

/**
 * Deactivation hook.
 */
function pluginprefix_deactivate() {
    // Unregister the post type, so the rules are no longer in memory.
    unregister_post_type( 'book' );
    // Clear the permalinks to remove our post type's rules from the database.
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'pluginprefix_deactivate' );