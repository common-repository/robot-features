<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'height' => array(
		'label' => __( 'Height', 'robot-features' ),
		'type'  => 'slider',
		'value' => 30,
		'desc'  => __( 'Spacer`s height (px).', 'robot-features' ),
	),
);