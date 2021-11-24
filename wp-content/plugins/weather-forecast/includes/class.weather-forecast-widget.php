<?php

if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

class Weather_Forecast_Widget extends WP_Widget {

    /**
	 * Register widget with WordPress.
	 */
    public function __construct() {

        parent::__construct('weather_forecast_widget', //base ID
            esc_html__('Weather Forecast', 'weather_forecast' ), //name
            array('description' => esc_html__( 'Simple Weather Forecast', 'weather_forecast' )) // Args
        );
         
        add_action('widgets_init', function() {
            register_widget('Weather_Forecast_Widget');
        });

        // Add css widget
        add_action('wp_enqueue_scripts', function() {
            wp_register_style('weather-forecast-css', WEATHER_FORECAST_PLUGIN_DIR . 'scripts/css/style.css' );
            wp_enqueue_style('weather-forecast-css');
        });
    }

    /**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
    public function form($instance) {
        $title = (isset($instance['title']) && !empty($instance['title'])) ? apply_filters('widget_title', $instance['title']) : __('Weather Widget', 'weather_forecast');
        $unit = (isset($instance['unit']) && !empty($instance['unit'])) ? $instance['unit'] : 'celsius';
        require_once(WEATHER_FORECAST_PLUGIN_DIR . 'views/weather-forecast-widget-form.php');
    }

    /**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
    public function update($new_instance, $old_instance) {
        $instance = [];
        $instance['title'] = (isset($new_instance['title']) && !empty($new_instance['title'])) ? apply_filters('widget_title', $new_instance['title']) : __('Weather Forecast', 'weather_forcast'); 
        $instance['unit'] = (isset($new_instance['unit']) && !empty($new_instance['unit'])) ? $new_instance['unit'] : 'celsius';
        return $instance;
    }

    /**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
    public function widget($args, $instance) {
        require_once(WEATHER_FORECAST_PLUGIN_DIR . 'views/weather-forecast-widget-view.php');
    }
}