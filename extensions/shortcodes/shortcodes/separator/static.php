<?php if (!defined('FW')) die('Forbidden');

$uri = ROBOT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/separator';

wp_enqueue_style(
    'robot-separator-shortcode',
    $uri . '/static/css/styles.css'
);
