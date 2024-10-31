<?php if (!defined('FW')) die('Forbidden');

$uri = ROBOT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/icon';

wp_enqueue_style(
    'robot-icon-shortcode',
    $uri . '/static/css/styles.css'
);
