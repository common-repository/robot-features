<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'align'   => array(
		'type'  => 'select',
		'label' => __( 'Align', 'robot-features' ),
		'desc'  => __( 'Set the align.', 'robot-features' ),
		'value' => 'center',
		'choices' => array(
			'center' => __('center', 'robot-features'),
			'left' => __('left', 'robot-features'),
			'right' => __('right', 'robot-features'),
		),
	),
	'color'              => array(
		'label' => __( 'Color', 'robot-features' ),
		'type'  => 'color-picker',
		'value' => '',
		'desc'  => __( 'You can add specific color.', 'robot-features' ),
	),
	'content'                  => array(
		'label' => __( 'Text', 'robot-features' ),
		'type'  => 'textarea',
		'value' => '',
		'desc'  => __( 'Add the content.', 'robot-features' ),
	),
);