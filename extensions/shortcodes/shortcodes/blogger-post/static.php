<?php if (!defined('FW')) die('Forbidden');

$uri = ROBOT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/blogger-post';

wp_enqueue_style(
    'robot-blogger-post-shortcode',
    $uri . '/static/css/styles.css'
);