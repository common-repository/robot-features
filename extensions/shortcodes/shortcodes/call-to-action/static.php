<?php if (!defined('FW')) die('Forbidden');

$uri = ROBOT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/call-to-action';

wp_enqueue_style(
    'robot-call-to-action-shortcode',
    $uri . '/static/css/styles.css'
);

wp_enqueue_script(
	'robot-call-to-action-shortcode-script',
    $uri . '/static/js/call-to-action.js'
);