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
    return '<iframe src="' . esc_url($src) . '" style="border:0;width:660px;height:600px"></iframe>';
}
add_shortcode('clearskychart', 'clearskychart_shortcode');
?>
