<?php if (!defined('FW')) die('Forbidden');

$uri = ROBOT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/image-box';

wp_enqueue_style(
    'robot-image-box-shortcode',
    $uri . '/static/css/styles.css'
);
