<?php if (!defined('FW')) die('Forbidden');

$uri = ROBOT_PLUGIN_URL .'extensions/shortcodes/shortcodes/quote-carousel';

wp_enqueue_style(
    'robot-quote-carousel-shortcode',
    $uri . '/static/css/styles.css'
);