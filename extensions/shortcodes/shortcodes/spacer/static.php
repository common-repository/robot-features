<?php if (!defined('FW')) die('Forbidden');

$uri = ROBOT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/spacer';

wp_enqueue_style(
    'robot-spacer-shortcode',
    $uri . '/static/css/styles.css'
);
