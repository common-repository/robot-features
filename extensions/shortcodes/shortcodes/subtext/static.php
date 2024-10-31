<?php if (!defined('FW')) die('Forbidden');

$uri = ROBOT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/subtext';

wp_enqueue_style(
    'robot-subtext-shortcode',
    $uri . '/static/css/styles.css'
);
