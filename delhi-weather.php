<?php
/*
Plugin Name: Delhi Weather
Description: Displays a delhi weather widget.
Version: 1.0
Author: BISHWAJEET KUMAR
*/

// Shortcode to display the delhi weather widget
function delhi_weather_widget_shortcode($atts) {
    ob_start();
    ?>
    <div class="delhi-weather-widget">
        <div class="weather-icon"><?php echo get_delhi_weather_icon(); ?></div>
        <div class="weather-details">
            <div class="weather-location">New Delhi, India</div>
            <div class="weather-temp"><?php echo get_delhi_temperature(); ?></div>
            <div class="weather-condition"><?php echo get_delhi_condition(); ?></div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('delhi_weather_widget', 'delhi_weather_widget_shortcode');

// Function to get a delhi weather icon (you can expand this with more icons)
function get_delhi_weather_icon() {
    $icons = array('☀️', '🌤️', '⛅', '🌦️', '🌧️', '🌨️', '⛈️', '🌩️', '🌫️');
    return $icons[array_rand($icons)];
}

// Function to get a delhi temperature (you can adjust the range)
function get_delhi_temperature() {
    return rand(25, 35) . '°C'; // Temperature in Celsius
}

// Function to get a delhi weather condition (you can expand this with more conditions)
function get_delhi_condition() {
    $conditions = array('Sunny', 'Partly Cloudy', 'Cloudy', 'Showers', 'Rain', 'Thunderstorms', 'Fog');
    return $conditions[array_rand($conditions)];
}
