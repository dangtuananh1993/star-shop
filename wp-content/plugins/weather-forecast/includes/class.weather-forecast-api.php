<?php

if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

class Weather_Forecast_API {
    // get json string
    public static function get_JSON($json) {
        return json_decode($json, true);
    }

    // Send request to website
    public static function request($city = 'Ho+Chi+Minh', $like = true, $mode = 'json') {
        $type = ($like) ? 'like' : 'accurate';
        $city = urlencode(trim($city));
        $url = "https://api.openweathermap.org/data/2.5/find?q={$city}&appid=d691c2c720a5541d3f53a0c37d05970b&type={$type}&mode={$mode}";
        @$fget = file_get_contents($url);
        if($fget) {
            return self::get_JSON($fget);
        } 
        return false;
    }
    // get weather data
    public static function get_weather($data = [], $mode = 'json') {
        if($data) {
            $return = [];
            foreach($data as $city_name) {
                $url = "https://api.openweathermap.org/data/2.5/weather?q={$city_name}&appid=d691c2c720a5541d3f53a0c37d05970b&unit=metric&mode={$mode}";
                @$fget = file_get_contents($url);
                if($fget) {
                    $return[] = self::get_JSON($fget);
                }
                // return $fget;
            }
            if($return) {
                return $return;
           }
        } 
        return false;
    }

    // get temperature
    public static function get_temperature($temp = 0, $option = 'celsius') {
        switch ($option) {
            case 'celcius':
                return $temp . 'C';
                break;
            
            case 'fahrenheit':
                return ($temp * 9 / 5 +32) . 'F';
                break;
            
            default:
                echo "mistake";
                break;
        }
    }

    // Get weather
    public static function get_weather_icon($code = '01d') {
        return "https://openweathermap.org/img/w/{$code}.png";
    }
}

