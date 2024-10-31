<?php if (!defined('FW')) die('Forbidden');

$uri = ROBOT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/heading';

wp_enqueue_style(
    'robot-heading-shortcode',
    $uri . '/static/css/styles.css'
);
