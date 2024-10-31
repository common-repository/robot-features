<?php if (!defined('FW')) die('Forbidden');

$uri = ROBOT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/icon-box';

wp_enqueue_style(
    'robot-icon-box-shortcode',
    $uri . '/static/css/styles.css'
);