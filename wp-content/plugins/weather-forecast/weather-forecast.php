<?php
/**
 * Plugin Name: Weather Forecast
 * Plugin URI: http://anhdt.com
 * Description: Simple weather plugin
 * Author: AnhDT
 * Version: 1.0.0
 * Author URI: http://anhdt.com
 * Textdomain: starshop
 */



if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

define('WEATHER_FORECAST_VERSION', "1.0.0");
define('WEATHER_FORECAST_MINIMUM_WP_VERSION', "4.1.1");
define('WEATHER_FORECAST_PLUGIN_URL', plugin_dir_url(__FILE__));
define('WEATHER_FORECAST_PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once(WEATHER_FORECAST_PLUGIN_DIR . 'includes/class.weather-forecast.php');
require_once(WEATHER_FORECAST_PLUGIN_DIR . 'includes/class.weather-forecast-api.php');
require_once(WEATHER_FORECAST_PLUGIN_DIR . 'includes/class.weather-forecast-widget.php');

$weather_forecast = new Weather_Forecast;

// echo "<pre>" . print_r(Weather_Forecast_API::get_weather(['Hanoi', 'Ho+Chi+Minh']), true) . "</pre>"; die();