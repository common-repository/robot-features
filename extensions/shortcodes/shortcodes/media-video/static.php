<?php if (!defined('FW')) die('Forbidden');

$uri = ROBOT_PLUGIN_URL .'/extensions/shortcodes/shortcodes/media-video';

wp_enqueue_style(
    'robot-media-video-shortcode',
    $uri . '/static/css/styles.css'
);

wp_enqueue_script(
	'robot-media-video-shortcode-script',
    $uri . '/static/js/video.js'
);