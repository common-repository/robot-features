<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'sidebar' => array(
		'label'   => __( 'Sidebar', 'robot-features' ),
		'desc'    => '',
		'type'    => 'select',
		'choices' => FW_Shortcode_Widget_Area::get_sidebars()
	)
);