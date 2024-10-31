<?php if (!defined('FW')) die('Forbidden');

$uri = ROBOT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/post-carousel-1';

wp_enqueue_style(
    'robot-post-carousel-1-shortcode',
    $uri . '/static/css/styles.css'
);

wp_enqueue_script(
	'robot-post-carousel-1-shortcode-script',
    $uri . '/static/js/post-carousel-1.js'
);