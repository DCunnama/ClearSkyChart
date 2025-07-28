<?php
/*
Plugin Name: Clear Sky Chart
Description: Displays a clear sky weather widget for Sutherland, South Africa using the Open-Meteo API.
Version: 1.0.0
Author: Clear Sky Contributors
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function clearskychart_shortcode() {
    $src = plugins_url('widget/index.html', __FILE__);
    return '<iframe src="' . esc_url($src) . '" style="border:0;width:100%;height:600px;z-index:1;position:relative"></iframe>';
}
add_shortcode('clearskychart', 'clearskychart_shortcode');
?>
