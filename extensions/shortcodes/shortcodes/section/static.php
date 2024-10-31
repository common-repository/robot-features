<?php if (!defined('FW')) die('Forbidden');

$uri = ROBOT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/section';

wp_enqueue_style(
    'robot-section-shortcode',
    $uri . '/static/css/styles.css'
);

wp_enqueue_script(
	'robot-section-shortcode-script',
    $uri . '/static/js/section.js'
);