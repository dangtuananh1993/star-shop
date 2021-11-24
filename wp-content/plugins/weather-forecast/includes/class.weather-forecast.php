<?php

if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

class Weather_Forecast {
    public function __construct () {
        $weather_forecast_widget = new Weather_Forecast_Widget;
    }

    public function activation_hook() {

    }

    public function deactivation_hook() {
        
    }
}